<!DOCTYPE html>
<html>
<head>
    <title>welcome</title>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <style> 
html {
  min-height: 100%;
}

body {
  height: 100%;
}

.slideshow {
  list-style: none;
  z-index: 1;
}
.slideshow li span {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  color: transparent;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: none;
  opacity: 0;
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-animation: imageAnimation 24s linear infinite 0s;
  -moz-animation: imageAnimation 24s linear infinite 0s;
  animation: imageAnimation 24s linear infinite 0s;
}
.slideshow li h3 {
  position: absolute;
  text-align: center;
  z-index: 2;
  bottom: 150px;
  left: 0;
  right: 0;
  opacity: 0;
  font-size: 4.0625em;
  font-family: 'Josefin Sans', sans-serif;
  text-transform: uppercase;
  color: #fff;
  -webkit-animation: titleAnimation 24s linear 1 0s;
  -moz-animation: titleAnimation 24s linear 1 0s;
  animation: titleAnimation 24s linear 1 0s;
}
@media only screen and (min-width: 768px) {
  .slideshow li h3 {
    bottom: 30px;
    font-size: 8.125em;
  }
}
@media only screen and (min-width: 1024px) {
  .slideshow li h3 {
    font-size: 10.9375em;
  }
}

.slideshow li:nth-child(1) span {
  background-image:url({{ asset("/img/MESSI.jpg") }});

}

.slideshow li:nth-child(2) span {
  background-image:url({{ asset("/img/BUFFON.jpg") }});
  -webkit-animation-delay: 6s;
  -moz-animation-delay: 6s;
  animation-delay: 6s;
}

.slideshow li:nth-child(3) span {
  background-image:url({{ asset("/img/CR7.jpg") }});
  -webkit-animation-delay: 12s;
  -moz-animation-delay: 12s;
  animation-delay: 12s;
}

.slideshow li:nth-child(4) span {
  background-image:url({{ asset("/img/NEYMAR.jpg") }});
  -webkit-animation-delay: 18s;
  -moz-animation-delay: 18s;
  animation-delay: 18s;
}

@-webkit-keyframes imageAnimation {
  0% {
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
  }
  12.5% {
    opacity: 1;
    -webkit-animation-timing-function: ease-out;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes imageAnimation {
  0% {
    opacity: 0;
    -moz-animation-timing-function: ease-in;
  }
  12.5% {
    opacity: 1;
    -moz-animation-timing-function: ease-out;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes imageAnimation {
  0% {
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  12.5% {
    opacity: 1;
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
.no-cssanimations .slideshow li span {
  opacity: 1;
}

</style>
</head>
 
      <body >
        <ul class='slideshow'>
          <li> <h3 ></h3> <span></span> </li>
          <li> <span></span></li>
          <li><span></span></li>
          <li> <span></span> </li>
        </ul>

        

          <div style="position:relative;padding-top:300px;padding-left:350px;">
        <h1 style="color:#1a0000;background-color:#e6e6ff;width:370px;font-family: 'Sofia';">   Welcome To Sportsrave No.1 Best Streaming Platform In The World </h1> 
        </div>
 
        <div style="position:relative;padding-top:145px;padding-left:300px;">
          <a href="{{Route('home')}}">
              <button type="submit" class="btn btn-primary">CONTINUE </button> </a>
              <a href="{{Route('signin')}}">
                    <!--
                <button type="submit" class="btn btn-primary">login</button> </a>
                <a href="{{Route('signup')}}">
                  <button type="submit" class="btn btn-primary">signup </button> </a> -->
        </div> 
        
        
      
      </body>
    </html>



