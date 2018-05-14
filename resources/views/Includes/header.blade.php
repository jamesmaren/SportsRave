<nav class="navbar navbar-expand-lg navbar-light bg-light"  >
  <a class="navbar-brand" style="color:green;font-family: 'Sofia';font-size:30px;"  href="{{Route('welcome')}}">SportsRave</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{Route('stream')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Sports
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{Route('football')}}">Football</a>
          <a class="dropdown-item" href="{{Route('formula1')}}">Formula 1</a>
            <div class="dropdown-divider">dddd</div>
          <a class="dropdown-item" href="{{Route('rugby')}}">Rugby</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Premium</a>
        </li>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <ul class="nav navbar-nav navbar-right"  style="padding-top:8px;">
        <li><a href="{{Route('signup')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{Route('signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="{{Route('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="{{Route('account')}}"><span class="glyphicon glyphicon-account"></span> Account</a></li>
          </ul>
      </ul>
      
      <form class="form-inline my-2 my-lg-0" style="float:right;padding-top:8px;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>





