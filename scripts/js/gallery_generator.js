var xmlHttp = new XMLHttpRequest();
var numberOfColumns = 2;
var htmlCode = "";
var response;
$(document).ready(function () {
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
            document.getElementById("gallery").innerHTML = htmlCode;
        }
    };
});

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