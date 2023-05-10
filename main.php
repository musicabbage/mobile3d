<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mobile3D</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/icon_coke.png">
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
  <script src="./scripts/js/swap_restyle.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- our project just needs Font Awesome Solid + Brands -->
  <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/solid.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.css">
  <!-- fancybox -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <!-- fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbarSupportedContent ">
      <span class=" navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a id="navHome" class="nav-link button-main-style active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a id="navAbout" class="nav-link button-main-style" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
        </li>
        <li class="nav-item">
          <a id="navModels" class="nav-link button-main-style" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
        </li>
        <li class="nav-item">
          <a class="nav-link button-main-style" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <!-- Home -->
  <!-- <div w3-include-html="application/view/home.php"></div> -->
  <div id="homeContainer">
    <?php include "application/view/home.php"; ?>
  </div>
  <!-- End home page -->
  <!-- Start X3D models and 3D Image Gallery -->
  <div id="modelsContainer">
  </div>
  <!-- End X3D Models and Gallery -->
  <!-- Contact modal -->
  <!-- The Modal -->
  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Szuyun Liang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <p>CandNo: 260157</p>
          <p>Email: <a href='mailto:sl798@sussex.ac.uk'>sl798@sussex.ac.uk</a></p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
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
        <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right social-buttons"></i></a>
        <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right social-buttons"></i></a>
        <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right social-buttons"></i></a>
        <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right social-buttons"></i></a>
      </div>
    </div>
  </nav>
</body>
</html>