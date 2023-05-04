var xmlHttp = new XMLHttpRequest();
var numberOfColumns = 2;
var htmlCode = "";
var response;
$(document).ready(function () {
    loadGallery();
    loadModelsInfo();
    loadControls();
});

function switchModel(sender) {
    console.log("switchModel: " + sender);
    $.getJSON('./index.php?loadModelInfo/' + sender, function (jsonObj) {
        console.log(jsonObj);
        jsonObj.forEach(function (row) {
            $("#modelDescTitle").html('<h2>' + row['title'] + '<h2>');
            $("#modelDescSubTitle").html('<h3>' + row['subtitle'] + '</h3>');
            $("#modelDescDescription").html('<p>' + row['description'] + '</p>');
        });
    });
}

function loadModelsInfo() {
    $.getJSON('./index.php?loadModelsInfo', function (jsonObj) {
        var modelTabsHTML = "";
        jsonObj.forEach(function (row) {
            modelTabsHTML += '<li id="navCoke" class="nav-item">';
            if (row['Id'] == 1) {
                //
                modelTabsHTML += '<a class="nav-link active" href="javascript:switchModel(\'' + row['name'] + '\')">' + row['name'];
                switchModel(row['name']);
            } else {
                modelTabsHTML += '<a class="nav-link" href="javascript:switchModel(\'' + row['name'] + '\')">' + row['name'];
            }
            modelTabsHTML += '</a></li>';
        });
        $("#modelsTabs").html(modelTabsHTML);
    });
}

function loadControls() {
    $.getJSON('./index.php?loadModelsControls', function (jsonObj) {
        jsonObj.forEach(function (row) {
            var domId = '.' + row['domId'];
            var controlElement = $('#' + row['domId']);
            console.log(domId);
            controlElement.find('#title').html('<h2>' +  row['name'] + '<h2>');
            controlElement.find('#subtitle').html('<p>' +  row['title'] + '<p>');
            controlElement.find('#desc').html('<p>' +  row['description'] + '<p>');
        });
    });
}

function loadGallery() {
    var send = "./scripts/php/hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            //response handler code
            console.log(xmlHttp.responseText);
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