
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
        }
        table{
            border-collapse: collapse;
        }
        .inner{
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: 100%;
            position: relative;
            text-align: center;

        }
        .title{
            padding-top: 20px;
            text-transform: uppercase;
            font-size: 60px;
        }
        .for{
            font-size: 20px;
            text-transform: uppercase;
        }
        .firm{
            font-size: 50px;
            padding: 20px 0;
            font-weight: bold;
        }
        .desc{
            width: 47%;
            text-align: center;
            margin:0 auto;
        }
        .logo{
            position: absolute;
            bottom:30px;
            left: 50%;
            transform: translateX(-50%);
        }
        .fundation{
            color: #6bacea;
            text-transform: uppercase;
            padding: 20px 0;
            font-size: 40px;
        }
    </style>
</head>
<body>
<div id="watermark"></div>
<div class="inner" style="background-image: url({{ App::environment() == 'local' ? public_path().'/images/certyficate_bg.png' : asset('images/certyficate_bg.png') }});">
    <div class="title">
        {{__('translate.certyficate')}}
        Bronze
    </div>
    <div class="firm">
        {{auth()->user()->name}}
    </div>
    <div class="desc">{{__('translate.forInfo')}}</div>
    <div class="logo">
        <div class="with">{{__('translate.forPosre')}}</div>
        @if (App::environment() == 'local')
            <img width="400" src="{{ public_path().'/images/certyficate_logo.png' }}" alt="logo">
        @else
            <img width="400" src="{{ asset('images/certyficate_logo.png') }}" alt="logo">
        @endif
    </div>
</div>
</body>
</html>
