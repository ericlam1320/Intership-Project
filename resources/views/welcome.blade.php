<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>STU</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                
            }

            .menu{
                background-color: black;
                height: 100px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                text-shadow: 5px 5px 5px gray,0 0 5px lightblue;;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 1px 1px 3px gray;  
            }           
            .links-menu > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="menu">
            @if (Route::has('login'))
                <div class="top-right links-menu">
                    @auth
                        <a href="{{ url('/home') }}">Trang chủ</a>
                    @else
                        <a href="{{ route('login') }}">Đăng nhập</a>
                    @endauth
                </div>
            @endif
            </div>

            <div class="content">
                <div class="title m-b-md">
                    <span style="color:blue">S</span>
                    <span style="color:red">T</span>
                    <span style="color:blue">U</span>
                </div>

                <div class="links">
                    <a href="http://www.stu.edu.vn/vi/1/trang-chu.html">Sức khỏe</a>
                    <a href="http://www.stu.edu.vn/vi/1/trang-chu.html">Trí tuệ</a>
                    <a href="http://www.stu.edu.vn/vi/1/trang-chu.html">Ước vọng</a>
                </div>
            </div>
        </div>
    </body>
</html>
