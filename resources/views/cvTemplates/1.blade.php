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
        }
        .card {
            width: 100%;
            margin: 0 auto;
            position: relative;
            min-height: 100%;
        }
        .bg-dark-box {
            position: absolute;
            top: 0;
            left: 0;
            width: 130px;
            height: 40%;
            background: #0c2c5a;
            z-index: 0;
        }
        .bg-gray-box {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 130px;
            height: 60%;
            background: #cdc8c8;
            z-index: 0;
        }
        .grid-container {
            width: 100%;
            position: relative;
            z-index: 1;
        }
        .left-column {
            float: left;
            width: 35%;
            color: #0c2c5a;
            position: relative;
            z-index: 1;
            left: 20px;
            top: 50px;
        }
        .left-box {
            border: 2px solid #0c2c5a;
            background: white;
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
            margin: 16px 0;
            padding-left: 24px;

        }
        .info-item {
            font-size: 12px;
        }
        .info-item img {
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
        .right-column {
            float: left;
            width: 50%;
            padding-left: 60px;
            padding-top: 10px;
            color: #0c2c5a;
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
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
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
            text-align: center;
            font-size: 12px;
            color: #0c2c5a;
            position: relative;
            top:20px;
        }
        .footer img{
            height: 50px;
            vertical-align: bottom;
            position: relative;
            top:10px;
            left: -5px;
        }
    </style>

</head>
    <body>
    <div class="container">
        <div class="card">
            <div class="bg-dark-box"></div>
            <div class="bg-gray-box"></div>
            <div class="grid-container">
                <!-- Lewa kolumna -->
                <div class="left-column">
                    <div class="left-box">
                        <div class="profile-pic">
                            <img src="{{$image}}" alt="Profile Photo">
                        </div>
                        <div class="info-block">
                            <div class="info-item"><img src="{{public_path('storage/cv/icons/1.svg')}}"><span>{{$data['birthday']}}</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/icons/2.svg')}}"><span>{{$data['postal'].' '.$data['city']}}</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/icons/3.svg')}}"><span>{{$data['phone']}}</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/icons/4.svg')}}"><span>{{$data['email']}}</span></div>
                        </div>
                        @if(count($data['langs']))
                            <div class="section">
                                <h3>Języki obce</h3>
                                <ul>
                                    @foreach($data['langs'] as $lang)
                                        <li><strong>{{$lang['name']['label']}}</strong><br>{{$lang['level']['name']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(count($data['skills']))
                            <div class="section">
                                <h3>Umiejętności</h3>
                                <ul>
                                    @foreach($data['skills'] as $skill)
                                        <li>{{$skill['name']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- Prawa kolumna -->
                <div class="right-column">
                    <h2 class="name">Samira Hadid</h2>
                    @if(count($data['experiences']))
                            <h3 class="section-title">Doświadczenie</h3>
                                @foreach($data['experiences'] as $experience)
                                    <div class="experience">
                                        <p><strong>{{$experience['position']['name']}}</strong></p>
                                        <p class="small-text">{{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}}
                                          {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - obecnie' : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}
                                          | {{$experience['city'] }}</p>
                                    </div>
                                @endforeach
                    @endif
                    @if(count($data['educations']))
                    <h3 class="section-title">Wykształcenie</h3>
                        @foreach($data['educations'] as $education)
                            <div class="education">
                                <p><strong>{{$education['school']}} | {{$education['city']}}</strong></p>
                                <p class="small-text">{{$education['level']['name']}} - {{$education['specialization']}} | ukończono {{$education['finish']}}</p>
                            </div>
                        @endforeach
                    @endif
                    @if(count($data['courses']))
                        <h3 class="section-title">Kursy i szkolenia</h3>
                        @foreach($data['courses'] as $course)
                            <div class="courses">
                                <p><strong>{{$course['name']}}</strong></p>
                                <p class="small-text">{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                            </div>
                        @endforeach
                    @endif
                    @if(count($data['courses']))
                        <h3 class="section-title">Kursy i szkolenia</h3>
                        @foreach($data['courses'] as $course)
                            <div class="courses">
                                <p><strong>{{$course['name']}}</strong></p>
                                <p class="small-text">{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="footer">
                <span>generated by</span>
                <img src="{{public_path('storage/cv/icons/logo.png')}}" alt="logo">
            </div>
        </div>
    </div>
    </body>
