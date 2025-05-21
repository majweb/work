<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Work') }}</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: "DejaVu Sans", sans-serif !important;
        }
        .card {
            width: 100%;
        }
        .grid-border{
            height: 280px;
            width: 700px;
            margin:0 auto;
        }
        .grid-container {
            width: 700px;
            margin: 0 auto;
            position: relative;
        }
        .left-column-top {
            float: left;
            width: 45%;
            padding-top: 80px;
        }
        .subtitle{
            margin: 0;
            padding: 0;
        }
        .right-column-top {
            float: right;
            width: 55%;
            color: black;
        }
        .left-column {
            float: left;
            width: 50%;
            color: black;
        }
        .right-column {
            float: right;
            width: 50%;
            color: black;
        }
        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            left: 50%;
            top: 45%;
            transform: translate(-50%, -50%);
            border: 20px solid #bba7bb;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-block {
            padding-left: 5px;
            margin: 10px 0 !important;
        }
        .without{
            list-style: disc !important;
            padding-left: 15px !important;
            margin: 10px 0 !important;
        }
        .info-item {
            position: relative;
            margin-bottom: 5px;
        }
        .info-item img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            vertical-align: middle;
        }
        .info-item span {
            margin-left: 10px;
            display: inline-block;
            vertical-align: middle;
        }
        .name {
            font-size: 40px;
            font-weight: bold;
            line-height: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            padding-top: 20px;
            margin-bottom: 0;
        }
        .section {
            font-size: 12px;
            color: black;
            position: relative;
        }
        .section ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .experience p,
        .education p,
        .courses p {
            margin: 0;
            font-size: 12px;
        }
        .logo {
            position: absolute;
            bottom:30px;
            width: 120px;
            left:50%;
            transform: translateX(-50%);
        }
        .logo img {
            vertical-align: middle;
            position: relative;
            top: 20px;
        }
        .generate {
            float: left;
            font-size: 12px;
            position: relative;
            left: -100px;
            top: 70px;
        }
        .clear {
            clear: both;
        }
        .top-flower{
            position: absolute;
            top:-70px;
            left: -25px;
        }
        .bottom-flower{
            position: absolute;
            bottom:-30px;
            right: -140px;
            transform: rotate(270deg);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="top-flower">
        <img width="400" src="{{public_path('storage/cv/13/icons/1.svg')}}" alt="flower-top">
    </div>
    <div class="bottom-flower">
        <img width="400" src="{{public_path('storage/cv/13/icons/1.svg')}}" alt="flower-bottom">
    </div>
    <div class="card">
        <div class="grid-container">
            <div class="grid-border">
                <div class="left-column-top">
                    <h2 class="name">{!! $data['name'].'<br>'.$data['surname'] !!}</h2>
                </div>
                <div class="right-column-top">
                    <div class="profile-pic">
                        <img src="{{$image}}" alt="Profile Photo">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <!-- Lewa kolumna -->
            <div class="left-column">
                <div class="section">
                    <div>
                        <div style=" display: table; width: 100%;">
                            <div style="display: table-cell;border-radius: 50%; width: 40px;">
                                <img src="{{ public_path('storage/cv/13/icons/2.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                            </div>
                            <div style="display: table-cell; padding-left: 0px;vertical-align: middle">
                                <h3 style="margin:0;margin-left:10px;font-size: 22px;padding:0;">{{ __('CvContact') }}</h3>
                            </div>
                        </div>
                        <div class="info-block">
                            <div class="info-item"><img src="{{ public_path('storage/cv/13/icons/3.svg') }}"/><span>{{$data['birthday']}}</span></div>
                            <div class="info-item"><img src="{{ public_path('storage/cv/13/icons/4.svg') }}"/><span>{{$data['phone']}}</span></div>
                            <div class="info-item"><img src="{{ public_path('storage/cv/13/icons/5.svg') }}"/><span>{{$data['email']}}</span></div>
                            <div class="info-item"><img src="{{ public_path('storage/cv/13/icons/6.svg') }}"/><span>{{$data['postal'].' '.$data['city']}}</span></div>
                        </div>
                    </div>
                    <div>
                        <div style=" display: table; width: 100%;">
                            <div style="display: table-cell;border-radius: 50%; width: 40px;">
                                <img src="{{ public_path('storage/cv/13/icons/7.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                            </div>
                            <div style="display: table-cell; padding-left: 0px;vertical-align: middle">
                                <h3 style="margin:0;margin-left:10px;font-size: 22px;padding:0;">{{ __('CvLangs') }}</h3>
                            </div>
                        </div>
                        <ul class="info-block without">
                            @foreach($data['langs'] as $lang)
                                <li><strong>{{$lang['name']['label']}}</strong><br>
                                    <span>{{$lang['level']['name']}}</span>
                                </li>
                            @endforeach
{{--                            <li>J.Angielski<br>--}}
{{--                                B1-Średniozaawansowany--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <div>
                        <div style=" display: table; width: 100%;">
                            <div style="display: table-cell;border-radius: 50%; width: 40px;">
                                <img src="{{ public_path('storage/cv/13/icons/8.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                            </div>
                            <div style="display: table-cell; padding-left: 0px;vertical-align: middle">
                                <h3 style="margin:0;margin-left:10px;font-size: 22px;padding:0;">{{ __('CvCourses') }}</h3>
                            </div>
                        </div>
                        <ul class="info-block">
                            @foreach($data['courses'] as $course)
                                <li>
                                    <strong>{{$course['name']}}</strong><br>
                                    {{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}
                                </li>
                            @endforeach
{{--                            <li>--}}
{{--                                <strong>Timertman Indistries</strong><br>--}}
{{--                                Kierownik sprzedazy<br>--}}
{{--                                2020 -2023--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <div class="logo">
                        <div class="generate">generated by</div>
                        <div class="clear"></div>
                        <img src="{{ public_path('storage/cv/8/icons/logo.png') }}" alt="logo">
                    </div>
                </div>
            </div>

            <!-- Prawa kolumna -->
            <div class="right-column">
                <div class="section">
                    <div>
                        <div style=" display: table; width: 100%;">
                            <div style="display: table-cell;border-radius: 50%; width: 40px;">
                                <img src="{{ public_path('storage/cv/13/icons/9.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                            </div>
                            <div style="display: table-cell; padding-left: 0px;vertical-align: middle">
                                <h3 style="margin:0;margin-left:10px;font-size: 22px;padding:0;">{{ __('CvExp') }}</h3>
                            </div>
                        </div>
                        <ul class="info-block">
                            @foreach($data['experiences'] as $experience)
                                <li>
                                    <strong>{{$experience['position']['name']}}</strong><br>
                                    {{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}}
                                        {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - '.__('CvNow') : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}
                                        | {{$experience['city'] }}
                                </li>
                            @endforeach
{{--                            --}}
{{--                            <li>--}}
{{--                                <strong>Timertman Indistries | Warszawa</strong><br>--}}
{{--                                Kierownik sprzedazy<br>--}}
{{--                                2020 -2023--}}
{{--                            </li>--}}

                        </ul>
                    </div>
                    <div>
                        <div style=" display: table; width: 100%;">
                            <div style="display: table-cell;border-radius: 50%; width: 40px;">
                                <img src="{{ public_path('storage/cv/13/icons/10.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                            </div>
                            <div style="display: table-cell; padding-left: 0px;vertical-align: middle">
                                <h3 style="margin:0;margin-left:10px;font-size: 22px;padding:0;">{{ __('CvSchool') }}</h3>
                            </div>
                        </div>
                        <ul class="info-block">
                            @foreach($data['educations'] as $education)
                                <li>
                                    <strong>{{$education['school']}} | {{$education['city']}}</strong></br>
                                    {{$education['level']['name']}} - {{$education['specialization']}} | {{__('CvFinish')}} {{$education['finish']}}
                                </li>
                            @endforeach
{{--                            <li>--}}
{{--                                <strong>Timertman Indistries | Warszawa</strong><br>--}}
{{--                                Kierownik sprzedazy<br>--}}
{{--                                2020 -2023--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <div>
                        <div style=" display: table; width: 100%;">
                            <div style="display: table-cell;border-radius: 50%; width: 40px;">
                                <img src="{{ public_path('storage/cv/13/icons/11.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                            </div>
                            <div style="display: table-cell; padding-left: 0px;vertical-align: middle">
                                <h3 style="margin:0;margin-left:10px;font-size: 22px;padding:0;">{{ __('CvDo') }}</h3>
                            </div>
                        </div>
                        <ul class="info-block without">
                            @foreach($data['skills'] as $skill)
                                <li>{{$skill['name']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
