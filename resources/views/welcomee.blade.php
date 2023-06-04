
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <style>


  div.col-3 div {
    height: 150 vh;
  }
  div.hig {
    height: 1200px;
  }
  div.d {
    height: 1200px;
  }
  .l, .hig{
  border:none;
  height: 120vh;
  overflow: auto;
  }

  * {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
body {
  font-family: sans-serif;
  font-size: 16px;
}
nav {
  background: #222;
  padding: 0 15px;
}
a {
  color: white;
  text-decoration: none;
}
.menu,
.submenu {
  list-style-type: none;
}
.logo {
  font-size: 20px;
  padding: 7.5px 10px 7.5px 0;
}
.item {
  padding: 10px;
}
.item.button {
  padding: 9px 5px;
}
.item:not(.button) a:hover,
.item a:hover::after {
  color: #ccc;
}
/* Mobile menu */
.menu {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}
.menu li a {
  display: block;
  padding: 15px 5px;
}
.menu li.subitem a {
  padding: 15px;
}
.toggle {
  order: 1;
  font-size: 20px;
}
.item.button {
  order: 2;
}
.item {
  order: 3;
  width: 100%;
  text-align: center;
  display: none;
}
.active .item {
  display: block;
}
.button.secondary {
  /* divider between buttons and menu links */
  border-bottom: 1px #444 solid;
}
/* Submenu up from mobile screens */
.submenu {
  display: none;
}
.submenu-active .submenu {
  display: block;
}
.has-submenu i {
  font-size: 12px;
}
.has-submenu > a::after {
  font-family: "Font Awesome 5 Free";
  font-size: 12px;
  line-height: 16px;
  font-weight: 900;
  content: "\f078";
  color: white;
  padding-left: 5px;
}
.subitem a {
  padding: 10px 15px;
}
.submenu-active {
  background-color: #111;
  border-radius: 3px;
}

/* Tablet menu */
@media all and (min-width: 700px) {
  .menu {
    justify-content: center;
  }
  .logo {
    flex: 1;
  }
  .item.button {
    width: auto;
    order: 1;
    display: block;
  }
  .toggle {
    flex: 1;
    text-align: right;
    order: 2;
  }
  /* Button up from tablet screen */
  .menu li.button a {
    padding: 10px 15px;
    margin: 5px 0;
  }
  .button a {
    background: #0080ff;
    border: 1px royalblue solid;
  }
  .button.secondary {
    border: 0;
  }
  .button.secondary a {
    background: transparent;
    border: 1px #0080ff solid;
  }
  .button a:hover {
    text-decoration: none;
  }
  .button:not(.secondary) a:hover {
    background: royalblue;
    border-color: darkblue;
  }
}
/* Desktop menu */
@media all and (min-width: 960px) {
  .menu {
    align-items: flex-start;
    flex-wrap: nowrap;
    background: none;
  }
  .logo {
    order: 0;
  }
  .item {
    order: 1;
    position: relative;
    display: block;
    width: auto;
  }
  .button {
    order: 2;
  }
  .submenu-active .submenu {
    display: block;
    position: absolute;
    left: 0;
    top: 68px;
    background: #111;
  }
  .toggle {
    display: none;
  }
  .submenu-active {
    border-radius: 0;
  }
}

@media (min-width: 576px) {


     }

     .fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

     .fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



        <div class="container-fluid sm:max-w-md  px-6 pb-4  rounded sm:rounded-lg"  style="background-color: #cccccc">




<div class="container bg-light">
    <nav>
        <ul class="menu">
          <li class="logo"><a href="#">Creative Mind Agency</a></li>
          <li class="item"><a href="#">Home</a></li>
          <li class="item"><a href="#">About</a></li>
          <li class="item has-submenu">
            <a tabindex="0">Services</a>
            <ul class="submenu">
              <li class="subitem"><a href="#">Design</a></li>
              <li class="subitem"><a href="#">Development</a></li>
              <li class="subitem"><a href="#">SEO</a></li>
              <li class="subitem"><a href="#">Copywriting</a></li>
            </ul>
          </li>
          <li class="item has-submenu">
            <a tabindex="0">Plans</a>
            <ul class="submenu">
              <li class="subitem"><a href="#">Freelancer</a></li>
              <li class="subitem"><a href="#">Startup</a></li>
              <li class="subitem"><a href="#">Enterprise</a></li>
            </ul>
          </li>
          <li class="item"><a href="#">Blog</a></li>
          <li class="item"><a href="#">Contact</a>
          </li>
          <li class="item button"><a href="#">Log In</a></li>
          <li class="item button secondary"><a href="#">Sign Up</a></li>
          <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
      </nav>
  <div class="row rounded">

	<div class="d-none d-md-block col-2 l"  style="background-color: #ddd">
      <div id="section1" class="bg-success">
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2" class="bg-warning">
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section3" class="bg-secondary">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41" class="bg-danger">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section42" class="bg-info">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
    <div class="overflow-auto col-md-10 hig">
        <div class="pad50"></div>
<div class="container">


</div>
		<div class="d">
            <div class="container m-0 p-0 d-inline-block justify-content-center shadow-lg ">
                <a href="#" class="fa fa-facebook ml-0 mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-google ml-0 mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-youtube mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-linkedin mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-instagram mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-pinterest mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-skype mr-1 " style="padding:8px 18px; font-size:18px"></a>
                <a href="#" class="fa fa-snapchat-ghost mr-1 d-block d-md-inline-block" style="padding:8px 18px; font-size:18px"></a>


            </div>


        </div>



  </div>
</div>
</div>
</div>
<script>
    const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

/* Toggle mobile menu */
function toggleMenu() {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
    toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
  } else {
    menu.classList.add("active");
    toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
  }
}

/* Activate Submenu */
function toggleItem() {
  if (this.classList.contains("submenu-active")) {
    this.classList.remove("submenu-active");
  } else if (menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
    this.classList.add("submenu-active");
  } else {
    this.classList.add("submenu-active");
  }
}

/* Close Submenu From Anywhere */
function closeSubmenu(e) {
  if (menu.querySelector(".submenu-active")) {
    let isClickInside = menu
      .querySelector(".submenu-active")
      .contains(e.target);

    if (!isClickInside && menu.querySelector(".submenu-active")) {
      menu.querySelector(".submenu-active").classList.remove("submenu-active");
    }
  }
}
/* Event Listeners */
toggle.addEventListener("click", toggleMenu, false);
for (let item of items) {
  if (item.querySelector(".submenu")) {
    item.addEventListener("click", toggleItem, false);
  }
  item.addEventListener("keypress", toggleItem, false);
}
document.addEventListener("click", closeSubmenu, false);
</script>

</body>
</html>



