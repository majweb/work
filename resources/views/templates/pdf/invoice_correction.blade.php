
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice Correction PDF</title>
    <style>
        @page { margin: 0.5cm; }
        html { box-sizing: border-box; color: #1e293b; font-family: 'DejaVu Sans', Helvetica, sans-serif; line-height: 1.4; }
        body { margin: 0; padding: 20px; }
        .header { width: 100%; margin-bottom: 30px; }
        .header table { width: 100%; border-collapse: collapse; }
        .logo-section { width: 50%; vertical-align: top; }
        .info-section { width: 50%; text-align: right; vertical-align: top; }
        .invoice-title { font-size: 32px; color: #0b2a55; font-weight: bold; margin-bottom: 10px; text-transform: uppercase; }
        .info-table { float: right; border-collapse: collapse; }
        .info-table td { padding: 2px 5px; font-size: 13px; }
        .info-label { color: #64748b; text-align: right; padding-right: 15px !important; }
        .info-value { color: #0b2a55; font-weight: bold; text-align: left; }

        .address-section { width: 100%; margin-top: 120px; margin-bottom: 20px; border-top: 1px solid #e2e8f0; padding-top: 20px; }
        .address-table { width: 100%; border-collapse: separate; border-spacing: 0; }
        .address-box { width: 49%; border: 1px solid #0b2a55; border-radius: 10px; padding: 15px; min-height: 120px; vertical-align: top; }
        .address-box h3 { margin: 0 0 10px 0; color: #64748b; font-size: 14px; text-transform: uppercase; font-weight: normal; }
        .address-content { font-size: 11px; color: #0b2a55; }
        .address-content strong { display: block; font-size: 13px; margin-bottom: 5px; }

        .items-table { width: 100%; border-collapse: collapse; margin-top: 20px; margin-bottom: 20px; }
        .items-table th { background-color: #e2e8f0; color: #0b2a55; font-size: 10px; text-transform: uppercase; padding: 8px; border: 1px solid #cbd5e1; }
        .items-table td { padding: 8px; font-size: 11px; border: 1px solid #e2e8f0; color: #475569; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }

        .summary-section { margin-top: 20px; border-top: 2px solid #0b2a55; padding-top: 10px; }
        .reason-box { margin-top: 20px; padding: 10px; background-color: #f8fafc; border: 1px solid #e2e8f0; font-size: 11px; }
        .clear { clear: both; }
    </style>
</head>
<body>

<div class="header">
    <table>
        <tr>
            <td class="logo-section">
                <img height="100" src="{{ public_path('images/logo.png') }}" alt="logo">
            </td>
            <td class="info-section">
                <div class="invoice-title">INVOICE<br>CORRECTION</div>
                <table class="info-table">
                    <tr>
                        <td class="info-label">Correction No.:</td>
                        <td class="info-value">{{ $correction->number }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Date of issue:</td>
                        <td class="info-value">{{ $correction->date_correction->format('d.m.Y') }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">To invoice No.:</td>
                        <td class="info-value">{{ $invoice->number }}/{{ $invoice->month }}/{{ $invoice->year }}</td>
                    </tr>
                    <tr>
                        <td class="info-label">Invoice date:</td>
                        <td class="info-value">{{ $invoice->date_invoice->format('d.m.Y') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<div class="address-section">
    <table class="address-table">
        <tr>
            <td class="address-box" style="margin-right: 10px;">
                <h3>SELLER</h3>
                <div class="address-content">
                    <strong>WORK 4 YOU GLOBAL LTD</strong>
                    Office 180B, 182-184 High Street<br>
                    North London E6 2JA<br><br>
                    Company No.: 11112672
                </div>
            </td>
            <td width="2%"></td>
            <td class="address-box">
                <h3>BUYER (Correction data)</h3>
                <div class="address-content">
                    <strong>{{ $correction->name_invoice }}</strong>
                    {{ $correction->street_invoice }}<br>
                    {{ $correction->postal_invoice }} {{ $correction->city_invoice }}<br>
                    {{ $correction->country_invoice }}<br><br>
                    Company No.: {{ $correction->nip_invoice }}
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="clear"></div>

<table class="items-table">
    <thead>
        <tr>
            <th>Description</th>
            <th width="100" class="text-right">Before correction</th>
            <th width="100" class="text-right">After correction</th>
            <th width="100" class="text-right">Difference</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Order value correction</td>
            <td class="text-right">${{ number_format($invoice->amount, 2) }}</td>
            <td class="text-right">${{ number_format($correction->amount, 2) }}</td>
            <td class="text-right">${{ number_format($correction->amount - $invoice->amount, 2) }}</td>
        </tr>
    </tbody>
</table>

<div class="reason-box">
    <strong>Reason for correction:</strong><br>
    {{ $correction->reason ?: 'Invoice data/value correction' }}
</div>

<div class="summary-section">
    <table width="100%">
        <tr>
            <td style="font-size: 14px; font-weight: bold; color: #0b2a55;">TO PAY / TO REFUND:</td>
            <td class="text-right" style="font-size: 18px; font-weight: bold; color: #0b2a55;">
                ${{ number_format($correction->amount - $invoice->amount, 2) }}
            </td>
        </tr>
    </table>
</div>

</body>
</html>
