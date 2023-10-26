<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("./connection_db/connection.php");
require("./include/header.php");


// Start session
session_start();


// If user is not logged in, redirect to login page
if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php");
}


// Get the user from database
if (isset($_SESSION["user_id"])) {
    $sql = "SELECT * FROM users_data WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $username = $user["username"];

            echo "Your username is: " . $username;
        }
    } else {
        echo "Failed";
    }
}


$sql = "SELECT * FROM videos_data ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql);







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




                <!-- OUTPUT CONTENT -->

                <?php
                $page = $_GET['page'];

                // You can define content for each page
                if ($page === 'page1') {
                    echo '<div class="movies-container min-h-[50vh] mx-auto p-2">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  gap-4">
                        <!-- Image Cards Go Here -->
                        <div class="bg-white h-[400px] rounded shadow-md">
                            <img src="./img/project-1.jpg" alt="Image 1" class="w-full h-[250px] object-cover">
                            <div class="p-2">
                                <h3 class="text-lg font-semibold">Image 1</h3>
                                <p class="text-gray-600">Description for Image 1.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-md">
                            <img src="./img/project-2.webp" alt="Image 2" class="w-full h-[250px]  object-cover">
                            <div class="p-2">
                                <h3 class="text-lg font-semibold">Image 2</h3>
                                <p class="text-gray-600">Description for Image 2.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-md">
                            <img src="./img/project-3.jpg" alt="Image 3" class="w-full  h-[250px]  object-cover">
                            <div class="p-2">
                                <h3 class="text-lg font-semibold">Image 3</h3>
                                <p class="text-gray-600">Description for Image 3.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-md">
                            <img src="./img/project-4.jpg" alt="Image 4" class="w-full  h-[250px] object-cover">
                            <div class="p-2">
                                <h3 class="text-lg font-semibold">Image 4</h3>
                                <p class="text-gray-600">Description for Image 4.</p>
                            </div>
                        </div>
                    </div>
                </div>';
                } elseif ($page === 'page2') {
                    echo '<div>
                        Friends would be shown here if you have any ;)
                        </div>';
                } elseif ($page === 'page3') {
                    echo '<div class="movies-container  mx-auto p-2">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <!-- Image Cards Go Here -->
                        <div class="bg-white h-[450px] rounded shadow-md">
                            <img src="./img/project-5.jpeg" alt="Image 1" class="w-full h-[300px] object-cover">
                            <div class="p-2">
                                <h3 class="text-lg font-semibold">Image 1</h3>
                                <p class="text-gray-600">Description for Image 1.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-md">
                            <img src="./img/project-6.jpg" alt="Image 2" class="w-full h-[300px]  object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Image 2</h3>
                                <p class="text-gray-600">Description for Image 2.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-md">
                            <img src="./img/project-7.jpeg" alt="Image 3" class="w-full  h-[300px]  object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Image 3</h3>
                                <p class="text-gray-600">Description for Image 3.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-md">
                            <img src="./img/project-8.webp" alt="Image 4" class="w-full  h-[300px] object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">Image 4</h3>
                                <p class="text-gray-600">Description for Image 4.</p>
                            </div>
                        </div>
                    </div>
                </div>';
                } elseif ($page === 'page4') {
                    echo '<div>
                    <form action="utils/process_upload.php" method="post" enctype="multipart/form-data"
                        class="flex flex-row items-center">
                        <input type="file" name="file" id="file">
                        <button name="submit" type="submit" class="bg-blue-700 hover:bg-blue-500 text-white p-2 w-40 ">Upload</button>
                    </form>
                
                
    
                </div>
                ';

                    ?>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  gap-4">
                        <!-- <div class="flex flex-row"> -->

                        <?php
                        // Check if there are any video records
                    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $video_url = $row['video_url'];

                                // Output each video in a grid column
                                echo '
                                <video width="1000" height="500" controls>
                                    <source src="videos/' . $video_url . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>';

                            }
                            // Close the row
                        } else {
                            echo 'No video to output';
                        }


                    // echo $page;
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