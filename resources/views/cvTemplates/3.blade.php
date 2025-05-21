<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
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
            /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1e5799+0,7db9e8+100 */
            background-image: url('storage/cv/3/gradient.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
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
        .left-column-top{
            float: left;
            width: 50%;
            position: relative;
            height: 250px;
        }
        .right-column-top{
            float: right;
            width: 50%;
            position: relative;
            height: 250px;
            z-index: 1;
        }
        .left-column {
            float: left;
            width: 45%;
            color: #0c2c5a;
            margin-top: 40px;
            position: relative;
        }
        .right-column {
            float: right;
            width: 55%;
            background: white;
            color: #0c2c5a;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        .right-column-section ul{
            margin:0;
            padding: 0;
        }
        .right-column-section ul li{
            font-size: 14px;
        }
        .right-column-section-title{
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
            padding: 0;
            margin-top: 5px;
            color:#0c2c5a !important;
            text-align: left;
            padding-left: 10px;
            margin-bottom: 5px;
        }
        .right-column-section-inner{
            color:#0c2c5a;
            position: relative;
            height: 250px;
            padding-bottom: 30px;
        }
        .right-column-section-inner div{
            padding-left: 10px;
        }
        .right-column-section-inner + div{
            float: left;
        }
        .right-column-section-inner img{
            width: 180px;
            height: 180px;
            overflow: hidden;
            position: absolute;
            right: -25px;
            top: 0px;
        }
        .profile-pic {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            left: 50px;
            top: 40px;
            border:10px solid #87ecec;
            outline: 3px solid white;
            outline-offset: 1px;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .first-section{
            height: 150px !important;
        }
        .last-section{
            height: 200px !important;
        }
        .section {
            padding-bottom: 5px;
            color:#0c2c5a;
            position: relative;
            height: 300px;
            margin-bottom: 20px;
        }
        .section div{
            float: right;
            width: 50%;
            position: relative;
            left: -40px;
        }
        .section img{
            width: 180px;
            height: 180px;
            overflow: hidden;
            position: absolute;
            left: -25px;
            top: 0;
            width: 50%;
        }
        .section ul{
            margin:0;
            padding: 0;
        }
        .section ul li{
            font-size: 15px;
            margin-bottom: 7px;
        //line-height: 25px;
        }
        .name {
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 30px;
            color:#0c2c5a;
            background:#87ecec;
            padding: 10px;
            border-radius: 20px;
            position: absolute;
            left: -60px;
            top: 50%;
            transform: translateY(-50%);
            word-wrap: break-word;
            width:370px;
        //min-width:370px;
        }
        .section-title {
            margin: 0;
            padding: 0;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
            margin-left: -10px;
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
            left:40%;
            width: 50%;
            transform: translateX(-50%);
        }
        .footer img{
            height: 60px;
            float: right;
            position: relative;
            top: -15px;
            left: 10px;
        }
        .generate{
            font-size: 14px;
            float: left;
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
            </div>
            <div class="clear"></div>
            <div>
                <!-- Lewa kolumna -->
                <div class="left-column">
                    <div class="section first-section">
                        <img src="{{public_path('storage/cv/3/icons/1.svg')}}" alt="">
                        <div>
                            <ul>
                                <li>
                                    {{$data['birthday']}}
                                </li>
                                <li>
                                    {{$data['phone']}}
                                </li>
                                <li>
                                    {{$data['email']}}
                                </li>
                                <li>
                                    {{$data['postal'].' '.$data['city']}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    @if(count($data['langs']))
                        <div class="section">
                            <img src="{{public_path('storage/cv/3/icons/2.svg')}}" alt="Icon">
                            <div>
                                <h3 class="section-title">{{__('CvLangs')}}</h3>
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
                    @if(count($data['skills']))
                        <div class="section last-section">
                            <img src="{{public_path('storage/cv/3/icons/3.svg')}}" alt="">
                            <div>
                                <h3 class="section-title">{{__('CvDo')}}</h3>
                                <ul>
                                    @foreach($data['skills'] as $skill)
                                        <li>{{$skill['name']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="footer">
                        <div class="generate">generated by</div>
                        <img src="{{public_path('storage/cv/1/icons/logo.png')}}" alt="logo">
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <!-- Prawa kolumna -->
            <div class="right-column relative">
                @if(count($data['experiences']))
                    <div class="right-column-section">
                        <div class="right-column-section-inner">
                            <div>
                                <h3 class="right-column-section-title">{{__('CvExp')}}</h3>
                                @foreach($data['experiences'] as $experience)
                                    <div class="experience">
                                        <p><strong>{{$experience['position']['name']}}</strong></p>
                                        <p class="small-text">{{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}}
                                            {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - '.__('CvNow') : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}
                                            | {{$experience['city'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <img height="100" src="{{public_path('storage/cv/3/icons/4.svg')}}" alt="Icon">
                        </div>
                    </div>
                @endif
                @if(count($data['educations']))
                    <div class="right-column-section">
                        <div class="right-column-section-inner">
                            <div>
                                <h3 class="right-column-section-title">{{__('CvSchool')}}</h3>
                                @foreach($data['educations'] as $education)
                                    <div class="education">
                                        <p><strong>{{$education['school']}} | {{$education['city']}}</strong></p>
                                        <p class="small-text">{{$education['level']['name']}} - {{$education['specialization']}} | {{__('CvFinish')}} {{$education['finish']}}</p>
                                    </div>
                                @endforeach
                            </div>
                            <img height="100" src="{{public_path('storage/cv/3/icons/5.svg')}}" alt="Icon" style="right:-45px;">
                        </div>
                    </div>
                @endif
                @if(count($data['courses']))
                    <div class="right-column-section">
                        <div class="right-column-section-inner">
                            <div>
                                <h3 class="right-column-section-title">{{__('CvCourses')}}</h3>
                                @foreach($data['courses'] as $course)
                                    <div class="courses">
                                        <p><strong>{{$course['name']}}</strong></p>
                                        <p class="small-text">{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                                    </div>
                                @endforeach
                            </div>
                            <img height="100" src="{{public_path('storage/cv/3/icons/6.svg')}}" alt="Icon" style="right:-45px;">
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</body>
