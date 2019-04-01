<?php
require "setup.php";
require 'vendor/autoload.php';
$youtube = new Madcoda\Youtube\Youtube(array('key' => $api_key));
// $video = $youtube->getVideoInfo('rie-hPVJ7Sw');PLUI6AIhAqStg8uWextKyeFCppjamZICsi
$playlist= $youtube->getPlaylistItemsByPlaylistId("PLzjkiYUjXuevVG0fTOX4GCTzbU0ooHQ-O");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <meta name="msapplication-tap-highlight" content="no" />
	<title>YouTube Example</title>
</head>
<body>
        <img src="img/MDM.png" style="width: 40%; padding-left: 20%;">

	<ul style="list-style-type:none;">
		<?php // Output all the videos
		/*foreach ($playlist as $video) {
			$thumb = $video->snippet->thumbnails->medium;
            $title = $video->snippet->title;
			$url = "https://www.youtube.com/embed/" . $video->contentDetails->videoId;
			?>
			<li style="padding-top:1%; padding-bottom:1%; border: 1px solid #FFFF33; border-left:none; border-right:none">
                 <h1 style="float: right;"><?=$video->snippet->title?></h1>
				<a href="<?=$url?>">
				<img src="<?=$thumb->url?>" height="<?=$thumb->height?>" alt="<?=$title?>">
				</a>
			</li>

		<?php } */?>
	</ul>
	<hr>
	<pre><?=print_r($playlist)?></pre>
<?php
    $file = fopen("MDM.json",'w+');
    echo fwrite($file, json_encode($playlist));

    // show a success msg 
    echo "data successfully entered";
    fclose($file);
?>
</body>
</html>
