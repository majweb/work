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
            overflow: hidden;
            font-family: "DejaVu Sans", sans-serif !important;
            background: #e9e8ec;
        }
        .card {
            width: 100%;
            margin: 0 auto;
            position: relative;
            min-height: 100%;
        }
        .grid-container {
            width: 100%;
            height:766px;
        }
        .grid-border {
            border-bottom: 5px solid transparent;
            height: 350px;
            position: relative;
        }
        .grid-border:after {
            content: "";
            width: 100%;
            height: 5px;
            background: black;
            position: absolute;
            bottom: -5px;
            left: 0;
            z-index: 999;
        }
        .left-column-top {
            float: left;
            width: 45%;
        }
        .right-column-top {
            float: right;
            width: 55%;
            color: black;
            background: #fefefe;
            height: 100%;
        }
        .left-column {
            float: left;
            width: 45%;
            color: black;
        }
        .right-column {
            float: right;
            width: 55%;
            color: black;
            background: #fefefe;
            height: 100%;
            position: relative;
            top:1px;
        }
        .profile-pic {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid black;
            outline: 5px solid black;
            outline-offset: 5px;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-block {
            padding-left: 30px;
        }
        .info-item {
            position: relative;
            margin-bottom: 10px;
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
            margin:25px 0;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            padding-left: 30px;
            padding-top: 20px;
        }
        .section {
            font-size: 12px;
            padding-left: 24px;
            color: black;
        }
        .section ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .section h3 {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 1px;
            line-height: 20px;
            background: black;
            color: white;
            text-align: center;
            width: 90%;
            margin: 10px 0;
        }
        .title-no-bg {
            background: transparent !important;
            color: black !important;
            text-align: left !important;
        }
        .right-column-section {
            margin: 20px 0;
            padding-left: 24px;
            padding-bottom: 5px;
            overflow: hidden;
        }
        .experience p,
        .education p,
        .courses p {
            margin: 0;
            font-size: 12px;
        }
        .logo {
            position: absolute;
            bottom:5px;
            left: 60%;
            transform: translateX(-50%);
        }
        .logo img {
            height: 50px;
            vertical-align: middle;
        }
        .generate {
            float: left;
            font-size: 12px;
            position: relative;
            left: -100px;
            top: 10px;
        }
        .clear {
            clear: both;
        }
        .top-flower{
            background: url('{{public_path('storage/cv/13/custom-avatar.png')}});
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="grid-container">
            <div class="top-flower"></div>
            <div class="bottom-flower"></div>
            <div class="grid-border">
                <div class="left-column-top">
                    <div class="profile-pic">
                        <img src="{{$image}}" alt="Profile Photo">
                    </div>
                </div>
                <div class="right-column-top">
                    <h2 class="name">{!! $data['name'].'<br>'.$data['surname'] !!}</h2>
                    <div class="info-block">
                        <div class="info-item"><img src="{{ public_path('storage/cv/8/icons/3.svg') }}"/><span>{{$data['birthday']}}</span></div>
                        <div class="info-item"><img src="{{ public_path('storage/cv/8/icons/4.svg') }}"/><span>{{$data['phone']}}</span></div>
                        <div class="info-item"><img src="{{ public_path('storage/cv/8/icons/5.svg') }}"/><span>{{$data['email']}}</span></div>
                        <div class="info-item"><img src="{{ public_path('storage/cv/8/icons/6.svg') }}"/><span>{{$data['postal'].' '.$data['city']}}</span></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <!-- Lewa kolumna -->
            <div class="left-column">
                <div class="section">
                    <h3>{{ __('CvSchool') }}</h3>
                    @foreach($data['educations'] as $education)
                        <div class="education">
                            <p><strong>{{$education['school']}} | {{$education['city']}}</strong></p>
                            <p class="small-text">{{$education['level']['name']}} - {{$education['specialization']}} | {{__('CvFinish')}} {{$education['finish']}}</p>
                        </div>
                    @endforeach
                    <!-- ... inne szkoły ... -->
                </div>
                <div class="section">
                    <h3>{{ __('CvCourses') }}</h3>
                    @foreach($data['courses'] as $course)
                        <div class="courses">
                            <p><strong>{{$course['name']}}</strong></p>
                            <p class="small-text">{{$course['organizator']}} | {{$course['date']['month'].'/'.$course['date']['year']}}</p>
                        </div>
                    @endforeach
                    <!-- ... inne kursy ... -->
                </div>
            </div>

            <!-- Prawa kolumna -->
            <div class="right-column">
                <div class="section">
                    <h3 class="title-no-bg">{{ __('CvExp') }}</h3>
                    @foreach($data['experiences'] as $experience)
                        <div class="experience">
                            <p><strong>{{$experience['position']['name']}}</strong></p>
                            <p class="small-text">{{$experience['employer']}} | {{$experience['start']['month'].'/'.$experience['start']['year']}}
                                {{$experience['isCurrent'] && $experience['end'] == NULL ? ' - '.__('CvNow') : '- '.$experience['end']['month'].'/'.$experience['end']['year']}}
                                | {{$experience['city'] }}</p>
                        </div>
                    @endforeach
                    <!-- ... inne doświadczenia ... -->
                </div>
                <!-- Naprawiona czerwona sekcja -->
                <div class="right-column-section">
                    <div style="display: table; width: 100%;">
                        <div style="display: table-cell;border-radius: 50%; width: 40px;">
                            <img src="{{ public_path('storage/cv/8/icons/1.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                        </div>
                        <div style="display: table-cell; padding-left: 10px;">
                            <h3 class="title-no-bg" style="margin:0;text-transform: uppercase">{{ __('CvLangs') }}</h3>
                        </div>
                    </div>
                    <div class="right-column-section-inner">
                        <ul style="margin:10px 0;padding:0;">
                            @foreach($data['langs'] as $lang)
                                <li><strong>{{$lang['name']['label']}}</strong><br>
                                    <span>{{$lang['level']['name']}}</span>
                                </li>
                            @endforeach
                            <!-- inne języki -->
                        </ul>
                    </div>
                </div>
                <div class="right-column-section">
                    <div style=" display: table; width: 100%;">
                        <div style="display: table-cell;border-radius: 50%; width: 40px;">
                            <img src="{{ public_path('storage/cv/8/icons/2.svg') }}" alt="Ikona" style="width: 40px;border-radius: 50%">
                        </div>
                        <div style="display: table-cell; padding-left: 10px;">
                            <h3 class="title-no-bg" style="margin:0;text-transform: uppercase">{{ __('CvDo') }}</h3>
                        </div>
                    </div>
                    <div class="right-column-section-inner">
                        <ul style="margin:10px 0;padding:0;">
                            @foreach($data['skills'] as $skill)
                                <li>{{$skill['name']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="logo">
                    <div class="generate">generated by</div>
                    <img src="{{ public_path('storage/cv/8/icons/logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
