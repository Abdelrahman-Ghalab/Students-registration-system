<html>
<head></head>
<body>
  <div id="target1" style="display: none;">
  	<?php
  		$output = "2";
  		echo htmlspecialchars($output);
  	?>
  </div>

  <div id="target2" style="display: none;">
  <?php
  	$output = "4";
  	echo htmlspecialchars($output);

  ?>

  </div>
  <div id="target3" style="display: none;">
  <?php
  	$output = "5";
  	echo htmlspecialchars($output);
  ?>
  </div>

  <div id="target4" style="display: none;">
  <?php
  	$output = "6";
  	echo htmlspecialchars($output);
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
</body>
<html>
