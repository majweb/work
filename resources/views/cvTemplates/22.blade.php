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
        .name-section {
            text-align: center;
            position: relative;
            z-index: 3;
            width: 60%;
            height: auto;
            margin: 20px auto;
            padding: 10px;
            margin-top: 30px;
            margin-bottom: 10px;
            border: 2px solid #d7d7d8;
        }

        .name-section h1 {
            margin: 0;
            padding: 0;
            font-size: 40px;
            color: #58595b !important;
            text-transform: uppercase;
            letter-spacing: 3px;
            line-height: 30px;
        }

        .content-wrapper {
            width: 100%;
            position: relative;
            /*height: 960px;*/
        }

        .left-column {
            background-color: #fbfbfc;
            position: absolute;
            left: 0;
            top: -30px;
            height: 110%;
            width: 45%;
        }

        .right-column {
            float: right;
            width: 50%;
            padding: 25px;
            box-sizing: border-box;
            background-color: #ffffff;
        }

        .clear {
            clear: both;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-title {
            position: relative;
            margin-bottom: 15px;
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
        .section h2::after {
            content: "";
            display: block;
            height: 2px;
            width: 80%;
            background-color: #d7d7d8;
            margin-top: 5px;
        }
        .section h2::before {
            content: "";
            display: block;
            position: absolute;
            right: 19%;
            top: 24px;
            height: 10px;
            width: 10px;
            background-color: #d7d7d8;
            margin-top: 5px;
        }

        .section ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            padding-left: 25px;
            padding-top: 10px;
        }

        .section ul li {
            margin-bottom: 5px;
            font-size: 14px;
            line-height: 10px;
            letter-spacing: 1px;
            position: relative;
        }
        .section ul li:before{
            content: "";
            display: block;
            position: absolute;
            left: -15px;
            top: 4px;
            height: 5px;
            width: 5px;
            background: #d7d7d8;
            border-radius: 50%;
        }

        .head-item {
            padding-left: 10px;
            margin-bottom: 15px;
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

        .socials {
            margin: 0 auto;
            margin-top: 20px;
            overflow: hidden;
            width: 80%;
        }

        .socials .s-item {
            float: left;
            margin: 0;
            margin-right: 20px;
            position: relative;
            padding-left: 20px;
            width: 30%;
            box-sizing: border-box;
        }

        .socials .s-item img {
            position: absolute;
            top: 5px;
            left: 0;
        }
        .left-column-inner{
            position: relative;
            top: 170px;
            left: 20px;
        }
        .head-item{
            margin-bottom: 0;

        }
        .head-item h3{
            margin-bottom: 0;
            margin-top: 0;
        }
    </style>
</head>
<body>
<div class="footer">
    <span>generated by</span>
    <img src="{{public_path('storage/cv/1/icons/logo.png')}}" alt="logo">
    <div class="clear"></div>
</div>


<div class="content-wrapper">
    <div class="name-section">
        <h1>{!! $data['name'].' '.$data['surname'] !!}</h1>
    </div>
    <div class="left-column">
        <div class="left-column-inner">
            <div class="section">
                <div class="section-title">
                    <h2>{{__('CvContact')}}</h2>
                </div>
                <div>
                    <div class="head-item">
                        <img height="20" src="{{public_path('storage/cv/22/icons/1.svg')}}" alt="logo">
                        {{$data['phone']}}
                    </div>
                    <div class="head-item">
                        <img height="20" src="{{public_path('storage/cv/22/icons/2.svg')}}" alt="logo">
                        {{$data['postal'].' '.$data['city']}}
                    </div>
                    <div class="head-item">
                        <img height="20" src="{{public_path('storage/cv/22/icons/3.svg')}}" alt="logo">
                        {{$data['birthday']}}
                    </div>
                    <div class="head-item">
                        <img height="20" src="{{public_path('storage/cv/22/icons/4.svg')}}" alt="logo">
                        {{$data['email']}}
                    </div>
                </div>
            </div>
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

    <div class="right-column">
        <div class="section">
            <div class="section-title">
                <h2>{{__('CvExp')}}</h2>
            </div>
            <div>
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
            <div>
                @foreach($data['educations'] as $education)
                    <div class="head-item">
                        <h3><strong>{{$education['school']}} | {{$education['city']}}</strong><br></h3>
                        <p>{{$education['level']['name']}} - {{$education['specialization']}} {{__('CvFinish')}} {{$education['finish']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="section">
            <div class="section-title">
                <h2>{{__('CvCourses')}}</h2>
            </div>
            <div>
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
</body>
</html>
