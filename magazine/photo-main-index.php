<?php 	
	if (function_exists('get_field')){
		$logo_header = get_field('logo_header' , 'option');
		$banner = get_field('image_banner' ,  'option');
	}

$attachment_id = $logo_header['id']; // attachment ID for logo

$image_attributes = wp_get_attachment_image_src( $attachment_id , 'full' , 1 ); // returns an array
$image_attributes_large = wp_get_attachment_image_src( $attachment_id , 'large' , 1 ); // returns an array
$image_attributes_medium = wp_get_attachment_image_src( $attachment_id , 'medium' , 1 ); // returns an array
$image_attributes_thumb = wp_get_attachment_image_src( $attachment_id , 'thumb' , 1 ); // returns an array
if( $image_attributes ) {
?>
<div class="banner-logo" style="margin-top:2.8125rem;float:left; background-repeat:no-repeat;width:497px;height:159px;" data-interchange="[<?php echo $image_attributes_medium[0]; ?>, (default)], [<?php echo $image_attributes_large[0]; ?>, (medium)], [<?php echo $image_attributes[0]; ?>, (large)]">
</div>
<?php } ?>

<?php 
$attachment_id_2 = $banner['id']; // attachment ID for background image

$image_attributes_2 = wp_get_attachment_image_src( $attachment_id_2 , 'full' , 1 ); // returns an array
$image_attributes_large_2 = wp_get_attachment_image_src( $attachment_id_2 , 'large' , 1 ); // returns an array
$image_attributes_medium_2 = wp_get_attachment_image_src( $attachment_id_2 , 'medium' , 1 ); // returns an array
$image_attributes_thumb_2 = wp_get_attachment_image_src( $attachment_id_2 , 'thumb' , 1 ); // returns an array
if( $image_attributes_2 ) {
?>
<div class="banner" data-interchange="[<?php echo $image_attributes_large_2[0]; ?>, (medium)], [<?php echo $image_attributes_2[0]; ?>, (large)]">
</div>
<?php } ?>
