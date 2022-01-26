<style type="text/css">
	<?php
	foreach ($data["GetTheme"] as $value) {
		echo '.bg1{
			background: '.$value['color1'].';
		}
		.bg2{
			background: '.$value['color2'].';
		}
		.bg3{
			background: '.$value['color3'].';
		}
		.cl{
			color: '.$value['color4'].';
		}';
	}
	?>
</style>