	<div class="content">
					<div class="reclame-content">
						<?php 
						while ( $i <= 3) {
							$i++;
						echo
							'<li>
								<div class="reclame-block">
								
								</div>
							</li>';
							}
						?>
					</div>
					<?php echo '<div class="blog-content">'?>
					<?php
						if(!isset($_COOKIE['business-content-state-data']) && !isset($_COOKIE['business-content-state'])){
							include('business-content/business-content.php');
						}
						elseif (isset($_COOKIE['business-content-state'])) {
							include('business-content/business.php');
						}
						elseif (isset($_COOKIE['business-content-state-data'])) {
							include('business-content/business-data.php');
						}
					?>
					<?php echo '</div>';?>	
					<div style="float: right;width: 10%;height: 500px;"></div>
	</div>