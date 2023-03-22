<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lab6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 3dmodel -->
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/FBXLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/MTLLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/OBJLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/libs/fflate.min.js"></script>
  <!--custom js-->
  <script src="./scripts/js/custom.js"></script>
  <script src="./scripts/js/gallery_generator.js"></script>
  <script src="./scripts/js/swap_restyle.js"></script>
  <script src="./scripts/js/getJsonData.js"></script>
  <script src="./scripts/js/model_interactions.js"></script>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
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
          <a id="navHome" class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
        </li>
        <li class="nav-item">
          <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
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
  <!-- End home page -->
  <!-- Start X3D models and 3D Image Gallery -->
  <div id="models" class="main_contents">
    <div class="row">
      <!-- 3D model -->
      <div class="col-sm-10">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li id="navCoke" class="nav-item">
                <a class="nav-link active" href="#">Coke</a>
              </li>
              <li id="navSprite" class="nav-item">
                <a class="nav-link" href="#">Sprite</a>
              </li>
              <li id="navPepper" class="nav-item">
                <a class="nav-link" href="#">Pepper</a>
              </li>
            </ul>
          </div>
          <!-- todo: Place 3d model code here -->
          <div class="card-body">
            <div id="x3dModelTitle_coke" class="card-subtitle drinksText"></div>
            <div id="3dScene" class="model3D"></div>
            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
          </div>
        </div>
      </div>
      <!-- 3D image gallery -->
      <div class="col-sm-2">
        <div class="card text-left">
          <div class="card-header gallery-header">Gallery</div>
          <div class="card-body">
            <div id="title_gallery" class="card-title drinksText"></div>
            <div class="gallery" id="gallery_coke"></div>
            <div id="description_gallery" class="card-text drinksText"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End X3D Models and Gallery -->
  <!-- Start the interaction panels -->
  <div id="interaction" class="row">
    <div class="col-sm-4">
      <!-- camera card -->
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle x3dCameraTitle" href="#" id="navbardrop" data-toggle="dropdown"></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
              </div>
            </li>
          </ul>
          <div class="card-body">
            <div class="camera-btns">
              <div class="btn-group ">
                <a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
                <a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
                <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                <a href="#" class="btn btn-warning btn-responsive camera-font">Top</a>
                <a href="#" class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
              </div>
              <div class="card-subtitle drinksText x3dCameraSubtitle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- animation card -->
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title drinksText x3dAnimationTitle"></div>
        </div>
        <div class="card-body">
          <div class="camera-btns">
            <div class="btn-group ">
              <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="spin()">RotX</a>
              <a href="#" class="btn btn-secondary btn-responsive camera-font">RotY</a>
              <a href="#" class="btn btn-success btn-responsive camera-font">RotZ</a>
              <a href="#" class="btn btn-outline-dark btn-responsive camera-font" onclick="stop()">Stop</a>
            </div>
            <div class="card-subtitle drinksText x3dAnimationSubtitle"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- render card -->
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title drinksText x3dRenderTitle"></div>
          <div class="camera-btns">
            <div class="btn-group ">
                <a href="#" class="btn btn-success btn-responsive camera-font">Poly</a>
                <a href="#" class="btn btn-secondary btn-responsive camera-font" onclick="wireFrame();">Wire</a>
                <a href="#" class="btn btn-success btn-responsive camera-font">Headlight</a>
                <a href="#" class="btn btn-outline-dark btn-responsive camera-font">default</a>
            </div>
            <div class="card-subtitle drinksText x3dRenderSubtitle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End the interaction panels -->
  <!-- Start description contents -->
  <div id="cokeDescription" class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="title_coke" class="card-title drinksText"></div>
          <div id="subTitle_coke" class="card-text drinksText"></div>
          <div id="description_coke" class="card-text drinksText"></div>
          <a href="#" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
    </div>
  </div>
  <div id="spriteDescription" class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="title_sprite" class="card-title drinksText"></div>
          <div id="subTitle_sprite" class="card-text drinksText"></div>
          <div id="description_sprite" class="card-text drinksText"></div>
          <a href="#" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
    </div>
  </div>
  <div id="pepperDescription" class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="title_pepper" class="card-title drinksText"></div>
          <div id="subTitle_pepper" class="card-text drinksText"></div>
          <div id="description_pepper" class="card-text drinksText"></div>
          <a href="#" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End description contents -->
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