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
        }

        .grid-container {
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            float: left;
            position: relative;
            outline: 10px solid white;
            outline-offset: -1px;
            top:-15px;
            z-index:1;
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info-block {
            margin: 16px 0;
            padding-left: 24px;

        }

        .info-item {
            font-size: 13px;
        }

        .info-item img {
            margin-right: 5px;
            height: 25px;
            vertical-align: bottom;
        }

        .info-item span {
            display: inline-block;
            vertical-align: middle;
        }

        .section {
            font-size: 12px;
            padding-left: 24px;
        }

        .section ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .disc{
            list-style: disc !important;
            padding-left: 20px !important;
        }

        .section h3 {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 1px;
            position: relative;
            height: 30px;
        }
        .section h3::after{
            content: "";
            width: 50%;
            height: 1px;
            background: #c8b2c3;
            position: absolute;
            display: block;
            left: 30px;
            bottom: -10px;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            position: relative;
            height: 30px;
            margin-bottom: 20px;
        }
        .section-title::after{
            content: "";
            width: 90%;
            height: 1px;
            background: #c8b2c3;
            position: absolute;
            display: block;
            left: 0px;
            bottom: -10px;
        }

        .experience,
        .langs,
        .courses {
            margin-bottom: 5px;
        }

        .experience p,
        .langs p,
        .courses p {
            margin: 0;
            font-size: 12px;
        }

        .footer {
            clear: both;
            right: 10px;
            opacity: 50%;
            font-size: 12px;
            position: absolute;
            top: -10px;
        }

        .footer img {
            height: 50px;
            vertical-align: bottom;
            position: relative;
            top: 10px;
            left: -5px;
        }
        .left{
            float: left;
            width: 40%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1; /* <-- DODANE */
            background: #f4eae9;
        }
        .right{
            float: left;
            width: 60%;
            position: relative;
            top:100px;
        }
        .top{
            position: relative;
            top: 70px;
            left: 40px;
            height: 180px;
        }
        .detail-banner{
            background:#490037;
            height: 180px;
            position: relative;
            left: 70px;
            z-index:-1;
        }
        .detail{
            height: 180px;
        }
        .inner{
            position: absolute;
            top: 50%;
            left: 60px;
            width: 90%;
            transform: translateY(-50%);
            height: auto;
            z-index:3 !important;
            color: white;
            line-height: 20px;
        }
        .inner h1{
            font-size: 40px;
            line-height: 30px;
            padding: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
        }
        .inner p {
            padding: 0;
            margin: 0;
            font-size: 25px;
        }
        .left-inner{
            position: relative;
            top: 280px;
            left: 30px;
        }
        .right-inner{
            position: relative;
            top: 0px;
            left: 30px;
        }
    </style>

</head>
<body>
<div class="grid-container">
    <div class="top">
        <div class="profile-pic">
            <img src="{{$image}}" alt="Profile Photo">
        </div>
        <div class="detail-banner"></div>
        <div class="detail">
            <div class="inner">
                <h1>{!! $data['name'].'<br>'.$data['surname'] !!}</h1>
                <p>{{$data['birthday']}}</p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="left">
        <div class="left-inner">
            <div class="info-block">
                <div class="info-item"><img src="{{public_path('storage/cv/18/icons/1.svg')}}"><span>{{$data['postal'].' '.$data['city']}}</span>
                </div>
                <div class="info-item"><img src="{{public_path('storage/cv/18/icons/2.svg')}}"><span>{{$data['phone']}}</span>
                </div>
                <div class="info-item"><img
                        src="{{public_path('storage/cv/18/icons/3.svg')}}"><span>{{$data['email']}}</span></div>
            </div>
            <div class="section">
                <h3>{{__('CvSchool')}}</h3>
                <ul>
                    @foreach($data['educations'] as $education)
                        <li><strong>{{$education['school']}} | {{$education['city']}}</strong><br>
                            {{$education['level']['name']}} - {{$education['specialization']}}<br>{{__('CvFinish')}} {{$education['finish']}}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="section">
                <h3>{{__('CvDo')}}</h3>
                <ul class="disc">
                    @foreach($data['skills'] as $skill)
                        <li>{{$skill['name']}}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
    <div class="right">
        <div class="right-inner">
            <h3 class="section-title">{{__('CvExp')}}</h3>
            @foreach($data['experiences'] as $experience)
                <div class="experience">
                    <p><strong>{{$experience['position']['name']}}</strong></p>
                    <p class="small-text">
                        {{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}}
                        {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - '.__('CvNow') : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}
                        | {{$experience['city'] }}
                    </p>
                </div>
            @endforeach
            <h3 class="section-title">{{__('CvCourses')}}</h3>
            @foreach($data['courses'] as $course)
                <div class="courses">
                    <p><strong>{{$course['name']}}</strong></p>
                    <p class="small-text">{{$course['organizator']}}
                        {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                </div>
            @endforeach
            <h3 class="section-title">{{__('CvLangs')}}</h3>

            @foreach($data['langs'] as $lang)
                <div class="langs">
                    <p><strong>{{$lang['name']['label']}}</strong> {{$lang['level']['name']}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="clear"></div>
    <div class="footer">
        <span>generated by</span>
        <img src="{{public_path('storage/cv/1/icons/logo.png')}}" alt="logo">
    </div>
</div>
</body>
