<?php if (!defined('THINK_PATH')) exit();?><canvas id="myChart" width="400" height="400"></canvas>
<script src="../../files/Chart.js"></script>
<script>
   var data = {
		labels : [<?php echo $x?>],
		datasets : [
				{
					fillColor : "rgba(220,20,220,0.5)",
					strokeColor : "rgba(220,20,220,1)",
					data : [<?php echo $y?>]
				},
		]
	}
var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);
</script>