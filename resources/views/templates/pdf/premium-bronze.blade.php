
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('premium.certificates.pdf.title') }} - {{ $firm->user->name }}</title>
    <style>
        @page {
            margin: 0;
            size: a4 landscape;
        }
        html, body {
            margin: 0;
            padding: 0;
            width: 297mm;
            height: 210mm;
            overflow: hidden;
            font-family: 'DejaVu Sans', sans-serif;
            color: #aa8f75;
        }
        .container {
            width: 297mm;
            height: 210mm;
            position: absolute;
            left: 0;
            top: 0;
            background-image: url('{{ public_path('images/certificate/certyfikat_brown.jpg') }}');
            background-size: cover;
            overflow: hidden;
        }
        .main-content {
            padding: 85mm 45mm 0 65mm;
            position: relative;
            z-index: 3;
            height: 100%;
            box-sizing: border-box;
            text-align: center;
        }
        .confirmation {
            font-size: 16pt;
            color: #666;
        }
        .firm-name {
            font-size: 26pt;
            font-weight: bold;
            margin-top: 2mm;
            color: #aa8f75;
            text-transform: uppercase;
        }
        .donated {
            font-size: 20pt;
            font-weight: bold;
            margin-top: 2mm;
            color: #aa8f75;
        }
        .description {
            margin-top: 4mm;
            padding: 0 10mm;
            font-size: 13pt;
            line-height: 1.5;
            color: #666;
            text-align: center;
        }
        .footer {
            position: absolute;
            bottom: 25mm;
            right: 30mm;
            text-align: right;
        }
        .date {
            font-size: 12pt;
            font-weight: bold;
            font-style: italic;
            color: #aa8f75;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="confirmation">
                {{ __('premium.certificates.pdf.confirmation') }}
            </div>

            <div class="firm-name">
                {{ $firm->user->name }}
            </div>

            <div class="donated">
                {{ __('premium.certificates.pdf.donated', ['amount' => number_format($amount, 0, ',', ' ')]) }}
            </div>

            <div class="description">
                {{ __('premium.certificates.pdf.description') }}
            </div>

            </div>
        </div>

        <div class="footer">
            <div class="date">
                {{ __('premium.certificates.pdf.date', ['date' => $date]) }}
            </div>
        </div>
    </div>
</body>
</html>
