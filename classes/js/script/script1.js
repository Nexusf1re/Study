

var btnn = document.getElementById('difer');
var content = document.getElementById("difere");
var span = document.getElementsByClassName("close")[0];

btnn.onclick = function(){
    content.style.display = "block";

}

span.onclick = function(){
    content.style.display = "none";
}
