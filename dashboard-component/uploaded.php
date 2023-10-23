<div>
    <form action="/utils/process_upload.php" method="post" enctype="multipart/form-data"
        class="flex flex-row items-center">
        <input type="file" name="my_video" id="">
        <button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white p-2 w-40 ">Upload</button>
    </form>
</div>


<?php

$downloadedMovies = ["Extraction 2"];

if (count($downloadedMovies) > 0) {
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
} else {
    echo 'It is empty';
}

?>