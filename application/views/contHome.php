

<div class="container-fluid col-md-8 col-xs-7">
	
	<div class="">
		<h3>Haberler:</h3>
		
		<?php 
		foreach ($news as $new) {
			$id=$new->id;
			$konu=$new->subject;
			$short=$new->short;
			$date=$new->date;
			echo '<div class="newsPost">';
			echo '<h4>'.$konu.'</h4>';
			echo '<p>'.$short.'.. <a href="home/haberoku?id='.$id.'"> Devam..</a></p>';
			echo '<span class="postdate">'.$date.'</span>';
			echo '</div>';

		}




		?>
	</div>
	



</div>