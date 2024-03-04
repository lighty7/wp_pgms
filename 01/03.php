<!DOCTYPE html>
<html>
<head> 
<style>
.moveable {
    position: absolute;
}
</style>
<script type="text/javascript">
var x = 10;
var y = 10;
var dest_x = 500;
var dest_y = 500;
var interval = 10;

function moveImage() {
    if (x < dest_x) x = x + interval;
    if (y < dest_y) y = y + interval;

    document.getElementById("Tiger").style.top = y + "px";
    document.getElementById("Tiger").style.left = x + "px";

    if (x < dest_x || y < dest_y) {
        window.setTimeout(moveImage, 50);
    }
}
</script>
</head>
<body onload="moveImage()">
<div id="Tiger" class="moveable">
    <img src="Tiger.jpeg" alt="Please link to a valid image">
</div> 
</body> 
</html>

