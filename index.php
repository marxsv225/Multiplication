<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>Table</title>
<link rel="stylesheet" href="css.css">
   
</head>

<body>

	<div class="container">

		<div class="output">
			<div class="lable">
                <h3>Ma table de multiplication</h3>
                <span id="tab"></span>
			</div>
			<div class="box"
				id="box">
				<div id="print">

				</div>
			</div>
		</div>

		<div class="input">
			<div class="center">
                <div class="titre">MULTIPLICATION</div>
				<input type="number"
					id="inputvalue" placeholder="Enter Any Number">
				<button class="btn"
					onclick="multiplication()">Ok</button>

				<button class="btn"
					onclick="clr()">Clear</button>
			</div>
		</div>

	</div>



	<script>
		var print = document.getElementById('print');
        var inputt = document.getElementById('inputvalue');
		function clr() {

			print.innerHTML = " ";
            inputt.innerHTML = " ";
		}



		function multiplication() {
			var input = document.getElementById('inputvalue').value;
           


			if (input <= 0) {
				alert("invalid input");
			}
			else {

				for (i = 1; i <= 10; i++) {
					table = input * i;
					print.innerHTML += "<h2>" + input + " " + "*" + " " + i + " " + "=" + " " + table + "</h2>";
				}
			}
		}


	</script>

</body>
</html>