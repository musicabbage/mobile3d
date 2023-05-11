var xmlHttp = new XMLHttpRequest();
var numberOfColumns = 2;
var htmlCode = "";
var response;
$(document).ready(function () {
    $("[data-toggle=popover]").popover();
    loadGallery();
    loadModelsInfo();
    loadControls();
    init3dScene();
});

function switchModel(sender) {
    console.log("switchModel: " + sender);
    
    $.getJSON('./index.php?loadModelInfo/' + sender, function (jsonObj) {
        console.log(jsonObj);
        jsonObj.forEach(function (row) {
            $("#modelDescTitle").html('<h2>' + row['title'] + '<h2>');
            $("#modelDescSubTitle").html('<h3>' + row['subtitle'] + '</h3>');
            $("#modelDescDescription").html('<p>' + row['description'] + '</p>');
            $("#modelDescLink").attr('href', row['link']);
            reloadModel(row['filename']);
        });
    });
}

function loadModelsInfo() {
    $.getJSON('./index.php?loadModelsInfo', function (jsonObj) {
        var modelTabsHTML = "";
        jsonObj.forEach(function (row) {
            modelTabsHTML += '';
            if (row['Id'] == 1) {
                modelTabsHTML += '<a class="btn-link button-main-style model-button" href="javascript:switchModel(\'' + row['name'] + '\')" active>' + row['name'];
                switchModel(row['name']);
            } else {
                modelTabsHTML += '<a class="btn-link button-main-style model-button" href="javascript:switchModel(\'' + row['name'] + '\')">' + row['name'];
            }
            modelTabsHTML += '</a>';
        });
        $("#modelsTabs").html(modelTabsHTML);
    });
}

function loadControls() {
    $.getJSON('./index.php?loadModelsControls', function (jsonObj) {
        jsonObj.forEach(function (row) {
            var controlElement = $('#' + row['domId']);
            console.log(row['domId'] + "row['name']" + row['name']);
            controlElement.find('#title').html('<h3>' + row['name'] + '<h3>');
            controlElement.find('#subtitle').html('<h3>' + row['name'] + '<h3>');
            controlElement.find('#desc').html('<p>' + row['description'] + '<p>');
            controlElement.find('#popover').attr('data-original-title', row['title']);
            controlElement.find('#popover').attr('data-content', row['description']);
        });
    });

    $.getJSON('./index.php?loadLightOptions', function (jsonObj) {
        var availableLights = [];
        var lightsControlsHTML = "";
        Object.entries(jsonObj).forEach(([key, value]) => {
            availableLights.push(key);
            lightsControlsHTML += '<div class="col-sm-6">' + 
            '<div class="custom-control custom-switch">' +
            '<input type="checkbox" class="custom-control-input" id="' + key + '" onclick="javascript:switchLight(\'' + key + '\');"';
            if (key == defaultLightName) {
                lightsControlsHTML += 'checked>';
            } else {
                lightsControlsHTML += '>';
            }
            lightsControlsHTML += '<label class="custom-control-label" for="' + key + '">' + value + '</label>' + 
            '</div></div>';
        })
        $("#lightsContainer").html(lightsControlsHTML);
        setupLights(availableLights);
    });
}

function loadGallery() {
    var send = "./scripts/php/hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            //response handler code
            response = xmlHttp.responseText.split("~");
            for (var i = 0; i < response.length; i++) {
                htmlCode += '<a href="./images/gallery_images/' + response[i] + '"data-fancybox data-caption="My 3D model render" >';
                htmlCode += '<img class="card-img-top img-thumbnail" src="./images/gallery_images/' + response[i] + '"/>';
                htmlCode += '</a>';
            }
            $("#gallery").html(htmlCode);
        }
    };
}