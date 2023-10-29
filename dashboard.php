<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("./connection_db/connection.php");
require("./include/header.php");
include("./utils/process_get_data.php");


?>





<div class="" style="">


    <div class="flex gap-5  flex-col lg:flex-row justify-between min-h-[70vh] p-4">
        <div class="flex flex-col gap-5">
            <h1 class="text-3xl">User Dashboard Page</h1>
            <ul id="menu" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-1 gap-3 text-[#1E1916] text-md py-4 ">
                <li> <a href="dashboard.php?page=page1">Movies</a> </li>
                <li> <a href="dashboard.php?page=page2">Uploaded</a> </li>
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
                    ?>




                    <?php require('dashboard-component/movies.php'); ?>



                    <?php
                } elseif ($page === 'page2') {
                    ?>

                    <?php require("dashboard-component/uploaded.php"); ?>
                <?php } ?>

                <!-- </div> -->
            </div>



        </div>
    </div>

</div>



<?php

require("./include/footer.php");


mysqli_close($mysqli);
?>