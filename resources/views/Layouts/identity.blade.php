<!DOCTYPE html>
<html>
    <head>
    
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Route{{('public\src\css\main.css')}}" >
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
      <style>


           #content-identity a{
            color:#333333;
           }
            .match-identity:hover{
                color: #ffb280;
            }
          #content-identity h3{
              text-decoration: underline;
              font-family: 'Sofia';
              color:#000000;
              padding-left:130px;
          }
          #content-identity{
            background-color: #ffccff;
            padding:50px;
            width:1100px;
          }
          .day-identity{
              
          }
          .time-identity{
              float:left;
              font-size: 19px;
          }
           .match-identity{
               float:left;
               padding-left:120px;
               font-size: 19px;
           }
           .live-video-identity{
               float:right;
               font-size: 15px;
               color:red;
               Border: 2px solid white;
               border-radius:10px;
           }
           
        </style>   
    </head>
    <body style="background-color:#4d0000;height:100%;">
        @include('includes.header')
        <div class="container" >

       @yield('content')

        </div>
       
        @include('includes.footer')
    </body>
</html>
