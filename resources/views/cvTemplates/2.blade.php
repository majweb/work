<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Work') }}</title>
    <style>
        @page  {
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
            background: #0c2c5a;
        }
        .card {
            width: 100%;
            margin: 0 auto;
            position: relative;
            min-height: 100%;
        }
        .bg-red-box {
            position: absolute;
            top: 0;
            left: 0;
            width: 50px;
            height: 28%;
            background: #e31e24;
            z-index: 0;
        }
        .grid-container {
            width: 100%;
            position: relative;
            z-index: 1;
        }
        .left-column-top{
            float: left;
            width: 45%;
        }
        .right-column-top{
            float: right;
            width: 55%;
            color: white;
            position: relative;
            left:10px;
            top:-20px;
            z-index: 1;
        }
        .left-column {
            float: left;
            width: 50%;
            color: #0c2c5a;
            margin-top: -30px;
        }
        .right-column {
            float: right;
            width: 50%;
            color: white;
        }
        .right-column-section{
            text-align: center;
            margin:20px 0;
        }
        .right-column-section ul{
            margin:0;
            padding: 0;
        }
        .right-column-section ul li{
            font-size: 14px;
        }
        .right-column-section-title{
            font-size: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
            padding: 0;
            margin-top: 10px;
        }
        .right-column-section-inner{
        //margin-top: -35px;
        }
        .profile-pic {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            left: 80px;
            top: 20px;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-item {
            font-size: 16px;
        }
        .info-item img {
            height: 40px;
            margin-right: 5px;
            vertical-align: bottom;
        }
        .info-item span {
            display: inline-block;
            vertical-align: middle;
        }
        .section {
            font-size: 12px;
            padding-left: 24px;
            padding-bottom: 5px;
            background: white;
            color:#0c2c5a;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .section ul{
            margin:0;
            padding: 0;
            list-style: none;
        }
        .section h3 {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 1px;
        }
        .name {
            font-size: 40px;
            font-weight: bold;
            line-height: 40px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            position: relative;
            max-width: 95%;
            word-wrap: break-word;
            min-height: 110px;
        }

        .name::after {
            content: "";
            display: block;
            margin-top: 0px; /* odstęp od tekstu */
            height: 1px;
            background: white;
            width: 95%;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }
        .title-red{
            color:#e31e24;
        }
        .experience,
        .education,
        .courses {
            margin-bottom: 5px;
        }
        .experience p,
        .education p,
        .courses p {
            margin: 0;
            font-size: 12px;
        }
        .small-text {
            font-size: 12px;
        }
        .footer{
            position: absolute;
            bottom: 20px;
            left:50%;
            transform: translateX(-50%);
        }
        .footer img{
            height: 50px;
        }
        .generate{
            font-size: 12px;
        }
        .clear{
            clear: both;
        }
        .relative{
            position: relative;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="card">
        <div class="bg-red-box"></div>
        <div class="grid-container">
            <div class="left-column-top">
                <div class="profile-pic">
                    <img src="{{$image}}" alt="Profile Photo">
                </div>
            </div>
            <div class="right-column-top">
                <h2 class="name">
                    {!! $data['name'].'<br>'.$data['surname'] !!}
                </h2>
                <div class="info-block">
                    <div class="info-item"><img src="{{public_path('storage/cv/2/icons/1.svg')}}"><span>{{$data['birthday']}}</span></div>
                    <div class="info-item"><img src="{{public_path('storage/cv/2/icons/2.svg')}}"><span>{{$data['postal'].' '.$data['city']}}</span></div>
                    <div class="info-item"><img src="{{public_path('storage/cv/2/icons/3.svg')}}"><span>{{$data['phone']}}</span></div>
                    <div class="info-item"><img src="{{public_path('storage/cv/2/icons/4.svg')}}"><span>{{$data['email']}}</span></div>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <!-- Lewa kolumna -->
                <div class="left-column">
                    @if(count($data['experiences']))
                        <div class="section">
                                <h3 class="section-title title-red">{{__('CvExp')}}</h3>
                                @foreach($data['experiences'] as $experience)
                                    <div class="experience">
                                        <p><strong>{{$experience['position']['name']}}</strong></p>
                                        <p class="small-text">{{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}}
                                            {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - obecnie' : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}
                                            | {{$experience['city'] }}</p>
                                    </div>
                                @endforeach
                        </div>
                    @endif
                    @if(count($data['educations']))
                        <div class="section">
                            <h3 class="section-title">{{__('CvSchool')}}</h3>
                            @foreach($data['educations'] as $education)
                                <div class="education">
                                    <p><strong>{{$education['school']}} | {{$education['city']}}</strong></p>
                                    <p class="small-text">{{$education['level']['name']}} - {{$education['specialization']}} | {{__('CvFinish')}} {{$education['finish']}}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if(count($data['courses']))
                        <div class="section">
                            <h3 class="section-title title-red">{{__('CvCourses')}}</h3>
                            @foreach($data['courses'] as $course)
                                <div class="courses">
                                    <p><strong>{{$course['name']}}</strong></p>
                                    <p class="small-text">{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="right-column relative">
                    <!-- Prawa kolumna -->
                    @if(count($data['langs']))
                        <div class="right-column-section">
                            <img height="120" src="{{public_path('storage/cv/2/icons/6.svg')}}" alt="Profile Photo">
                            <div class="right-column-section-inner">
                                <h3 class="right-column-section-title">{{__('CvLangs')}}</h3>
                                <ul>
                                    @foreach($data['langs'] as $lang)
                                        <li><strong>{{$lang['name']['label']}}</strong><br>
                                            <span>{{$lang['level']['name']}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="right-column-section">
                        @if(count($data['skills']))
                            <img height="120" src="{{public_path('storage/cv/2/icons/7.svg')}}" alt="Profile Photo">
                            <div class="right-column-section-inner">
                                <h3 class="right-column-section-title">{{__('CvDo')}}</h3>
                                <ul>
                                    @foreach($data['skills'] as $skill)
                                        <li>{{$skill['name']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="footer">
                            <div class="generate">generated by</div>
                            <img src="{{public_path('storage/cv/2/icons/logo.png')}}" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
