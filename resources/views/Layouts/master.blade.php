<html>
    <head>@yield('head')
    
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <script type="text/javascript"  src="{!! asset('src/js/like.js') !!}"> </script>
  <link href="{!! asset('src/css/main.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>


   
      <style>
         .hovereffect {
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
    background: #42b078;
  }
  
  .hovereffect .overlay {
   ;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    padding: 50px 20px;
  }
  
  .hovereffect img {
    display: block;
    position: relative;
    max-width: none;
    width: calc(100% + 20px);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(-10px,0,0);
    transform: translate3d(-10px,0,0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  
  .hovereffect:hover img {
    opacity: 0.4;
    filter: alpha(opacity=40);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }
  
  .hovereffect h4 {
    color:white;
    font-family: 'Sofia';
    text-transform: uppercase;
    text-align: center;
    position: relative;
    overflow: hidden;
    padding: 0.5em 0;
  }
  
  .hovereffect h4:after {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    content: '';
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-100%,0,0);
  }
  
  .hovereffect:hover h4:after {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }
  
  .hovereffect a, .hovereffect p {
    color: black;
    opacity: 0;
    font-size: 19px;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(100%,0,0);
    transform: translate3d(100%,0,0);
  }
  
  .hovereffect:hover a, .hovereffect:hover p {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }
        
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
       <script type="text/javascript"   src="{{asset('src/js/like.js') }}"> </script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        </div>
        @include('includes.footer')
        
    </body>
</html>
