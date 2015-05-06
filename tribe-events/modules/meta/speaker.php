<h3 class="tribe-events-single-section-title">Speakers</h3>

<?php
$speakers = get_post_meta( get_the_ID(), 'Speakers', false );
if (is_array($speakers)) {
	foreach ($speakers as $speakers_value) {
?>
<div class="media professor">
    <div class="media-body">
        <a href="/speakers/<?php echo $speakers_value; ?>"><?php echo $speakers_value; ?></a>
        <?php 
        // if (stripos($speakers_value, '('))
        // 	$speaker_position = preg_match("/\(([^\]]*)\)/", $speakers_value);

        // 	echo '<span>' . preg_match("/\(([^\]]*)\)/", $speakers_value); . '</span>';
    	?>
    </div>
</div>
<?php
	}
}
?>
<!--/event-speaker-->