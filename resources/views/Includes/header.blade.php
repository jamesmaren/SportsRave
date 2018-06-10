<!--
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
-->

<head>
  <style>
    .site-navigation {
background: #fff;
border-radius: 3px;
box-shadow: 0 0.25em 2em rgba(128, 103, 253, 0.4);
color: #8b5ab7;
font: 700 1.375rem / 1 'Roboto', sans-serif;
max-width: 1496px;
max-height:65px;
margin: 2em auto;
}

.site-navigation ul, .site-navigation li {
list-style: none;
margin: 0;

padding: 0;
}

.nav > li {
display:inline-block;
font-size: 16px;

}

.nav a {
color: inherit;
text-decoration: none;
-webkit-transition: 0.2s;
transition: 0.2s;
display: block;
overflow: hidden;
padding: 1.25em;
position: relative;
}

.nav a::before {
background-color: #fc9bb6;
background-image: -webkit-linear-gradient(315deg, #fff 0.13333em, transparent 0.13333em), -webkit-linear-gradient(225deg, #fff 0.13333em, transparent 0.13333em), -webkit-linear-gradient(135deg, #fff 0.13333em, transparent 0.13333em), -webkit-linear-gradient(45deg, #fff 0.13333em, transparent 0.13333em);
background-image: linear-gradient(135deg, #fff 0.13333em, transparent 0.13333em), linear-gradient(225deg, #fff 0.13333em, transparent 0.13333em), linear-gradient(315deg, #fff 0.13333em, transparent 0.13333em), linear-gradient(45deg, #fff 0.13333em, transparent 0.13333em);
background-position: -0.2em 0, -0.2em 0, 0 0, 0 0;
background-size: 0.4em 0.4em;
content: '';
display: block;
position: absolute;
top: 50%;
right: 1.25em;
left: 1.25em;
margin-right: 8px;
margin-top: 0.75em;
height: 0.4em;
-webkit-transform: translateY(3em);
transform: translateY(3em);
-webkit-transition: 0.3s ease-out;
transition: 0.3s ease-out;
}

.nav a:hover, .nav a:focus { color: #ffbb61; }

.nav a:hover::before, .nav a:focus::before {
-webkit-transform: none;
transform: none;
}

.nav a:focus { outline: 2px dotted #ffbb61; }

.nav a:active { color: #50cba1; }

.menu-item-has-children > a::after {
border: 0.25em solid transparent;
border-top-color: #ffbb61;
border-bottom-width: 0;
content: '';
display: inline-block;
-webkit-transition: 0.2s;
transition: 0.2s;
margin-top: -0.125em;
margin-left: 0.5em;
position: relative;
vertical-align: middle;
}

.menu-item-has-children > a[aria-expanded=true]::after {
-webkit-transform: rotate(180deg);
transform: rotate(180deg);
}

li.active a::after {
border: 0.25em solid transparent;
border-bottom-color: #50cba1;
border-top-width: 0;
content: '';
position: absolute;
bottom: 0;
left: 50%;
margin-left: -0.125em;
}

.sub-menu {
opacity: 0;
-webkit-transform: translate3d(0, -2rem, 0) scale(0.8);
transform: translate3d(0, -2rem, 0) scale(0.8);
visibility: hidden;
}

[aria-expanded=true] + .sub-menu {
opacity: 1;
-webkit-transform: none;
transform: none;
visibility: visible;
}

.sub-menu {
background: #fff;
box-shadow: 0 0.25em 2em rgba(128, 103, 253, 0.4);
position: absolute;
top: 100%;
left: 50%;
-webkit-transform-origin: top center;
transform-origin: top center;
-webkit-transition: 0.3s ease-out;
transition: 0.3s ease-out;
width: 11rem;
z-index: 2;
}

.sub-menu.sub-menu { margin-left: -5.5rem; }

.sub-menu li { border: 1px solid #e4e3ed; }

.sub-menu a {
-webkit-transform: translate3d(0, 1em, 0);
transform: translate3d(0, 1em, 0);
}

.sub-menu li:nth-child(1) a {
-webkit-transition-delay: 0.1s;
transition-delay: 0.1s;
}

.sub-menu li:nth-child(2) a {
-webkit-transition-delay: 0.2s;
transition-delay: 0.2s;
}

.sub-menu li:nth-child(3) a {
-webkit-transition-delay: 0.3s;
transition-delay: 0.3s;
}

.sub-menu li:nth-child(4) a {
-webkit-transition-delay: 0.4s;
transition-delay: 0.4s;
}

.sub-menu li:nth-child(5) a {
-webkit-transition-delay: 0.5s;
transition-delay: 0.5s;
}

[aria-expanded=true] + .sub-menu a {
-webkit-transform: none;
transform: none;

}
@media (min-width: 768px) {

.nav {
  display:-webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: distribute;
  justify-content: space-around;
}

.nav > li {
  border: 0;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}

.nav > li:not(:last-child)::before {
  background: #e4e3ed;
  content: '';
  display: block;
  -webkit-transform: skew(-15deg);
  transform: skew(-15deg);
  width: 4px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 2px;
  z-index: 10;
}
}
}
    </style>
</head>

<body>
<nav class="site-navigation" role="navigation" aria-label="Main" <a href="https://www.jqueryscript.net/tags.php?/Navigation/" /> 
<ul class="nav">
  <a class="navbar-brand" style="color:green;font-family: 'Sofia';font-size:25px;float:left;"  href="{{Route('welcome')}}">SportsRave</a>
  <li class="menu-item active"><a href="{{Route('home')}}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
  <li class="menu-item-has-children"><a href="#">Sports</a>
    <ul class="sub-menu">
      <li><a  href="{{Route('football')}}">Football</a></li>
        <li><a href="{{Route('formula1')}}">Formula 1</a></li>
    </ul>
  </li>
<li class="menu-item menu-item-has-children"><a href="{{Route('premium')}}">Premium</a></li>
    <ul class="sub-menu">
      <li><a href="#">Plugins</a></li>
      <li><a href="#">Components</a></li>
      <li><a href="#">Directives</a></li>
    </ul>
  </li>
  <li class="menu-item"><a href="{{Route('football')}}"><span class="glyphicon glyphicon-ball"></span>Football</a></li>
  <li class="menu-item"><a href="{{Route('signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  <li class="menu-item"><a href="{{Route('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
  <li class="menu-item"><a href="{{Route('account')}}"><span class="glyphicon glyphicon-account"></span> Account</a></li>
 
</ul>
</nav>


 <script>
  (function() {
var $all<a href="https://www.jqueryscript.net/menu/">Menu</a>s = $(".menu-item-has-children");
var $allToggles = $allMenus.find('> a');
var $allTopLinks = $(".nav > li > a");

var hoverTimer, blurTimer, 
    delay = 500;

// Reusable functions
function openMenu($current) {
  $allToggles.attr("aria-expanded", "false");
  $current.attr("aria-expanded", "true");
}

function closeMenu($current) {
  $current.attr("aria-expanded", "false");
}

function focusSubmenu($current) {
  $current.on("transitionend", function() {
    if ($current.css("visibility") === "visible") {
      $current.find("li:first-child a").focus();
      $current.off("transitionend");
    } 
  });
}

// Add aria roles
$(".menu-item.active > a").attr("aria-current", "page");
$allToggles.attr({
  "aria-has<a href="https://www.jqueryscript.net/tags.php?/popup/">popup</a>": "true",
  "aria-expanded": "false",
  "role": "button"
});

// Open menu on hover
$allMenus.on("mouseenter", function(e) {
  openMenu($(this).find("[aria-expanded]"));

  clearTimeout(hoverTimer);
});

// Close menu after a short delay
$allMenus.on("mouseleave", function() {
  $element = $(this).find("[aria-expanded]");

  hoverTimer = setTimeout(function() {
    closeMenu($element);
  }, delay);
});

// Toggle menu on click, tap, or focus + enter/space
$allToggles
  .on("click touchstart", function(e) {
    $this = $(this);
    $submenu = $this.next(".sub-menu");

    if ($this.attr("aria-expanded") === "true") closeMenu($this);
    else openMenu($this);

    focusSubmenu($submenu);

    e.preventDefault();
  })
  .on("keyup", function(e) {
    if (e.keyCode === 32) {
      openMenu($(this));
      focusSubmenu($(this).next(".sub-menu"));
    }
  });

// Close menu when refocusing on top-level links
$allTopLinks.on("focus", function() {
  closeMenu($allToggles);
});

// Close menu on esc and focus loss
$(".site-navigation").on("keyup", function(e) {
  if (e.keyCode === 27) closeMenu($allToggles);
});

// Close menu if focus isn't inside site navigation
$('.sub-menu').on('focusout', function(){
  // There's a delay between focusout and re-focus
  setTimeout( function() {
    $focused = $(document.activeElement);
    if($focused.closest('.site-navigation').length === 0 ) {
      closeMenu($allToggles);
    }
  }, 1);
});

})();
  </script>

</body>