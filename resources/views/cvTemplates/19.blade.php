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
        }

        .header {
            text-align: center;
            position: relative;
            padding-top: 20px;
        }

        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
            z-index: 2;
            border: 20px solid white;
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bar {
            background: #e4ebec;
            height: 100px;
            width: 100%;
            position: absolute;
            top: 90px;
            z-index: 1;
        }

        .name-section {
            text-align: center;
            position: relative;
            z-index: 3;
            width: 70%;
            height: auto;
            margin: 0 auto;
            margin-top: -10px;
        }

        .name-section h1 {
            margin: 0;
            padding: 0;
            font-size: 50px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 50px;
        }

        .birth-date {
            position: absolute;
            top: -5px;
            right: 25px;
            font-size: 20px;
            font-weight: bold;
            color: #666;
        }

        .left-column {
            float: left;
            width: 48%;
            padding: 15px;
            box-sizing: border-box;
            position: relative;
        }
        .left-column::after{
            content: "";
            display: block;
            position: absolute;
            right: 50px;
            top: 0;
            height: 100%;
            width: 1px;
            background: gray;
            clear: both;
        }

        .right-column {
            float: right;
            width: 48%;
            padding: 15px;
            box-sizing: border-box;
        }

        .clear {
            clear: both;
        }

        .section {
            margin-bottom: 10px;
        }
        .section h2{
            padding: 0;
            margin: 0;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: bold;
        }
        .section ul {
            list-style-type: disc;
            padding: 0;
            margin: 0;
            padding-left: 30px;
            padding-top: 10px;
        }

        .section ul li {
            margin-bottom: 10px;
            margin: 0;
            padding: 0;
            font-size: 14px;
            line-height: 12px;
            letter-spacing: 1px;
        }
        .head-item{
            padding-left: 10px;
        }
        .head-item h3 {
            text-transform: uppercase;
            margin: 0;
            margin-bottom: 5px;
            font-size: 14px;
            padding: 0;
            letter-spacing: 1px;
        }

        .head-item p {
            margin: 0;
            padding: 0;
            font-size: 12px;
            line-height: 12px;
            letter-spacing: 1px;
        }

        .footer {
            position: absolute;
            top: 30px;
            left: 30px;
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
        .borderer{
            border-bottom: 1px solid gray;
            border-top: 1px solid gray;
            overflow: hidden;
            height: 680px;
            /*height: 800px;*/
        }
        .socials{
            margin: 0 auto;
            text-align: center;
            margin-top: 20px;
            vertical-align: middle;
        }
        .socials img{

        }
        .socials  .s-item{
            display: inline-block;
            margin: 0 auto;
            vertical-align: middle;
            text-align: center;
            margin-right: 10px;
            position: relative;
        }
        .socials  .s-item img{
            position: absolute;
            top: 5px;
            left: -15px;
        }
    </style>
</head>
<body>
<div class="footer">
    <span>generated by</span>
    <img src="{{public_path('storage/cv/1/icons/logo.png')}}" alt="logo">
    <div class="clear"></div>
</div>

<div class="header">
    <div class="bar"></div>
    <div class="profile-pic">
        <img src="{{$image}}" alt="Profile Photo">
    </div>
</div>

<div class="name-section">
    <div class="birth-date">{{$data['birthday']}}</div>
    <h1>{!! $data['name'].' '.$data['surname'] !!}</h1>
</div>

<div class="content">
    <div class="borderer">
        <div class="column left-column">
            <div class="section">
                <h2>{{__('CvExp')}}</h2>
                <div>
                    @foreach($data['experiences'] as $experience)
                        <div class="head-item">
                            <h3>{{$experience['position']['name']}}</h3>
                            <p>{{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}} {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - '.__('CvNow') : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}</p>
                            <p>{{$experience['city'] }}</p>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>

            <div class="section">
                <h2>{{__('CvDo')}}</h2>
                <ul>
                    @foreach($data['skills'] as $skill)
                        <li>{{$skill['name']}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="column right-column">
            <div class="section">
                <h2>{{__('CvSchool')}}</h2>
                <div>
                    @foreach($data['educations'] as $education)
                        <div class="head-item">
                            <h3><strong>{{$education['school']}} | {{$education['city']}}</strong><br></h3>
                            <p>{{$education['level']['name']}} - {{$education['specialization']}}<br> {{__('CvFinish')}} {{$education['finish']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section">
                <h2>{{__('CvCourses')}}</h2>
                <div>
                    @foreach($data['courses'] as $course)
                        <div class="head-item">
                            <h3><strong>{{$course['name']}}</strong><br></h3>
                            <p>{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section">
                <h2>{{__('CvLangs')}}</h2>
                <ul>
                    @foreach($data['langs'] as $lang)
                        <li><strong>{{$lang['name']['label']}}</strong>
                            {{$lang['level']['name']}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="socials">
    <div class="s-item">
        <img height="15" src="{{public_path('storage/cv/19/icons/1.svg')}}" alt="logo">
        {{$data['postal'].' '.$data['city']}}
    </div>
    <div class="s-item">
        <img height="15" src="{{public_path('storage/cv/19/icons/2.svg')}}" alt="logo">
        {{$data['email']}}
    </div>
    <div class="s-item">
        <img height="15" src="{{public_path('storage/cv/19/icons/3.svg')}}" alt="logo">
        {{$data['phone']}}
    </div>
    <div class="clear"></div>
</div>
</body>
</html>
