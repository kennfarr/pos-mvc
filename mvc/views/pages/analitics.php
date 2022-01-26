<?php include("./mvc/views/partials/theme.php"); ?> 
<div class="container-fluid p-0">
	<div class="row m-0">
		<div class="p-2 bg2" style="height: 100vh;width: 320px;">
			<p class="ml-1 font-weight-bold cl" style="font-size: 130%">MANAGE</p>


			<div class="row m-0">
				<?php include("./mvc/views/partials/home-menu-account.php"); ?> 
				<?php include("./mvc/views/partials/home-menu-item.php"); ?>
			</div>
		</div>

		<div class="p-0 bg1" style="height: 100vh;width: calc(100% - 320px)">
			<div class="p-3">
				<p class="float-left cl font-weight-bold mb-0" style="font-size: 130%">Checkout</p>
				<a href="../../Home" style="text-decoration: none;color: black">
					<div id="back-button" class="btn bg-white float-right">Back</div>
				</a>
				<div style="clear: both;"></div>
			</div>
			<div class="dropdown text-center">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Choose Time
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="../../Analitics/Index/day">One day ago</a>
					<a class="dropdown-item" href="../../Analitics/Index/mounth">Month</a>
					<a class="dropdown-item" href="../../Analitics/Index/all">All</a>
				</div>
			</div>
			<div style="height: calc(100vh - 120px);overflow-y: auto;">
				
				<?php

				while($row = mysqli_fetch_array($data["GetAnalitics"])){
					echo '<div class="px-2" style="width: 800px;margin: auto"><div class="btn bg2 cl">
					'.$row["created_at"].'
					</div>
					<table class="table bg2 cl">
					'.$row["content"].'
					</table></div>';
				}
				?>

				


				
			</div>

		</div>
	</div>
</div>