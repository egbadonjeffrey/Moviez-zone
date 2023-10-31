<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("utils/process_get_data.php");

?>



<div class="text-center text-red-700 py-2">
    <?php
    if (isset($_SESSION["username_mismatch"])) {
        echo $_SESSION["username_mismatch"];
        unset($_SESSION["username_mismatch"]);
    }
    ?>
</div>


<!-- // Check if there are any video records -->
<div class="flex flex-row flex-wrap gap-4">


    <!-- Movies Page -->


    <?php



    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
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

<script>
    // Get all delete buttons by their class name
    var deleteButtons = document.getElementsByClassName("delete_button");

    // Loop through each delete button and add a click event listener
    for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener("click", function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the data-video-id attribute from the clicked button's parent element
            var videoId = this.closest(".video_container").getAttribute("data-video-id");

            console.log(videoId);

            // Send it to a PHP script
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "utils/process_delete.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log("Response from PHP: " + xhr.responseText);
                }
            };
            xhr.send("videoId=" + videoId);
        });
    }



</script>