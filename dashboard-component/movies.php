<!-- // Check if there are any video records -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  gap-4">

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $video_url = $row['video_url'];
            $video_title = $row['video_name'];

            echo '
            <div class="flex flex-col gap-3 border-2 bg-gray-300">
                <video style="width: 1500px; min-height: 150px;" controls>
                    <source src="videos/' . $video_url . '" type="video/mp4">
                    <source src="videos/' . $video_url . '" type="video/webm">
                    <source src="videos/' . $video_url . '" type="video/avi">
                    <source src="videos/' . $video_url . '" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <p class="font-bold text-black text-center"> ' . $video_title . '   
             </div>
                ';


        }
        // Close the row
    } else {
        echo 'No video to output';
    }

    ?>
</div>