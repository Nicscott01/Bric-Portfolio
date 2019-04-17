<?php

/**
 *		Content Part for Gallery 
 *
 *
 *
 */

?>
<div class="gallery col">
	
	<?php
	
	
	$gallery = get_field( 'gallery' );
	
	//var_dump( $gallery );
	$PhotoGallery = new PhotoGallery( $gallery );
	
	echo $PhotoGallery->buildGallery();
	
	?>
	
</div>