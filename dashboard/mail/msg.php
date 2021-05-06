<?php
//Success and Danger Messages functions

		function successMsg($msg){
			echo '<div class="alert alert-success">'.$msg.'</div>';
		}
		function dangerMsg($msg){
			echo '<div class="alert alert-danger">'.$msg.'</div>';
		}
		function alertMsg($msg){
			echo '<div class="alert alert-warning">'.$msg.'</div>';
		}

?>
