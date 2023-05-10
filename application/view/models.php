<script src="./scripts/js/models_generator.js"></script>
<script src="./scripts/js/model_interactions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<div id="models" class="main_contents">
    <div class="row">
        <!-- 3D model -->
        <div class="col-sm-10">
            <div class="card text-left">
                <div class="card-header">
                    <ul id="modelsTabs" class="nav nav-tabs card-header-tabs"></ul>
                </div>
                <!-- todo: Place 3d model code here -->
                <div class="card-body">
                    <div id="fbxModelTitle" class="card-subtitle drinksText"></div>
                    <div id="fbxmodel"></div>
                    <div id="fbxCreationMethod" class="card-text drinksText"></div>
                </div>
            </div>
        </div>
        <!-- 3D image gallery -->
        <div class="col-sm-2">
            <div class="card text-left">
                <div class="card-header gallery-header">Gallery</div>
                <div class="card-body">
                    <div id="title_gallery" class="card-title drinksText"></div>
                    <div class="gallery" id="gallery"></div>
                    <div id="description_gallery" class="card-text drinksText"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start the interaction panels -->
<div id="interaction" class="row">
    <div class="col-sm-4">
        <!-- camera card -->
        <div class="card" id="fbxCameraControl">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <!-- Dropdown nav-tab -->
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:cameraPerspective('front');">Front</a>
                            <a class="dropdown-item" href="javascript:cameraPerspective('back');">Back</a>
                            <a class="dropdown-item" href="javascript:cameraPerspective('left');">Left</a>
                            <a class="dropdown-item" href="javascript:cameraPerspective('right');">Right</a>
                            <a class="dropdown-item" href="javascript:cameraPerspective('top');">Top</a>
                            <a class="dropdown-item" href="javascript:cameraPerspective('bottom');">Bottom</a>
                        </div>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="card-title drinksText" id="title"></div>
                </div>
                <div class="card-body">
                    <div class="camera-btns">
                        <div class="btn-group ">
                            <a href="javascript:updateCamera('front');" class="btn btn-primary btn-responsive camera-font">Front</a>
                            <a href="javascript:updateCamera('back');" class="btn btn-secondary btn-responsive camera-font">Back</a>
                            <a href="javascript:updateCamera('left');" class="btn btn-success btn-responsive camera-font">Left</a>
                            <a href="javascript:updateCamera('right');" class="btn btn-danger btn-responsive camera-font">Right</a>
                            <a href="javascript:updateCamera('top');" class="btn btn-warning btn-responsive camera-font">Top</a>
                            <a href="javascript:updateCamera('bottom');" class="btn btn-warning btn-responsive camera-font">Bottom</a>
                            <a href="javascript:updateCamera('none');" class="btn btn-outline-dark btn-responsive camera-font">Off</a>
                        </div>
                        <div class="card-subtitle drinksText fbxCameraSubtitle" id="subtitle"></div>
                        <div class="card-text fbxCameraDescription drinksText" id="desc"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- animation card -->
    <div class="col-sm-4">
        <div class="card" id="fbxAnimationControl">
            <div class="card-body">
                <div class="card-title drinksText" id="title"></div>
            </div>
            <div class="card-body">
                <div class="camera-btns">
                    <div class="btn-group ">
                        <a href="javascript:spin('1');" class="btn btn-primary btn-responsive camera-font">RotX</a>
                        <a href="javascript:spin('2');" class="btn btn-secondary btn-responsive camera-font">RotY</a>
                        <a href="javascript:spin('3');" class="btn btn-success btn-responsive camera-font">RotZ</a>
                        <a href="javascript:stop();" class="btn btn-outline-dark btn-responsive camera-font">Stop</a>
                    </div>
                    <div class="card-subtitle drinksText fbxAnimationSubtitle" id="subtitle"></div>
                    <div class="card-text fbxAnimationDescription drinksText" id="desc"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- render card -->
    <div class="col-sm-4">
        <div class="card" id="fbxRenderControl">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Render</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:showPolygons();">Polygon</a>
                            <a class="dropdown-item" href="javascript:showWireframe();">Wireframe</a>
                            <a class="dropdown-item" href="#">Vertex</a>
                        </div>
                    </li>
                    <!-- Dropdown nav-tab -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                        <div id="lightsDropdownMenu" class="dropdown-menu">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div id="title" class="card-Title drinksText"></div>
                <a href="javascript:showPolygons();" class="btn btn-success btn-responsive">Poly</a>
                <a href="javascript:showWireframe();" class="btn btn-secondary btn-responsive" onclick="">Wire</a>
                <a href="javascript:setDefaultLight(this);" class="btn btn-success btn-responsive" onclick="">AmbientLight</a>
                <a href="javascript:defaultLight();" class="btn btn-outline-dark btn-responsive">Default</a>
                <div class="card-subtitle drinksText fbxAnimationSubtitle" id="subtitle"></div>
                <div id="desc" class="card-text drinksText"></div>
            </div>
        </div>
    </div>
</div>
<!-- End the interaction panels -->
<!-- Start description contents -->
<div id="modelDescription" class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div id="modelDescTitle" class="card-title drinksText"></div>
                <div id="modelDescSubTitle" class="card-text drinksText"></div>
                <div id="modelDescDescription" class="card-text drinksText"></div>
                <a id="modelDescLink" href="#" class="btn btn-primary"">Find out more ...</a>
            </div>
        </div>
    </div>
</div>