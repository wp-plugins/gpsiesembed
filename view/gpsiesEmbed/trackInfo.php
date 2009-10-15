<div class="gpsies-wrapper">
<?php
define('GPS_SHOW_MAPONLY',		'maponly');
define('GPS_SHOW_FULL',			'full');
define('GPS_SHOW_SUMMARY',		'summary');
define('GPS_SHOW_DETAILS',		'details');
foreach ($gpsies->tracks->xpath("track") as $track) {
	if($showmode!=GPS_SHOW_MAPONLY){
		?><pre><?php	
		echo '<strong>'.__('Title','gpsiesembed').':</strong> '.$track->title.'<br />';
		echo '<strong>'.__('Track lenght','gpsiesembed').':</strong> '.round((real)$track->trackLengthM/1000,2).'Km. <br />';
		echo '<strong>'.__('Altitude range','gpsiesembed').':</strong> '.$track->altitudeDifferenceM.'m. ('.
			'<strong>'.__('Min height','gpsiesembed').':</strong> '.$track->altitudeMinHeightM.'m. '.
			'<strong>'.__('Max height','gpsiesembed').':</strong> '.$track->altitudeMaxHeightM.'m.)<br />';
		echo '<strong>'.__('Total climb','gpsiesembed').':</strong> '.$track->totalAscentM.'m. '.
		      '<strong>'.__('Total descent','gpsiesembed').':</strong> '.$track->totalDescentM.' m.<br />';
		echo '<strong>'.__('Page link','gpsiesembed').':</strong> <a href="'.$track->externalLink.'">'.$track->externalLink.' </a><br />';
		if($showmode!=GPS_SHOW_FULL){
			echo '<a rel="lightbox" href="http://www.gpsies.com/mapOnly.do?fileId='.$track->fileId.'" title="GPSies - Tracks for Vagabonds">' .
				'<img src="http://www.gpsies.com/images/linkus.png" border="0" alt="Show Track" /> </a><br/>';
		}
		if($showmode!=GPS_SHOW_SUMMARY){
			echo '<strong>'.__('Description','gpsiesembed').':</strong> '.$track->description.'<br />';
		}
		?>
		</pre><br />
		<?php
		if($showmode==GPS_SHOW_FULL){		
		?>		
			<div class="iframe-wrapper">
			<iframe src="http://www.gpsies.com/mapOnly.do?fileId=<?php echo $track->fileId ?>" frameborder="0" style="height:400px;width:600px;">Please upgrade your browser</iframe>
			</div>
		<?php
		}
	}
	else {
		 ?>		
			<div class="iframe-wrapper">
			<iframe src="http://www.gpsies.com/mapOnly.do?fileId=<?php echo $track->fileId ?>" frameborder="0" style="height:400px;width:600px;">Please upgrade your browser</iframe>
			</div>
		<?php	
	}
}
?>

</div>