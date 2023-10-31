<?php


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
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4  gap-4">


</div>