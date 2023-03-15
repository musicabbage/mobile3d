var xmlHttp = new XMLHttpRequest();
var numberOfColumns = 2;
var htmlCode = "";
var response;
$(document).ready(function () {
    var send = "../scripts/php/hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            //response handler code
            response = xmlHttp.responseText.split("~");
            // htmlCode += "<tr>";
            for (var i = 0; i < response.length; i++) {
                // htmlCode += '<td id="gallery_cell">';
                // htmlCode += '<a href="images/' + response[i] + '">';
                // htmlCode += '<img src="images/' + response[i] + '" id="image_thumbnail"/>';
                // htmlCode += '</a>';
                // htmlCode += '</td>';
                // if ((i + 1) % numberOfColumns == 0) {
                //     htmlCode += "</tr><tr>";
                // }
                htmlCode += '<a href="assets/images/gallery_images' + response[i] + '">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="./assets/images/' + response[i] + '"/>';
                htmlCode += '</a>';
            }
            // console.log(document.getElementById("gallery_coke"));
            // console.log(document.getElementById("gallery_sprite"));
            // console.log(document.getElementById("gallery_pepper"));
            // htmlCode += "</tr>";
            // document.getElementById("gallery").innerHTML = htmlCode;
            document.getElementById("gallery_coke").innerHTML = htmlCode;
            // document.getElementById("gallery_sprite").innerHTML = htmlCode;
            // document.getElementById("gallery_pepper").innerHTML = htmlCode;
        }
    };
});