<?php

require("include/header.php");


?>


<div>
    <h1>All Movies Available</h1>


    <div class="movies-container min-h-[50vh]  mx-auto p-2">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <!-- Image Cards Go Here -->
            <div class="bg-white w-auto h-auto rounded shadow-md">
                <img src="./img/project-1.jpg" alt="Image 1" class="w-full h-[200px] object-cover">
                <div class="p-2">
                    <h3 class="text-lg font-semibold">Image 1</h3>
                    <p class="text-gray-600">Description for Image 1.</p>
                </div>
            </div>
            <div class="bg-white rounded shadow-md">
                <img src="./img/project-2.webp" alt="Image 2" class="w-full h-[200px]  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Image 2</h3>
                    <p class="text-gray-600">Description for Image 2.</p>
                </div>
            </div>
            <div class="bg-white rounded shadow-md">
                <img src="./img/project-3.jpg" alt="Image 3" class="w-full  h-[200px]  object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Image 3</h3>
                    <p class="text-gray-600">Description for Image 3.</p>
                </div>
            </div>
            <div class="bg-white rounded shadow-md">
                <img src="./img/project-4.jpg" alt="Image 4" class="w-full  h-[200px] object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">Image 4</h3>
                    <p class="text-gray-600">Description for Image 4.</p>
                </div>
            </div>
        </div>
    </div>


</div>




<?php

require("include/footer.php");


?>