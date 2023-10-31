<?php

// Get Videos from DB


$sql = "SELECT * FROM videos_data WHERE username = '$username'";
$user_uploaded_results = mysqli_query($mysqli, $sql);


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
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  gap-4">


    <!-- Movies Page -->

    <section class="my_grid">


        <?php
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                $video_url = $row['video_url'];
                $video_title = $row['video_name'];
                $video_id = $row['id']; ?>

                <?php // echo $video_id;
                
                        echo ' 
    <div class="" style="display: flex; min-width: 300px; height: 300px; flex-direction: column; border: 2px; background-color: gray; ">
        <video style="min-width: 300px; height: 200px;" data-video-id=" ' . $video_id . ' " controls>
            <source src="videos/' . $video_url . '" type="video/mp4">
            <source src="videos/' . $video_url . '" type="video/webm">
            <source src="videos/' . $video_url . '" type="video/avi">
            <source src="videos/' . $video_url . '" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <p class="" style="color: black; font-size: 1.5rem; font-weight: 600; padding-top: 1rem; text-align: center;">
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