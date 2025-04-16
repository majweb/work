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
                    <img src="{{public_path('/images/cv/cvplace.png')}}" alt="Profile Photo">
                </div>
            </div>
            <div class="right-column-top">
                <h2 class="name">
                    Samira Hadiv
                </h2>
                <div class="info-block">
                    <div class="info-item"><img src="{{public_path('storage/cv/4/icons/1.svg')}}"><span>02.20.2023</span></div>
                    <div class="info-item"><img src="{{public_path('storage/cv/4/icons/2.svg')}}"><span>44-230 rybnik</span></div>
                    <div class="info-item"><img src="{{public_path('storage/cv/4/icons/3.svg')}}"><span>233213213</span></div>
                    <div class="info-item"><img src="{{public_path('storage/cv/4/icons/4.svg')}}"><span>sadasds@wp.pl</span></div>
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <!-- Lewa kolumna -->
                <div class="left-column">
                        <div class="section">
                            <h3 class="section-title title-red">{{__('CvExp')}}</h3>
                                <div class="experience">
                                    <p><strong>pozycja</strong></p>
                                    <p class="small-text">pracownik | 04/2202
                                         - obecnie'
                                        | Rybnik</p>
                                </div>
                            <div class="experience">
                                <p><strong>pozycja</strong></p>
                                <p class="small-text">pracownik | 04/2202
                                    - obecnie'
                                    | Rybnik</p>
                            </div>
                            <div class="experience">
                                <p><strong>pozycja</strong></p>
                                <p class="small-text">pracownik | 04/2202
                                    - obecnie'
                                    | Rybnik</p>
                            </div>
                            <div class="experience">
                                <p><strong>pozycja</strong></p>
                                <p class="small-text">pracownik | 04/2202
                                    - obecnie'
                                    | Rybnik</p>
                            </div>
                            <div class="experience">
                                <p><strong>pozycja</strong></p>
                                <p class="small-text">pracownik | 04/2202
                                    - obecnie'
                                    | Rybnik</p>
                            </div>
                        </div>
                        <div class="section">
                            <h3 class="section-title">{{__('CvSchool')}}</h3>
                                <div class="education">
                                    <p><strong>lecemu og | rybnik</strong></p>
                                    <p class="small-text">podstawoow - specjalizaca | 2044 www</p>
                                </div>
                            <div class="education">
                                <p><strong>lecemu og | rybnik</strong></p>
                                <p class="small-text">podstawoow - specjalizaca | 2044 www</p>
                            </div>
                            <div class="education">
                                <p><strong>lecemu og | rybnik</strong></p>
                                <p class="small-text">podstawoow - specjalizaca | 2044 www</p>
                            </div>
                            <div class="education">
                                <p><strong>lecemu og | rybnik</strong></p>
                                <p class="small-text">podstawoow - specjalizaca | 2044 www</p>
                            </div>
                            <div class="education">
                                <p><strong>lecemu og | rybnik</strong></p>
                                <p class="small-text">podstawoow - specjalizaca | 2044 www</p>
                            </div>
                        </div>
                        <div class="section">
                            <h3 class="section-title title-red">{{__('CvCourses')}}</h3>
                                <div class="courses">
                                    <p><strong>kurs</strong></p>
                                    <p class="small-text">firma | 03/2024</p>
                                </div>
                            <div class="courses">
                                <p><strong>kurs</strong></p>
                                <p class="small-text">firma | 03/2024</p>
                            </div>
                            <div class="courses">
                                <p><strong>kurs</strong></p>
                                <p class="small-text">firma | 03/2024</p>
                            </div>
                            <div class="courses">
                                <p><strong>kurs</strong></p>
                                <p class="small-text">firma | 03/2024</p>
                            </div>
                            <div class="courses">
                                <p><strong>kurs</strong></p>
                                <p class="small-text">firma | 03/2024</p>
                            </div>
                        </div>
                </div>
                <div class="right-column relative">
                    <!-- Prawa kolumna -->
                        <div class="right-column-section">
                            <img height="120" src="{{public_path('storage/cv/2/icons/6.svg')}}" alt="Profile Photo">
                            <div class="right-column-section-inner">
                                <h3 class="right-column-section-title">{{__('CvLangs')}}</h3>
                                <ul>

                                        <li><strong>sadasdsadsa</strong><br>
                                            <span>sads</span>
                                        </li>
                                    <li><strong>sadasdsadsa</strong><br>
                                        <span>sads</span>
                                    </li>
                                    <li><strong>sadasdsadsa</strong><br>
                                        <span>sads</span>
                                    </li>
                                    <li><strong>sadasdsadsa</strong><br>
                                        <span>sads</span>
                                    </li>
                                    <li><strong>sadasdsadsa</strong><br>
                                        <span>sads</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <div class="right-column-section">
                            <img height="120" src="{{public_path('storage/cv/2/icons/7.svg')}}" alt="Profile Photo">
                            <div class="right-column-section-inner">
                                <h3 class="right-column-section-title">{{__('CvDo')}}</h3>
                                <ul>
                                        <li>zxczxc</li>
                                        <li>zxczxc</li>
                                        <li>zxczxc</li>
                                        <li>zxczxc</li>
                                        <li>zxczxc</li>
                                </ul>
                            </div>
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
