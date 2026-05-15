
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('translate.certyficate')}} - {{auth()->user()->name}}</title>
    <style>
        html {
            box-sizing: border-box;
            color: #0a2c5c;
            font-family: 'DejaVu Sans', Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            padding: 0;
        }
        .inner {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
            position: relative;
        }
        .content {
            position: absolute;
            top: 7%;
            left: 400px; /* Przesunięcie w prawo, aby ominąć serce */
            width: 600px;
            text-align: center;
        }
        .title {
            text-transform: uppercase;
            font-size: 100px; /* Duży napis CERTYFIKAT */
            font-weight: bold;
            margin-bottom: 20px;
        }
        .potwierdza {
            text-transform: uppercase;
            font-size: 18px;
            margin-bottom: 5px;
            letter-spacing: 2px;
        }
        .firm {
            font-size: 45px;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .desc {
            font-size: 16px;
            text-transform: uppercase;
            margin-bottom: 25px;
            line-height: 1.4;
            font-weight: bold;
        }
        .fundation {
            font-size: 40px;
            font-weight: 800;
            line-height: 35px;
            margin-bottom: 30px;
        }
        .footer-section {
            position: absolute;
            bottom: 190px;
            left: 400px;
            width: 600px;
        }
        .date-container {
            float: left;
            text-align: left;
            font-size: 25px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .date-label {
            font-size: 20px;
            display: block;
            font-weight: normal;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="inner" style="background-image: url({{ App::environment() == 'local' ? public_path().'/images/certyficate_bg_new.png' : asset('images/certyficate_bg_new.png') }});">
    <div class="content">
        <div class="title">
            {{__('translate.certyficate')}}
        </div>

        <div class="potwierdza">
            {{__('translate.potwierdza')}}
        </div>

        <div class="firm">
            {{auth()->user()->name}}
        </div>

        <div class="desc">
            {{__('translate.certyficate_przekazala')}}
        </div>

        <div class="fundation">
            {{$foundation->foundation->name ?? $foundation->name}}
        </div>
    </div>

    <div class="footer-section">
        <div class="date-container">
            <span class="date-label">{{__('translate.date_label')}}:</span>
            <span class="date-value">{{ $cert50->created_at->format('d.m.Y') }}</span>
        </div>
    </div>
</div>
</body>
</html>
