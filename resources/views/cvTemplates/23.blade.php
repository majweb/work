<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name', 'Work') }}</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ storage_path("fonts/Montserrat/Montserrat-Regular.ttf") }}');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('{{ storage_path("fonts/Montserrat/Montserrat-SemiBold.ttf") }}') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        body {
            font-family: "Montserrat", sans-serif !important;
            margin: 0;
            padding: 0;
            color: #58595b;
        }

        .content-wrapper {
            width: 100%;
            position: relative;
        }

        .left-column {
            float: left;
            background-color: #fbfbfc;
            width: 50%;
            box-sizing: border-box;
        }

        .right-column {
            float: right;
            width: 50%;
            /*padding: 25px;*/
            box-sizing: border-box;
            background-color: #ffffff;
        }

        .clear {
            clear: both;
        }

        .section {
            position: relative;
            margin-bottom: 25px;
            padding-left: 30px;
        }


        .sep {
            position: relative;
        }


        .head-item {
            position: relative;
            /*margin-bottom: 20px;*/
        }


        .left-column .section{
            position: relative;
            min-height: 150px;
            height: auto;
        }

        .section-title {
            position: relative;
            /*margin-bottom: 15px;*/
        }

        .section h2 {
            padding: 0;
            margin: 0 0 5px 0;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }

        .section-title{
            position: relative;
        }

        .section ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            /*padding-left: 25px;*/
        }

        .head-item {
            padding-left: 10px;
            position: relative;
        }
        .left-column .head-item{
            position: relative;
        }
        .left-column .head-item::after {
            content: '';
            position: absolute;
            left: 3px;
            top: 20px;
            bottom: 0;
            width: 2px;
            z-index: 9999;
            height: 100%;
        }
        .left-column .head-item::before {
            content: '';
            position: absolute;
            left: -20px;
            top: 7px;
            width: 10px;
            height: 10px;
            background-color: #334049;
            border-radius: 50%;
            z-index: 2; /* Aby kropki były nad linią */

        }
        /* Dodajemy linię pionową */
        .left-column .head-item:first-child::after {
            content: '';
            position: absolute;
            left: -16px; /* -20px + 5px (połowa szerokości linii) */
            top: 7px; /* Wyrównujemy z pierwszą kropką */
            width: 2px;
            height: calc(100% + 20px); /* Wysokość do następnego elementu */
            background-color: #334049;
            z-index: 1;
        }


        .head-item h3 {
            text-transform: uppercase;
            margin: 0;
            margin-bottom: 5px;
            font-size: 14px;
            padding: 0;
            letter-spacing: 1px;
        }

        .head-item img{
            position: relative;
            top:5px;
        }

        .head-item p {
            margin: 0;
            padding: 0;
            font-size: 12px;
            line-height: 10px;
            letter-spacing: 1px;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            right: 10px;
            overflow: hidden;
            width: 200px;
        }

        .footer span {
            float: left;
            position: relative;
            top: -20px;
            font-size: 15px;
            line-height: 40px;
        }

        .footer img {
            float: left;
            height: 40px;
            margin-left: 5px;
        }

        .left-column-inner{
            position: relative;
            left: 40px;
        }

        .head-item{
            margin-bottom: 0;
        }

        .head-item h3{
            margin-bottom: 0;
            margin-top: 0;
        }

        .header-section {
            width: 100%;
            overflow: hidden;
            margin: 30px 0;
        }

        .header-left-column {
            float: left;
            width: 40%;
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
        }

        .header-right-column {
            float: right;
            width: 45%;
            background-color: #334049;
            padding: 20px;
            box-sizing: border-box;
            color: white;
        }

        .person-name {
            font-size: 35px;
            text-transform: uppercase;
            font-weight: bold;
            line-height: 35px;
            padding: 0;
            margin: 0;
            color: #58595b;
            word-wrap: break-word;
            width: 100%;
        }

        .birth-date {
            font-size: 16px;
            color: #58595b;
            z-index: 99999;
            text-align: right;
            position: relative;
            top: -30px;
            right: 35px;
        }

        .contact-item {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .contact-item img {
            height: 20px;
            width: 20px;
            margin-right: 5px;
            position: relative;
            top: 7px;
        }

        .contact-item span {
            font-size: 14px;
        }

        .separator {
            position: relative;
            width: 100%;
            height: 2px;
            background-color: #334049;
            margin: 20px 0;
        }

        .separator::after {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #334049;
            border-radius: 50%;
            top: -4px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
<div class="footer">
    <span>generated by</span>
    <img src="{{public_path('storage/cv/1/icons/logo.png')}}" alt="logo">
    <div class="clear"></div>
</div>

<div class="header-section">
    <div class="header-left-column">
        <h1 class="person-name">{!! $data['name'].' '.$data['surname'] !!}</h1>
        <p class="birth-date">{{$data['birthday']}}</p>
    </div>
    <div class="header-right-column">
        <div class="contact-item">
            <img src="{{public_path('storage/cv/23/icons/1.svg')}}" alt="telefon">
            <span>{{$data['phone']}}</span>
        </div>
        <div class="contact-item">
            <img src="{{public_path('storage/cv/23/icons/2.svg')}}" alt="email">
            <span>{{$data['email']}}</span>
        </div>
        <div class="contact-item">
            <img src="{{public_path('storage/cv/23/icons/3.svg')}}" alt="adres">
            <span>{{$data['postal'].' '.$data['city']}}</span>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="separator"></div>


<div class="content-wrapper">
    <div class="left-column">
        <div class="left-column-inner" id="left-sections">
            <div class="section">
                <div class="section-title">
                    <h2>{{__('CvExp')}}</h2>
                </div>
                <div class="sep">
                    @foreach($data['experiences'] as $experience)
                        <div class="head-item">
                            <h3>{{$experience['position']['name']}}</h3>
                            <p>{{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}} {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - '.__('CvNow') : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}</p>
                            <p>{{$experience['city'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <h2>{{__('CvSchool')}}</h2>
                </div>
                <div class="sep">
                    @foreach($data['educations'] as $education)
                        <div class="head-item">
                            <h3><strong>{{$education['school']}} | {{$education['city']}}</strong><br></h3>
                            <p>{{$education['level']['name']}} - {{$education['specialization']}} <br>{{__('CvFinish')}} {{$education['finish']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <h2>{{__('CvCourses')}}</h2>
                </div>
                <div class="sep">
                    @foreach($data['courses'] as $course)
                        <div class="head-item">
                            <h3><strong>{{$course['name']}}</strong><br></h3>
                            <p>{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="right-column">
        <div class="section">
            <div class="section-title">
                <h2>{{__('CvDo')}}</h2>
            </div>
            <ul>
                @foreach($data['skills'] as $skill)
                    <li>{{$skill['name']}}</li>
                @endforeach
            </ul>
        </div>
        <div class="section">
            <div class="section-title">
                <h2>{{__('CvLangs')}}</h2>
            </div>
            <ul>
                @foreach($data['langs'] as $lang)
                    <li><strong>{{$lang['name']['label']}}</strong>
                        {{$lang['level']['name']}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</body>
</html>
