	
	<script src="<?php echo $level.JS?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo $level.JS?>bootstrap.min.js"></script>
	<script src="<?php echo $level.JS?>chart.min.js"></script>
	<script src="<?php echo $level.JS?>chart-data.js"></script>
	<script src="<?php echo $level.JS?>easypiechart.js"></script>
	<script src="<?php echo $level.JS?>easypiechart-data.js"></script>
	<script src="<?php echo $level.JS?>bootstrap-datepicker.js"></script>
	<script src="<?php echo $level.JS?>custom.js"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
		};
	</script>
	<script>
        $(window).load(function(){
            $('#menu li').click(function(){
                $('#menu li.active').removeClass('active');
                $(this).addClass('active');
            });
        });
	</script>
	<script>
		$("#hideShow").hide();
		$("#hide").hide();
		$("#hidsho").click(function(){
			$("#hideShow").toggle();
			$("#show").toggle();
			$("#hide").toggle();
		});
</script>