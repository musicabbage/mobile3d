<script src="./scripts/js/models_generator.js"></script>
<script src="./scripts/js/model_interactions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<div id="models" class="main_contents container-fluid">
    <div class="row">
        <!-- 3D model -->
        <div class="col-sm-8">
            <div class="card text-left">
                <div class="card-header">
                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div id="modelsTabs" class="btn-group-justified mr-2" role="group" aria-label="First group"></div>
                        </div>
                        <div id="wire-checkbox" class="input-group custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switchwire" onclick="showWireframe(this);">
                            <label class="custom-control-label" for="switchwire">show wire</label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <div>
                            <h3>Lights</h3>
                        </div>
                        <div class="row mb-3" id="lightsContainer"></div>
                        <div id="fbxmodel"></div>
                        <div id="fbxCreationMethod" class="card-text drinksText"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start the interaction panels -->
        <div class="col-sm-4">
            <!-- camera card -->
            <div class="card" id="fbxCameraControl">
                <div class="card-header d-flex align-content-stretch">
                    <div id="subtitle"></div>
                    <a id="popover" tabindex="0" class="btn fa-solid fa-circle-info vertical-center" role="button" data-toggle="popover" data-trigger="focus"></a>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="d-flex flex-column bd-highlight">
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-fill bd-highlight"></div>
                                <a href="javascript:updateCamera('top');" class="p-2 align-self-stretch flex-fill text-center btn button-main-style camera-button">
                                    <i class="fa-solid fa-caret-up fa-xl"></i>
                                </a>
                                <div class="p-2 flex-fill bd-highlight"></div>
                            </div>
                            <div class="d-flex bd-highlight">
                                <a href="javascript:updateCamera('left');" class="p-2 flex-fill bd-highlight text-center btn button-main-style camera-button">
                                    <i class="fa-solid fa-caret-left fa-xl"></i>
                                </a>
                                <a href="javascript:updateCamera('front');" class="p-2 flex-fill bd-highlight text-center btn button-main-style camera-button">
                                    <i class="fa-solid fa-cube fa-xl"></i>
                                </a>
                                <a href="javascript:updateCamera('right');" class="p-2 flex-fill bd-highlight text-center btn button-main-style camera-button">
                                    <i class="fa-solid fa-caret-right fa-xl"></i>
                                </a>
                            </div>
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-fill bd-highlight"></div>
                                <a href="javascript:updateCamera('bottom');" class="p-2 flex-fill bd-highlight text-center btn button-main-style camera-button">
                                    <i class="fa-solid fa-caret-down fa-xl"></i>
                                </a>
                                <div class="p-2 flex-fill bd-highlight"></div>
                            </div>
                        </div>
                        <div class="d-flex pt-3 text-center">
                            <a href="javascript:updateCamera('front');" class="p-2 flex-fill btn button-main-style camera-button">Front</a>
                            <a href="javascript:updateCamera('back');" class="p-2 flex-fill btn button-main-style camera-button">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- animation card -->
            <div class="card" id="fbxAnimationControl">
                <div class="card-header d-flex align-content-stretch">
                    <div id="subtitle"></div>
                    <a id="popover" tabindex="0" class="btn fa-solid fa-circle-info vertical-center" role="button" data-toggle="popover" data-trigger="focus"></a>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="javascript:spin('1');" class="mx-1 btn btn-responsive camera-font rounded-circle button-main-style rotate-button vertical-center">RotX</a>
                        <a href="javascript:spin('2');" class="mx-1 btn btn-responsive camera-font rounded-circle button-main-style rotate-button vertical-center">RotY</a>
                        <a href="javascript:spin('3');" class="mx-1 btn btn-responsive camera-font rounded-circle button-main-style rotate-button vertical-center">RotZ</a>
                        <a href="javascript:stop();" class="mx-1 btn btn-responsive camera-font rounded-circle button-main-style rotate-button vertical-center">Stop</a>
                        <a href="javascript:spin(0);" class="mx-1 btn btn-responsive camera-font rounded-circle button-main-style rotate-button vertical-center">reset</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End the interaction panels -->
    </div>
    <!-- 3D image gallery -->
    <div id="modelGallery" class="row">
        <div class="col-sm-12">
            <div class="card text-left">
                <div class="card-header card-subtitle drinksText">
                    <h2>Gallery</h2>
                </div>
                <div class="card-body">
                    <div id="title_gallery" class="card-title drinksText"></div>
                    <div class="gallery" id="gallery"></div>
                    <div id="description_gallery" class="card-text drinksText"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start description contents -->
    <div id="modelDescription" class="row">
        <div class="col-sm-12">
            <div class="card">
                <div id="modelDescTitle" class="card-header card-title drinksText"></div>
                <div class="card-body">
                    <div id="modelDescSubTitle" class="card-text drinksText"></div>
                    <div id="modelDescDescription" class="card-text drinksText"></div>
                    <a id="modelDescLink" class="btn btn-link button-main-style">Find out more ...</a>
                </div>
            </div>
        </div>
    </div>
</div>