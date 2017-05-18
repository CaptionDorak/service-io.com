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
							if(!isset($_COOKIE["TestCookie"]) && !isset($_COOKIE["TestCookieSecond"])) {
								include("content_include/block.php");
					 			//include("content_include/map.php");	
					 		}
					 		elseif (isset($_COOKIE["TestCookie"]) && isset($_COOKIE["TestCookieSecond"])) {
					 			include('content_include/type.php');
					 		}
					?>
					<?php echo '</div>';?>	
	</div>