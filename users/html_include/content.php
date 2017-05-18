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
						if(!isset($_COOKIE['user-content-state-data']) && !isset($_COOKIE['user-content-state']) && !isset($_COOKIE['user-content-state-push'])){
							include('user-content/user-content.php');
						}
						elseif (isset($_COOKIE['user-content-state'])) {
							include('user-content/user.php');
						}
						elseif (isset($_COOKIE['user-content-state-data'])) {
							include('user-content/user-data.php');
						}
						elseif (isset($_COOKIE['user-content-state-push'])) {
							include('user-content/user-push.php');
						}
					?>
					<?php echo '</div>';?>	
	</div>