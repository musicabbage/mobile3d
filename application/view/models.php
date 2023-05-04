<script src="./scripts/js/models_generator.js"></script>
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
                    <div id="3dScene"></div>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="title" href="#" id="navbardrop" data-toggle="dropdown"></a>
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
                        <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="spin()">RotX</a>
                        <a href="#" class="btn btn-secondary btn-responsive camera-font">RotY</a>
                        <a href="#" class="btn btn-success btn-responsive camera-font">RotZ</a>
                        <a href="#" class="btn btn-outline-dark btn-responsive camera-font" onclick="stop()">Stop</a>
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
            <div class="card-body">
                <div class="card-title drinksText" id="title"></div>
                <div class="camera-btns">
                    <div class="btn-group ">
                        <a id="btn-poly" onclick="toggleWireframe(this);" href="#" class="btn btn-success btn-responsive camera-font">Poly</a>
                        <a id="btn-wire" onclick="toggleWireframe(this);" href="#" class="btn btn-secondary btn-responsive camera-font">Wire</a>
                        <a id="btn-lights" onclick="switchOnLights(this)" href="#" class="btn btn-success btn-responsive camera-font">Headlight</a>
                        <a id="btn-default" onclick="defaultRender();" href="#" class="btn btn-outline-dark btn-responsive camera-font">default</a>
                    </div>
                    <div class="card-subtitle drinksText fbxRenderSubtitle" id="subtitle"></div>
                    <div class="card-text fbxRenderDescription drinksText" id="desc"></div>
                </div>
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
<!-- <div id="spriteDescription" class="row">
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
</div> -->
<!-- End description contents -->