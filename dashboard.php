<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("./connection_db/connection.php");
require("./include/header.php");
include("./dashboard-component/uploaded.php");


?>





<div class="" style="">


    <div class="flex gap-5  flex-col lg:flex-row justify-between p-4">
        <div class="flex flex-col gap-5">
            <h1 class="text-3xl">User Dashboard Page</h1>
            <ul id="menu" class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-1 gap-3 text-[#1E1916] text-md py-4 ">
                <li> <a href="dashboard.php?page=page1">Movies</a> </li>
                <li> <a href="dashboard.php?page=page2">Friends</a> </li>
                <li> <a href="dashboard.php?page=page3">Downloaded</a> </li>
                <li> <a href="dashboard.php?page=page4">Uploaded</a> </li>
            </ul>
        </div>
        <div class="flex flex-col gap-5 flex-1">
            <div class="flex flex-row justify-between pt-2">

                <div class="search-container w-[50%] flex flex-col ">
                    <!-- <label for="search">Search for a Movie</label> -->
                    <input type="text"
                        class="outline-none text-md border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black"
                        placeholder="Search for a Movie" required>
                </div>
                <div class="flex flex-col">
                    <div class="about-user flex  gap-2 flex-row items-center">
                        <img src="./img/project-2.webp" alt="user-photo" class="rounded-full h-[40px] w-[40px]">


                        <div class="nav-item dropdown">
                            <span class="dropdown-toggle cursor-pointer" data-bs-toggle="dropdown">
                                Hello
                                <?php echo htmlspecialchars($user["username"]) ?? "Ben" ?>
                            </span>
                            <div class="dropdown-menu rounded-0 shadow-sm border-0 m-0">
                                <a href="#" class="dropdown-item">Settings</a>
                                <a href="./utils/process_logout.php" class="dropdown-item">Log-out</a>
                            </div>
                        </div>

                        <span class="text-md">

                        </span>
                    </div>

                </div>
            </div>

            <div id="content">



                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  gap-4">
                    <!-- OUTPUT CONTENT -->

                    <?php
                    $page = $_GET['page'];


                    // You can define content for each page
                    if ($page === 'page1') {




                        // Check if there are any video records
                    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $video_url = $row['video_url'];

                                // Output each video in a grid column
                                echo '
                            <video width="1000" height="500" controls>
                                <source src="videos/' . $video_url . '" type="video/mp4">
                                <source src="videos/' . $video_url . '" type="video/webm">
                                <source src="videos/' . $video_url . '" type="video/avi">
                                <source src="videos/' . $video_url . '" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>';

                            }
                            // Close the row
                        } else {
                            echo 'No video to output';
                        }


                        // echo $page;
                    

                    } elseif ($page === 'page2') {
                        echo '<div class="w-full">
                        Friends would be shown here if you have any ;)
                        </div>';
                    } elseif ($page === 'page3') {

                        // Check if there are any video records
                    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $video_url = $row['video_url'];

                                // Output each video in a grid column
                                echo '
                                <video width="1000" height="500" controls>
                                    <source src="videos/' . $video_url . '" type="video/mp4">
                                    <source src="videos/' . $video_url . '" type="video/webm">
                                    <source src="videos/' . $video_url . '" type="video/avi">
                                    <source src="videos/' . $video_url . '" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>';

                            }
                            // Close the row
                        } else {
                            echo 'No video to output';
                        }


                    } elseif ($page === 'page4') {
                        echo '<div>
                    <form action="utils/process_upload.php" method="post" enctype="multipart/form-data"
                        class="flex flex-row items-center">
                        <input type="file" name="file" id="file">
                        <button name="submit" type="submit" class="bg-blue-700 hover:bg-blue-500 text-white p-2 w-40 ">Upload</button>
                    </form>

                    
                
                
    
                </div>
                ';



                        // Check if there are any video records
                    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($user_uploaded_results)) {
                                $video_url = $row['video_url'];

                                // Output each video in a grid column
                                echo '
                        <video width="1000" height="500" controls>
                            <source src="videos/' . $video_url . '" type="video/mp4">
                            <source src="videos/' . $video_url . '" type="video/webm">
                            <source src="videos/' . $video_url . '" type="video/avi">
                            <source src="videos/' . $video_url . '" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>';

                            }
                            // Close the row
                        } else {
                            echo 'No video to output';
                        }

                    }
                    ?>

                </div>
            </div>



        </div>
    </div>

</div>



<?php

require("./include/footer.php");


mysqli_close($mysqli);
?>