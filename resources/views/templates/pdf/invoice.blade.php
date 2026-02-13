
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faktura PDF</title>
    <style>
        @page {
            margin: 0.5cm;
        }
        html {
            box-sizing: border-box;
            color: #1e293b;
            font-family: 'DejaVu Sans', Helvetica, sans-serif;
            line-height: 1.4;
        }
        body {
            margin: 0;
            padding: 20px;
        }
        .header {
            width: 100%;
            margin-bottom: 30px;
        }
        .header table {
            width: 100%;
            border-collapse: collapse;
        }
        .logo-section {
            width: 50%;
            vertical-align: top;
        }
        .info-section {
            width: 50%;
            text-align: right;
            vertical-align: top;
        }
        .invoice-title {
            font-size: 36px;
            color: #0b2a55;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .info-table {
            float: right;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 2px 5px;
            font-size: 14px;
        }
        .info-label {
            color: #64748b;
            text-align: right;
            padding-right: 15px !important;
        }
        .info-value {
            color: #0b2a55;
            font-weight: bold;
            text-align: left;
        }
        .info-value-large {
            font-size: 18px;
        }

        .address-section {
            width: 100%;
            margin-top: 70px;
            margin-bottom: 10px;
            border-top: 1px solid #e2e8f0;
            padding-top: 40px;
        }
        .address-table {
            width: 100%;
            border-collapse: separate;
        }
        .address-box {
            width: 48%;
            border: 1px solid #0b2a55;
            border-radius: 10px;
            padding: 15px;
            min-height: 120px;
            vertical-align: top;
        }
        .address-box h3 {
            margin: 0 0 10px 0;
            color: #64748b;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: normal;
        }
        .address-content {
            font-size: 12px;
            color: #0b2a55;
        }
        .address-content strong {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .items-table th {
            background-color: #e2e8f0;
            color: #0b2a55;
            font-size: 11px;
            text-transform: uppercase;
            padding: 8px;
            border: 1px solid #cbd5e1;
        }
        .items-table td {
            padding: 8px;
            font-size: 12px;
            border: 1px solid #e2e8f0;
            color: #475569;
        }
        .text-center { text-align: center; }
        .text-right { text-align: right; }

        .summary-row td {
            border: 1px solid #e2e8f0;
            padding: 8px;
            font-size: 12px;
            font-weight: bold;
            color: #0b2a55;
        }
        .summary-label {
            text-align: right;
            background-color: white;
            color: #64748b !important;
            font-weight: normal !important;
        }

        .payment-details {
            margin-top: 40px;
            width: 100%;
            font-size: 12px;
            color: #64748b;
        }
        .payment-details table {
            width: 100%;
            border-collapse: collapse;
        }
        .payment-details td {
            padding: 5px 0;
            border-bottom: 1px solid #f1f5f9;
        }
        .payment-label {
            width: 150px;
        }
        .payment-value {
            color: #0b2a55;
            font-weight: bold;
        }

        .clear { clear: both; }
    </style>
</head>
<body>

<div class="header">
    <table>
        <tr>
            <td class="logo-section">
                @if (App::environment() == 'local')
                    <img height="120" src="{{ public_path().'/images/logo.png' }}" alt="logo">
                @else
                    <img height="120" src="{{ asset('images/logo.png') }}" alt="logo">
                @endif
            </td>
            <td class="info-section">
                <div class="invoice-title">INVOICE</div>
                <table class="info-table">
                    <tr>
                        <td class="info-label">Invoice No.:</td>
                        <td class="info-value info-value-large">{{ isset($GenNumber) ? $GenNumber : (string)$maskNumber.'/'.\Carbon\Carbon::now()->format('m').'/'.\Carbon\Carbon::now()->format('Y').'_Work' }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Date:</td>
                        <td class="info-value">{{ $date->format('d.m.Y') }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Due date:</td>
                        <td class="info-value">{{ $date->format('d.m.Y') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<div class="address-section">
    <table class="address-table">
        <tr>
            <td class="address-box">
                <h3>SELLER</h3>
                <div class="address-content">
                    <strong>WORK 4 YOU GLOBAL LTD</strong>
                    Office 180B, 182-184 High Street<br>
                    North London E6 2JA<br><br>
                    Company No.: 11112672
                </div>
            </td>
            <td width="4%"></td>
            <td class="address-box">
                <h3>BILL TO</h3>
                <div class="address-content">
                    <strong>{{ $user->firm->name_invoice }}</strong>
                    {{ $user->firm->street_invoice }}<br>
                    {{ $user->firm->postal_invoice }} {{ $user->firm->city_invoice }}<br>
                    {{ $user->firm->country_invoice }}<br><br>
                    Company No.: {{ $user->firm->nip_invoice }}
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="clear"></div>
<div style="height: 20px;"></div>

<table class="items-table">
    <thead>
        <tr>
            <th width="40">No.</th>
            <th>Description</th>
            <th width="60">Qty</th>
            <th width="100">Unit price</th>
            <th width="100">Total</th>
        </tr>
    </thead>
    <tbody>
        @php $i = 1; @endphp
        @foreach ($cartItems as $item)
        <tr>
            <td class="text-center">{{ $i++ }}</td>
            <td>{{ $item->name }}</td>
            <td class="text-center">{{ $item->qty }}</td>
            <td class="text-right">${{ number_format($item->price, 0) }}</td>
            <td class="text-right">${{ number_format($item->price * $item->qty, 0) }}</td>
        </tr>
        @endforeach

        <tr class="summary-row">
            <td colspan="4" class="summary-label">Total amount:</td>
            <td class="text-right">${{ number_format($amount, 0) }}</td>
        </tr>
        <tr class="summary-row">
            <td colspan="4" class="summary-label">Reverse charge:</td>
            <td class="text-right"></td>
        </tr>
    </tbody>
</table>

<div class="payment-details">
    <table>
        <tr>
            <td class="payment-label">Payment terms:</td>
            <td class="payment-value">Bank Transfer</td>
        </tr>
        <tr>
            <td class="payment-label">Transfer Detail:</td>
            <td class="payment-value">MBank</td>
        </tr>
        <tr>
            <td class="payment-label">Transfer Detail:</td>
            <td class="payment-value">39 1140 1179 0000 4255 2700 1001</td>
        </tr>
    </table>
</div>

</body>
</html>
