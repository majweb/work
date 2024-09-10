
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faktura Pdf - zamówienia {{$order->id}}</title>
    <style>
        body{
            background-repeat: no-repeat;
            background-position: bottom left;
            background-size:contain;
        }
        #watermark {
            position: fixed;
            top:   1px;
            left:     0px;
            width:    18.57cm;
            height:   27cm;
            z-index:  -1000;
            border:1px solid #00a0e3;
        }

        html {
            box-sizing: border-box;
            color: gray;
            font-family: 'DejaVu Sans', Helvetica, sans-serif;
        }
        table{
            border-collapse: collapse;
        }
        .inner{

            position: relative;
        }
        .logo{

            position: relative;
            top:2px;
            left: 50px;
        }
        .right-column{
            position: absolute;
            left:403px;
            top:1px;
            width: 300px;
            border-left:1px solid rgb(212, 212, 212);
            border-bottom:1px solid rgb(212, 212, 212);
            border-collapse: collapse;
        }
        td{
            padding:0;
            padding-top: 3px;
            padding-bottom: 3px;
            border:none;
        }
        .right-column-second-row{
            position: relative;
            left:403px;
            top:0;
            width: 300px;
            font-size: 10px;
            height: 50px;
            border:1px solid #00a0e3;
            border-bottom: 0;
            border-right: 0;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .column-title{
            text-align: center;
            width: 100%;
            display: block;
            font-weight: bold;
            font-size:14px;
            border:none;
            border-bottom:1px solid #00a0e3;
            vertical-align: middle;
            margin: 0;padding: 0;
            outline:none;
            position: relative;
            top: -5px;
        }
        .table-result{
            width: 100%;
        }
        .table-result th{
            background: rgb(230, 229, 229);
            color:gray;
            font-size:12px;
            border:1px solid rgb(212, 212, 212);
        }
        .table-result td{
            color:gray;
            font-size:10px;
            border:1px solid rgb(196, 194, 194);
        }
        .tr-result{
            background:#E31E249E;
        }


    </style>
</head>
<body>
<div id="watermark"></div>
<div class="inner">
    <div class="logo">
        @if (App::environment() == 'local')
            <img height="200" src="{{ public_path().'/images/logo.png' }}" alt="logo">
        @else
            <img height="200" src="{{ asset('images/logo.png') }}" alt="logo">
        @endif
    </div>
    <table class="right-column" border="0">
        <tbody>
        <tr>
            <td colspan="2" style="text-align:center;text-transform:uppercase;font-size:15px;border-bottom:1px solid rgb(212, 212, 212);">Invoice</td>
            {{ $order->user->firm->name_invoice }}
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;font-size:10px;">Reverse Charge</td>
        </tr>
        <tr style="color:white;">
            <td style="font-weight:bold;border:1px solid rgb(67, 151, 219);background:#00a0e3;width:90px;font-size:10px;text-align:right;padding-right:30px;">Invoice No</td>
            <td style="border:1px solid rgb(67, 151, 219);border-right:none;background:#00a0e3;font-size:13px;font-weight:bold;text-align:center;">{{ isset($GenNumber) ? $GenNumber : (string)$maskNumber.'/'.\Carbon\Carbon::now()->format('m').'/'.\Carbon\Carbon::now()->format('Y') }}</td>
        </tr>
        <tr>
            <td style="width:90px;;font-size:10px;text-align:right;padding-right:30px;border-right:1px solid rgb(212, 212, 212);border-bottom:1px solid rgb(212, 212, 212);">Date</td>
            <td style="font-size:10px;text-align:center;border-bottom:1px solid rgb(212, 212, 212);">{{ $date->format('d.m.Y') }}</td>
        </tr>
        <tr>
            <td style="width:90px;font-size:10px;text-align:right;padding-right:30px;border-right:1px solid rgb(212, 212, 212);border-bottom:1px solid rgb(212, 212, 212);">Due Date</td>
            <td style="font-size:10px;text-align:center;">{{ $date->format('d.m.Y') }}</td>
        </tr>
        </tbody>
    </table>
    <table class="right-column-second-row" border="0" style="margin-top:-50px;">
        <tr>
            <td style="width:90px;font-size:10px;text-align:center;padding-right:30px;border-right:1px solid lightblue;font-weight:bold;">
                              <span style="margin-left:42px">
                                    Ship to:
                              </span>
            </td>
            <td style="padding-left:10px;font-size:10px;">
                {{ $order->user->firm->name_invoice }}<br>
                {{ $order->user->firm->street_invoice }}<br>
                {{ $order->user->firm->postal_invoice }} {{ $order->user->firm->city_invoice }} {{ $order->user->firm->country_invoice }}
            </td>
        </tr>
    </table>
    <div style="width: 100%;background:#00a0e3;height:20px;"></div>
    <div style="margin-bottom:30px;">
        <div class="left" style="float:left;width:320px;border:1px solid #00a0e3;border-top:none;border-left:0;min-height:170px;text-align:center;">
            <span class="column-title" style="border-color:#00a0e3;padding-top:5px;">Seller</span>
            <p style="margin:0;font-weight:bold;font-size:12px;">WORK 4 YOU GLOBAL LTD</p>
            <p style="margin:0;line-height:16px;font-size:12px;padding-bottom:10px;">Office 180B, 182-184 High Street, North London<br>
                E6 2JA
            </p>
            <p style="background:#E31E249E;font-weight:bold;padding:5px 0;margin:0;border:none;outline:none;border-left:1px solid #00a0e3;line-height: 11px;">
                <span style="padding-left:30px;font-size:12px;color:white;">Company No.: 11112672</span>
            </p>
        </div>
        <div class="right" style="float:right;width:300px;border:1px solid #00a0e3;border-top:none;border-right:none;min-height:170px;text-align:center;">
            <span class="column-title" style="border-color:#00a0e3;padding-top:5px;">Bill to</span>
            <p style="margin:0;font-weight:bold;text-transform:normal;font-size:12px;padding: 0 5px;">{{ $order->user->firm->name_invoice }}<br></p>
            <p style="margin:0;margin-bottom:10px;line-height:16px;font-size:13px;padding-bottom:10px;padding: 0 5px;">{{ $order->user->firm->street_invoice }}<br>
                {{ $order->user->firm->postal_invoice }} {{ $order->user->firm->city_invoice }} {{ $order->user->firm->country_invoice }}
            </p>
            <p style="background:#E31E249E;font-weight:bold;padding:5px 0;margin:0;border:none;outline:none;line-height: 11px;">
                <span style="padding-left:30px;font-size:12px;color:white;">Company No.: {{ $order->user->firm->nip_invoice }}</span>
            </p>
        </div>
    </div>
    <div class="clear" style="clear:both;"></div>
    <div style="height:30px;"></div>
    <table class="table-result">
        <thead>
        <tr>
            <th style="border-left-color:#00a0e3;">q</th>
            <th>Description</th>
            <th>GBP/PLN Exchange Rate</th>
            <th>Unit price (GBP)</th>
            <th>Unit price PL</th>
            <th>Total PLN</th>
        </tr>
        </thead>
        <tbody>
        @php
            $price=0;
        @endphp
        <tr>
            <td style="border-left:none;text-align:center;">1</td>
            <td style="border-left:none;">
                @foreach ($order->orderProducts as $product)
                    <span style="padding-left:5px;">
                                              {{ $product->product->trans_name[app()->getLocale()] }}<br>
                                          </span>
                @endforeach
                <br>
                <span style="text-align:left !important;padding-left:5px;">
                                          portal work4you.global.pl<br>
                                    </span>
                <span style="text-align:left !important;padding-left:5px;">
                                          Nr zamówienia {{$order->id}}
                                    </span>
            </td>
            <td></td>
            <td></td>
            <td style="border-right:none;text-align:center;">{{$order->amount}} {{Auth::user()->firm->currency}}</td>
            <td style="border-right:none;text-align:center;">{{$order->amount}} {{Auth::user()->firm->currency}}</td>
        </tr>
        <tr class="tr-result" style="border-left:none;">
            <td colspan="2" style="text-align:right;padding-right:20px;border:none;color:white;"><span>Total amount<br></span><span>Notes:</span></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="border-right:none;text-align:center;">
                {{$order->price}}
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right;padding-right:20px;border-left:none;">Reverse charge</td>
            <td colspan="3" style="border:none;"></td>
            <td style="border-right:none;"></td>
        </tr>
        <tr>
            <td colspan="6" style="border:none;height:30px;border-right:none;"></td>
        </tr>
        <tr>
            <td colspan="2" style="border-left:none;text-align:right;padding-right:20px;">Payment terms</td>
            <td colspan="2" style="text-align:left;padding-left:20px;">Bank Transfer</td>
            <td style="border:none;"></td>
            <td style="border-bottom:none;border-right:none;"></td>
        </tr>
        <tr>
            <td colspan="2" style="border-left:none;text-align:right;padding-right:20px;">Transfer Detail</td>
            <td colspan="2" style="text-align:left;padding-left:20px;">M Bank</td>
            <td style="border:none;"></td>
            <td style="border-top:none;border-bottom:none;border-right:none;text-align:center;">Bank transfer</td>
        </tr>
        <tr>
            <td colspan="2" style="border-left:none;text-align:right;padding-right:20px;">Bank account</td>
            <td colspan="2" style="text-align:left;padding-left:20px;">39 11401179 0000 4255 2700 1001</td>
            <td style="border-top:none;"></td>
            <td style="border-top:none;border-left:none;border-right:none;"></td>
        </tr>
        </tbody>
    </table>
    <p style="background:rgb(230, 229, 229);margin-top:50px;text-align:right;font-size:10px;width:400px;float:right;padding:5px 0;padding-right:20px;">Please contact us for more information about payment options<br>Thank you for your business</p>
    <div class="clear" style="clear:both;"></div>
</div>
</body>
</html>
