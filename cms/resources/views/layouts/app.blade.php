<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/style.css" >

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
         

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                
                <div class="layout">
                    
<!--navigation-->
        <!--<div class="navigation">-->
        <!--    <ul>-->
        <!--        <li class="list active">-->
        <!--            <a href="#">-->
        <!--                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>-->
        <!--                <span class="title">&emsp;Home</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li class="list">-->
        <!--            <a href="#">-->
        <!--                <span class="icon"><ion-icon name="logo-buffer"></ion-icon></span>-->
        <!--                <span class="title">&emsp;Project Admin</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li class="list">-->
        <!--            <a href="https://68a17fea44334cb083633de7961db0ba.vfs.cloud9.us-east-1.amazonaws.com/chart1">-->
        <!--                <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>-->
        <!--                <span class="title">&emsp;Add Project</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li class="list">-->
        <!--            <a href="#">-->
        <!--                <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></span>-->
        <!--                <span class="title">&emsp;BIV</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li class="list">-->
        <!--            <a href="#">-->
        <!--                <span class="icon"><ion-icon name="school-outline"></ion-icon></span>-->
        <!--                <span class="title">&emsp;Learning</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--        <li class="list">-->
        <!--            <a href="#">-->
        <!--                <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>-->
        <!--                <span class="title">&emsp;Help</span>-->
        <!--            </a>-->
        <!--        </li>-->
        <!--    </ul>-->
        <!--    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>-->
        <!--    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>-->
        <!--</div>-->
        <!--</div>-->
        <!--    @endif-->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
