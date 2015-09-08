<!DOCTYPE html>
<html>
<body>

	<h1>Objects - Introduce MySelf</h1>

	<p id="demo"></p>

	<script>
		var me = {
			title:		"Mr.",
			name: 		"Guillermo",
			lastName: 	"CruXes",
			job: 		"IT Manager",
			introduce: 	function() { return "Hi I'm " + me.title + " " + me.name + " " + me.lastName; }
		}		

		document.getElementById("demo").innerHTML = me.introduce();

	</script>


</body>
</html>