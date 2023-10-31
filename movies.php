<?php

include('connection_db/connection.php');






require("include/header.php");

include("utils/process_get_data.php");
?>





<!-- Movies Page -->

<section class="my_grid mx-auto my-[5rem]" style="margin: 5rem auto;">


    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $video_url = $row['video_url'];
            $video_title = $row['video_name'];
            $video_id = $row['id']; ?>

            <?php // echo $video_id;
            
                    echo ' 
            <div class="flex-shrink-0 lg:w-1/4" style="display: flex; width: 300px; height: 300px; flex-direction: column; border: 2px; background-color: gray; ">
                <video style="min-width: 300px; height: 200px;" data-video-id=" ' . $video_id . ' " controls>
                    <source src="videos/' . $video_url . '" type="video/mp4">
                    <source src="videos/' . $video_url . '" type="video/webm">
                    <source src="videos/' . $video_url . '" type="video/avi">
                    <source src="videos/' . $video_url . '" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <p class="" style="color: black; font-size: 1rem; font-weight: 600; padding-top: 1rem; text-align: center;">
                   ' . $video_title . '
                   </p> 
             </div>
                ';


        }
        // Close the row
    } else {
        echo 'No video to output';
    }

    ?>





</section>








<?php

include('include/footer.php');

?>