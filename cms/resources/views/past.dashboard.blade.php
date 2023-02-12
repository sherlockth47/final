<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/style.css" >
        <meta charset-"UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
       
    </head>
    <body>
         @include('layouts.header')
    <x-app-layout>
        
    <div class="layout">
<!--navigation-->
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">&emsp;Home</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-buffer"></ion-icon></span>
                        <span class="title">&emsp;Project Admin</span>
                    </a>
                </li>
                <li class="list">
                    <a href="https://68a17fea44334cb083633de7961db0ba.vfs.cloud9.us-east-1.amazonaws.com/chart1">
                        <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                        <span class="title">&emsp;Add Project</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></ion-icon></span>
                        <span class="title">&emsp;BIV</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">&emsp;Learning</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">&emsp;Help</span>
                    </a>
                </li>
            </ul>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </div>
        </div>
        @include('layouts.footer')
        </body>
       
    </x-app-layout>

</html>