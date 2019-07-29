
	<?php require ("./config/config.php");
?>


						<?php echo "".$online." / ".$max."";?>
						<?php
							if($HEADS == "3D") {
							
							
							} else {
							
							
							}
							
							if(empty($query['error'])) {
							
								if($playerlist != "") {
							
									$shown = "0";
							
									foreach ($playerlist as $player) {
							
										$shown++;
							
										if($shown < $show_max + 1 || $show_max == "unlimited") {
							
									?>
						<a data-placement="top" rel="tooltip" style="display: inline-block;" title="<?php echo $player;?>">
						<? 
							if($player == "MikeDeveloper") { 
							
								$player = "TraseR_"; 
							
							}
							
							?>
						<?php 	}
							}
							
							if($shown > $show_max && $show_max != "unlimited") {
							
								echo '<div class="span8" style="font-size:16px; margin-left: 0px;">';
							
								echo "and " . (count($playerlist) - $show_max) . " więcej ...";
							
								echo '</div>';
							
							}
							
							} else {
							
							
							}
							
							} else {
							
							
							} ?>