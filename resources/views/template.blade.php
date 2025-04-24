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
        body {
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
            position: relative;
            z-index: 1;
        }
        .grid-border{
            border-bottom: 5px solid black;
           height: 350px;
        }
        .left-column-top{
            float: left;
            width: 45%;
        }
        .right-column-top{
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
        .profile-pic {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            border:5px solid black;
            outline: 5px solid black;
            outline-offset: 5px;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-item {
            position: relative;
            //height: 40px;
        }
        .info-item img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }
        .info-item span {
            float: left;
            display: block;
            position: absolute;
            top:-1px;
            vertical-align: top;
            margin-left: 60px;
        }
        .section {
            font-size: 12px;
            padding-left: 24px;
            padding-bottom: 5px;
            color:black;
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
            background: black;
            color:white;
            text-align: center;
            width: 90%;
        }
        .info-block{
            padding-left: 30px;
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
            padding-left: 30px;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
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
        <div class="grid-container">
                <div class="grid-border">
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
                            <div class="info-item"><img src="{{public_path('storage/cv/8/icons/3.svg')}}"/><span>02.20.2023</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/8/icons/4.svg')}}"/><span>233213213</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/8/icons/5.svg')}}"/><span>sadasds@wp.pl</span></div>
                            <div class="info-item"><img src="{{public_path('storage/cv/8/icons/6.svg')}}"/><span>44-230 rybnik</span></div>
                        </div>
                    </div>
            <div class="clear"></div>
                </div>
            <div class="clear"></div>
            <div>
                <!-- Lewa kolumna -->
                <div class="left-column">
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
