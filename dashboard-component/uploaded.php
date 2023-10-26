<!-- Output the HTML video element for each video URL -->
<video width="320" height="240" controls>
    <source src="<?php echo "videos/" . $video_url; ?>" type="video/mp4">
    <source src="<?php echo "videos/" . $video_url; ?>" type="video/webm">
    <source src="<?php echo "videos/" . $video_url; ?>" type="video/ogg">
    Your browser does not support the video tag.
</video>