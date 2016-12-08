<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>

<script type="text/javascript">google.load("jquery", "1.3.2");</script>
	<link rel="stylesheet" type="text/css" href="/css/start.css">
</head>
<body>

<div id="target1" style="display: none;">
	<?php
	//	$output = $no[0];
		echo htmlspecialchars($no[0]);
	?>
</div>
/*
<div id="target2" style="display: none;">
<?php
//	$output = $no[1];
	echo htmlspecialchars($no[1]);

?>

</div>
<div id="target3" style="display: none;">
<?php
	//$output = $no[2];
	echo htmlspecialchars($no[2]);
?>
</div>

<div id="target4" style="display: none;">
<?php
//	$output = $no[3];
	echo htmlspecialchars($no[3]);
?>
</div>

	<script>
			window.onload = function hey(){
	    var div1 = document.getElementById("target1");
	    var data1 = div1.textContent;
			var div2 = document.getElementById("target2");
	    var data2 = div2.textContent;
			var div3 = document.getElementById("target3");
	    var data3 = div3.textContent;
			var div4 = document.getElementById("target4");
	    var data4 = div4.textContent;
			document.getElementById("value_1").innerHTML = "remaining slots= "+data1;
			document.getElementById("value_2").innerHTML = "remaining slots= "+data2;
			document.getElementById("value_3").innerHTML = "remaining slots= "+data3;
			document.getElementById("value_4").innerHTML = "remaining slots= "+data4;
	
		};

	</script>
	<div id="body">
		<h1><span>Pick a section!</span></h1>
		<ul class="gallery">

			<li>
				<a class="section" disabled href="1/register">

					<section>
					section 1</br>

					<div id= "value_1">

					</div>
					</section>
				</a>
			</li>
			<li>
				<a href="2/register">
					<section>
					section 2</br>
					<div id= "value_2">

					</div>
					</section>
				</a>
			</li>

			<li>
				<a href="3/register">
					<section>
					section 3</br>
					<div id= "value_3">

					</div>
					</section>
				</a>
			</li>
			<li>
				<a href="4/register">
					<section>
					section 4</br>
					<div id= "value_4">

					</div>
					</section>
				</a>
			</li>

		</ul>
	</div>



</body></html>
