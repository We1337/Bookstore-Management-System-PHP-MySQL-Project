<?php
    include("includes/header.php");
    include("../includes/connection.php");
	include("functions/process_index.php");
?>

		<script>
			window.onload = function () {
			
				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					theme: "light2",
					title: {
						text: "Database information"
					},
					axisY: {
						suffix: ":",
						scaleBreaks: {
							autoCalculate: true
						}
					},
					data: [{
						type: "column",
						yValueFormatString: "#,##0\"\"",
						indexLabel: "{y}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
					}]
				});
				chart.render();
			}
		</script>


		<div class="px-md-4">
			<div class="" id="chartContainer" style="height: 470px; width: 100%;"></div>
		</div>

		<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    
	</body>
</html>