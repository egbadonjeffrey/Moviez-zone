<?php

include("utils/process_get_data.php");


$currentRoute = $_SERVER['REQUEST_URI'];

echo $currentRoute;



?>

<div class="w-[50%]">
    <form action="utils/process_upload.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-3">
        <input type="text" name="video_name" id="video_name" placeholder="Enter the name of the video"
            class="border-black border-b-[1.5px] outline-none">
        <input type="file" name="file" id="file">
        <button name="submit" type="submit" class="bg-blue-700 hover:bg-blue-500 text-white p-2 w-40 ">Upload</button>
    </form>

</div>

<!-- // Check if there are any video records -->
<div class="flex flex-row flex-wrap gap-4">


    <!-- Movies Page -->


    <?php
    if (mysqli_num_rows($user_uploaded_results) > 0) {
        while ($row = mysqli_fetch_assoc($user_uploaded_results)) {
            $video_url = $row['video_url'];
            $video_title = $row['video_name'];
            $video_id = $row['id']; ?>




            <div class="flex-shrink-0 lg:w-1/4"
                style="display: flex; width: 300px; height: 300px; flex-direction: column; border: 2px; background-color: gray; ">
                <video style="min-width: 300px; height: 200px;" data-video-id=" <?php echo $video_id ?>" controls>
                    <source src="videos/<?php echo $video_url ?>" type="video/mp4">
                    <source src="videos/<?php echo $video_url ?>" type="video/webm">
                    <source src="videos/<?php echo $video_url ?>" type="video/avi">
                    <source src="videos/<?php echo $video_url ?>" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <p class="" style="color: black; font-size: 1rem; font-weight: 600; padding-top: 1rem; text-align: center;">
                    <?php echo $video_title ?>
                </p>
            </div>


        <?php }
        // Close the row
    } else {
        echo 'No video to output';
    }

    ?>





</div>