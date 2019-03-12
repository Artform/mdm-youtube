<?php
require "setup.php";
require 'vendor/autoload.php';
$youtube = new Madcoda\Youtube\Youtube(array('key' => $api_key));
// $video = $youtube->getVideoInfo('rie-hPVJ7Sw');
$playlist= $youtube->getPlaylistItemsByPlaylistId("PLUI6AIhAqStg8uWextKyeFCppjamZICsi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>YouTube Example</title>
</head>
<body>
	<h1>Name</h1>
	<h2>Videos</h2>
	<ul>
		<?php // Output all the videos
		foreach ($playlist as $video) {
			$thumb = $video->snippet->thumbnails->medium;
			$title = $video->snippet->title;
			$url = "https://www.youtube.com/embed/" . $video->contentDetails->videoId;
			?>
			<li>
				<a href="<?=$url?>">
				<img src="<?=$thumb->url?>" height="<?=$thumb->height?>" alt="<?=$title?>">
				</a>
			</li>

		<?php } ?>
	</ul>

	<hr>
	<pre><?=print_r($playlist)?></pre>

	<!-- <pre>
		<h1><?=$video->snippet->title?></h1>
		<?=$video->player->embedHtml?>
		<img src="<?=$video->snippet->thumbnails->standard->url?>" alt="Video Thumb">
		<hr>
		<?=print_r($video);?>
	</pre> -->
</body>
</html>
