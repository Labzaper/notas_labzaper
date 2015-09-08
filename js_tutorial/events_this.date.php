<!DOCTYPE html>
<html>
<body>

<button onclick="this.innerHTML = Date()">The time is?</button>

<p>Ejemplo de dos eventos en un objeto</p> 

<p id="demo" onmouseover="mouseOverMe()" onmouseout="mouseOutMe()">Mouse over me</p>

<script>
	var x = document.getElementById("demo");

	function mouseOverMe() {
		x.style.color = "red";
		x.style.fontSize = "22px";
	}

	function mouseOutMe() {
		//var x = document.getElementById("demo");
		x.style.color = "black";
		x.style.fontSize = "16px";
	}


</script>

</body>
</html>