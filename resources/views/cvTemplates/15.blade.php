<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            background: #1f211e;
        }
        .card {
            width: 100%;
            margin: 0 auto;
            position: relative;
            min-height: 100%;
        }
        .grid-container {
            width: 100%;
            position: relative;
            z-index: 1;
        }
        .left-column {
            float: left;
            width: 35%;
            color:#fff;
            position: relative;
            z-index: 1;
            left: 20px;
            top: 50px;
        }
        .left-box {
            outline: none;
            min-height: 960px;
        }
        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin:20px auto;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-block {
            padding-left: 24px;
        }
        .borderer{
            border: 5px solid #f058dc;
            border-radius:10px;
        }
        .info-block h3{
            font-weight: bold;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 1px;
        }
        .info-item {
            font-size: 14px;
            margin-bottom: 5px;
        }
        .info-item img {
            margin-right: 5px;
            height: 20px;
        }
        .info-item span {
            display: inline-block;
            vertical-align: middle;
        }
        .section {
            font-size: 12px;
            padding-left: 24px;
        }
        .section ul{
            margin:0;
            padding: 0;
            list-style: none;
        }
        .section ul li{
            vertical-align: middle;
            margin-bottom:5px;
        }
        .section ul li img{
            vertical-align: middle !important;
            margin-right: 5px !important;
        }
        .section h3 {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 1px;
        }
        .right-column {
            float: left;
            width: 50%;
            padding-left: 60px;
            padding-top: 10px;
            color:#fff;
            position: relative;
            z-index: 1; /* <-- DODANE */
        }
        .name {
            font-size: 50px;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
            line-height: 45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            width: 98%;
            word-wrap: break-word;
        }
        .section-title {
            font-size: 25px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            background: #f058dc;
            border-radius: 20px;
            text-align: center;
            line-height: 25px;
            text-transform: uppercase;
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
        .footer {
            clear: both;
            font-size: 12px;
            color:#fff;
            position: absolute;
            bottom:20px;
            right: 10px;
        }
        .footer img{
            height: 60px;
            vertical-align: bottom;
            position: relative;
            top:10px;
            left: 0px;
        }
        .pb-20{
            padding-bottom: 30px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="card">
        <div class="grid-container">
            <!-- Lewa kolumna -->
            <div class="left-column">
                <div class="left-box">
                    <div class="profile-pic">
                        <img src="{{$image}}" alt="Profile Photo">
                    </div>
                    <div class="borderer">
                        <div class="info-block">
                            <h3>{{__('CvContact')}}</h3>
                            <div class="info-item"><img src="{{public_path('storage/cv/15/icons/1.svg')}}"><span>{{$data['birthday']}}</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/15/icons/1.svg')}}"><span>{{$data['postal'].' '.$data['city']}}</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/15/icons/1.svg')}}"><span>{{$data['phone']}}</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/15/icons/1.svg')}}"><span>{{$data['email']}}</span></div>
                        </div>
                        <div class="section">
                            <h3>{{__('CvLangs')}}</h3>
                            <ul>
                                @foreach($data['langs'] as $lang)
                                   <li><img height="20" src="{{public_path('storage/cv/15/icons/2.svg')}}"><strong>{{$lang['name']['label']}}</strong><br><span>{{$lang['level']['name']}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="section pb-20">
                            <h3>{{__('CvDo')}}</h3>
                            <ul>
                                @foreach($data['skills'] as $skill)
                                    <li><img height="20" src="{{public_path('storage/cv/15/icons/3.svg')}}"/>{{$skill['name']}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prawa kolumna -->
            <div class="right-column">
                <h2 class="name">
                    {!! $data['name'].'<br>'.$data['surname'] !!}
                </h2>
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
                <h3 class="section-title">{{__('CvSchool')}}</h3>
                @foreach($data['educations'] as $education)
                    <div class="education">
                        <p><strong>{{$education['school']}} | {{$education['city']}}</strong></p>
                        <p class="small-text">{{$education['level']['name']}} - {{$education['specialization']}} | {{__('CvFinish')}} {{$education['finish']}}</p>
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
            </div>
        </div>
        <div class="footer">
            <span>generated by</span>
            <img src="{{public_path('storage/cv/15/icons/logo.png')}}" alt="logo">
        </div>
    </div>
</div>
</body>
