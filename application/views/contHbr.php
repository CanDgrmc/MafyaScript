<div class="container col-md-8 col-xs-7">
	<div class="news-wrapper">
		<?php 
		foreach ($new as $hbr) {
			$konu=$hbr->subject;
			$text=$hbr->text;
			$date=$hbr->date;

			echo '<h3 class="redh4">'.$konu.'</h3>';
			echo '<p class="silverp">'.$text.'</p>';
			echo '<span>'.$date.'</span>';
			echo '<br><br><a href="'.base_url().'home" class="orangea">Geri</a>';

		}



		 ?>

	</div>


</div>