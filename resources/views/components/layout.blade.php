<!DOCTYPE html>
<html lang="en" class="bg-body bg-no-repeat bg-cover bg-center">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="air+community2024" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('Assets/css/style.css')}}">
    <title>@yield('title')</title>
    <style>
        body{
            font-family:Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
        .roboto{
            font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        ::-webkit-scrollbar {
          width: 5px;
        }

        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px rgb(28, 3, 31);
          border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
          background: #1C0949;
          border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
          background: #1c0949a1;
        }
        .bg-body{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg')
        }
        .bg-header{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/header.jpg')
        }
        .bg-selectBG{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/selectBG.png')
        }
        .bg-aboutPhones{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/3D_phone.png')
        }
        .bg-vector{
            background-image: url('../Assets/02_About Page/About_Section  1/vector.png')
        }
        .bg-phone1{
            background-image: url('../Assets/02_About Page/About_Section  1/Phone_burstup_top.png')
        }
        .bg-phone2{
            background-image: url('../Assets/02_About Page/About_Section  1/Phone_burstup_mid.png')
        }
        .bg-phone3{
            background-image: url('../Assets/02_About Page/About_Section  1/Phone_burstup_base.png')
        }
        .bg-angel1{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Phone_Angle1_01.png')
        }
        .bg-angel2{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Phone_Angle1_02.png')
        }
        .bg-angel3{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Phone_Angle1_03.png')
        }
        .bg-angel4{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Phone_Angle1_04.png')
        }

        </style>
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="body bg-body bg-no-repeat text-gray-300 overflow-x-hidden overflow-y-scroll scroll-smooth tracking-wide min-w-[20rem] w-full h-full max-w-[2000px] mx-auto bg-[center_-15%] md:bg-[center_-30%]">
    @yield('body')

    <script src="{{asset('Assets/js/animation.js')}}"></script>
    <script src="{{asset('Assets/js/feature.js')}}"></script>
</body>
</html>
