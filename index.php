<!DOCTYPE html>
<html>
	<head>
	  <link href="css/bootstrap.css" rel="stylesheet">
	  <link href="css/video-js.css" rel="stylesheet" type="text/css">
	  <link href="css/cinema.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php include 'include/navbar.php';?>
		<a href="https://github.com/TerryTel93/WebsocketCinema"><img style="margin-top:50px;position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
		<br><br><br>
		<div class="row-fluid">
		    <div class="span2 offset1 well" style="min-width:100px;">
		      	<?php include 'include/leftnav.php';?>
		    </div>
		    <div class="span8 well" style="min-width:650px;">
				<b>Oceans and shit</b>
				<hr>
				<video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="264"poster="http://video-js.zencoder.com/oceans-clip.png"data-setup="{}">
			    	    <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
    					<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
    					<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
			    	<track kind="captions" src="subtitles/captions.vtt" srclang="en" label="English" />
				</video>
		    </div>
		</div>
		<script src="js/video.js"></script>
	  	<script src="js/jquery-1.10.1.min.js"></script>
	  	<script src="js/bootstrap.js"></script>
	    <script src="js/websocket.js"></script>



		
		
		<script >
		var myPlayer = _V_("example_video_1");
		videojs.options.flash.swf = "video-js.swf";
		</script>
	</body>
</html>
