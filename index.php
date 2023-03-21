<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./scripts/js/custom.js"></script>
  <script src="./scripts/js/swap_restyle.js"></script>
  <script src="./scripts/js/getJsonData.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- our project just needs Font Awesome Solid + Brands -->
  <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/solid.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.css">
  <!-- fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
  <!-- note custom.css is last so that it overrides any bootstrap or x3dom CSS as necessary -->
  <link rel="stylesheet" href="./css/custom.css">
  <!-- fancybox -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
</head>

<body id="body">
  <!-- Navigation bar -->
  <nav id="header" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <!-- Brand -->
    <div class="logo">
      <a class="navbar-brand" href="#">
        <h1>1</h1>
        <h1>oca</h1>
        <h2>Cola</h2>
        <h3>Journey</h3>
        <p>Refreshing the world, one story at a time</p>
      </a>
    </div>
    <!-- TODO: remove -->
    <div id="debug_text">Lab6</div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbarSupportedContent ">
      <span class=" navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Dropdown link
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:swap('home')">Home</a>
            <a class="dropdown-item" href="./coke.html">Coka cola</a>
            <a class="dropdown-item" href="javascript:swap('sprite')">Sprite</a>
            <a class="dropdown-item" href="javascript:swap('pepper')">Dr Pepper</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <!-- Home -->
  <div id="home" class="container-fluid main_container">
    <div class="row">
      <div id="main_3d_image" class="col-sm-12">
        <div id="main_text" class="col-xs-12 col-sm-4">
          <div id="title_home"></div>
          <div id="subTitle_home"></div>
          <div id="description_home"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke can render" class="thumbnail">
            <img src="./assets/images/site_images/coca_cola.jpg" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola">
          </a>
          <div class="card-body">
            <div id="title_left" class="drinksText"></div>
            <div id="subTitle_left" class="drinksText"></div>
            <div id="description_left" class="drinksText"></div>
            <a href="#" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite can render" class="thumbnail">
            <img src="./assets/images/site_images/sprite.jpg" class="card-img-top img-fluid img-thumbnail" alt="Sprite">
          </a>
          <div class="card-body">
            <div id="title_centre" class="drinksText"></div>
            <div id="subTitle_centre" class="drinksText"></div>
            <div id="description_centre" class="drinksText"></div>
            <a href="#" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
        <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper can render">
            <img src="./assets/images/site_images/dr_pepper.jpg" class="card-img-top img-fluid img-thumbnail" alt="Dr Pepper">
          </a>
          <div class="card-body">
            <div id="title_right" class="drinksText"></div>
            <div id="subTitle_right" class="drinksText"></div>
            <div id="description_right" class="drinksText"></div>
            <a href="#" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Coke -->
  <div id="coke" class="container-fluid main_container" style="display: none;">
    <p>Merge your coke.html main contents here</p>
  </div>

  <!-- Sprite -->
  <div id="sprite" class="container-fluid main_container" style="display: none;">
    <p>Merge your sprite.html main contents here</p>
  </div>

  <!-- Pepper -->
  <div id="pepper" class="container-fluid main_container" style="display: none;">
    <p>Merge your pepper.html main contents here</p>
  </div>

  <!-- Footer -->
  <nav id="footer" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
      <div class="navbar-text float-left copyright">
        <p>
          <span class="align-baseline"></span>&copy 2023 Mobile Web 3D Applications
          <a href="javascript:changeLook()"> | Restyle</a>
          <a href="javascript:changeBack()"> | Reset</a>
        </p>
      </div>
      <div class="navbar-text social">
        <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
        <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
        <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
        <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
      </div>
    </div>
  </nav>
</body>

</html>