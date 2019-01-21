function process() {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("underInput").innerHTML = this.responseText;
    }
};
xmlhttp.open("POST" ,"data-entry.php", true);
xmlhttp.send();
}