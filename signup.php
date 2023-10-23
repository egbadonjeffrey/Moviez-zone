<?php

require("./include/header.php");

?>

<div class="flex flex-col md:flex-row" style="height: auto;">
    <div class="bg-gray-400 flex flex-col justify-between flex-1 p-10">
        <h1 class="text-2xl">Welcome</h1>

        <img src="" class="align-center justify-center" alt="big logo">

        <h4>Already a member <a href="signin.php" class="underline pl-1">Login here.</a> </h4>
    </div>

    <div class="flex-1 p-10">
        <h1 class="text-2xl">Login Page</h1>

        <span>
            <?php echo $error ?>
        </span>

        <form action="./utils/process_signup.php" method="post" class="flex gap-4 flex-col mt-5" novalidate>
            <div class="username-container flex flex-col gap-7">
                <label for="username">Username</label>
                <input type="username" id="username" name="username"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Username" required>
            </div>

            <div class="email-container flex flex-col gap-7">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Email" required>
            </div>

            <div class="password-container flex flex-col gap-7 ">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Password" required>
            </div>

            <div class="password-container flex flex-col gap-7 ">
                <label for="repeat-password">Repeat Password</label>
                <input type="password" id="repeat-password" name="repeat-password"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Repeat Password" required>
            </div>

            <button type="submit"
                class="w-50 p-3 bg-black text-white hover:bg-gray-500 transition duration-300 ease-in-out mt-5">Register</button>
        </form>
    </div>
</div>



<?php

require("./include/footer.php");


?>