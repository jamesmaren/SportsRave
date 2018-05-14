<html>
    <head>@yield('head')
    
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"   src="{{ URL::asset('src/js/app.js') }}"> </script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        
      <style>
           
        
           #home-football div{
            border: 2px solid red;
            border-radius:5px;
             width: 210px; 
             height:210px;
             float:left;
           }
           #home-football h2{
            color:green;
            font-family: 'Sofia';
            font-size:30px;
           }
           #home-football{
            width:1400px;
            height:300px;
           }

           #home-toplive{
            width:1400px;
            height:300px;
           }
           #home-toplive div{
            border: 2px solid red;
            border-radius:5px;
             width: 210px;
              height:210px;
              float:left;
           }
           #home-toplive h2{
            color:green;
            font-family: 'Sofia';
            font-size:30px
           }
           #home-basketball{
            width:1400px;
            height:300px;
           }
           #home-basketball h2{
            color:green;
            font-family: 'Sofia';
            font-size:30px;
           }
           #home-basketball div{
            border: 2px solid red;
            border-radius:5px;
            width: 210px;
            height:210px;
            float:left;
           }
             #home-rugby{
            width:1400px;
            height:300px;
           }
           #home-rugby h2{
            color:green;
            font-family: 'Sofia';
            font-size:30px;
           }
           #home-rugby div{
            border: 2px solid red;
            border-radius:5px;
            width: 210px;
            height:210px;
            float:left;
           }
           
          </style>
    </head>
    <body>
        @include('includes.header')
        <div class="container">

       @yield('content')
       <script type="text/javascript"   src="{{ URL::asset('src/js/app.js') }}"> </script>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        </div>
        @include('includes.footer')
        
    </body>
</html>
