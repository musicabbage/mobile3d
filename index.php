<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Dropdown link
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:swap('home')">Home</a>
            <a class="dropdown-item" href="javascript:swap('coke')">Coka cola</a>
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
          <h2>Coca Cola Great Britain</h2>
          <h3>Founded by Dr John S Pemberton</h3>
          <p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <a href="#">
            <!--assets/images/site_images/coke_can_tn.png-->
            <img src="./assets/images/site_images/coca_cola.jpg" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola">
          </a>
          <div class="card-body">
            <h3 class="card-title">Coca Cola</h3>
            <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>
            <a href="#" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <a href="#">
            <img src="./assets/images/site_images/sprite.jpg" class="card-img-top img-fluid img-thumbnail" alt="Sprite">
          </a>
          <div class="card-body">
            <h3 class="card-title">Sprite</h3>
            <p class="card-text">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p>
            <a href="#" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <a href="#">
            <img src="./assets/images/site_images/dr_pepper.jpg" class="card-img-top img-fluid img-thumbnail" alt="Dr Pepper">
          </a>
          <div class="card-body">
            <h3 class="card-title">Dr Pepper</h3>
            <p class="card-text">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885.</p>
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