<?php

include("include/header.php");


?>

<div class="flex flex-col md:flex-row" style="height: auto;">
    <div class="bg-gray-400 flex flex-col justify-between flex-1 p-10">
        <h1 class="text-2xl">Welcome</h1>

        <h1 class="text-9xl text-orange-300">My Movies zone</h1>

        <h4>Already a member <a href="signin.php" class="underline pl-1">Login here.</a> </h4>
    </div>

    <div class="flex-1 p-10">
        <h1 class="text-2xl">Register</h1>

        <!-- Error Span -->
        <?php if (isset($_SESSION['errors']['server'])) { ?>
            <span class="text-red-700">
                <?php echo $_SESSION['errors']['server']; ?>
            </span>
        <?php } ?>

        <?php if (isset($_SESSION['errors']['duplicate'])) { ?>
            <span class="text-red-700">
                <?php echo $_SESSION['errors']['duplicate']; ?>
            </span>
        <?php } ?>

        <!-- Form Start -->
        <form action="utils/process_signup.php" method="post" class="flex gap-[4rem] flex-col mt-5" novalidate>

            <div class="username-container flex flex-col gap-3">
                <label for="username">Username</label>
                <input type="username" id="username" name="username"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Username" required>

                <!-- username error -->

                <?php if (isset($_SESSION['errors']['username'])) { ?>
                    <span class="text-red-700">
                        <?php echo $_SESSION['errors']['username']; ?>
                    </span>
                <?php } ?>
            </div>

            <div class="email-container flex flex-col gap-3">

                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Email" required>

                <!-- email error -->
                <?php if (isset($_SESSION['errors']['email'])) { ?>
                    <span class="text-red-700">
                        <?php echo $_SESSION['errors']['email']; ?>
                    </span>
                <?php } ?>


            </div>

            <div class="password-container flex flex-col gap-3 ">

                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Password" required>

                <!-- password error -->
                <?php if (isset($_SESSION['errors']['password'])) { ?>
                    <span class="text-red-700">
                        <?php echo $_SESSION['errors']['password']; ?>
                    </span>
                <?php } ?>
            </div>

            <div class="repeat-password-container flex flex-col gap-3 ">

                <label for="repeat_password">Repeat Password</label>
                <input type="password" id="repeat_password" name="repeat_password"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Repeat Password" required>

                <!-- repeat_password error -->
                <?php if (isset($_SESSION['errors']['repeat_password'])) { ?>
                    <span class="text-red-700">
                        <?php echo $_SESSION['errors']['repeat_password']; ?>
                    </span>
                <?php } ?>
            </div>

            <button type="submit" name="submit"
                class="w-50 p-3 bg-black text-white hover:bg-gray-500 transition duration-300 ease-in-out mt-5">Register</button>
        </form>


        <?php

        unset($_SESSION['errors']);

        ?>


    </div>
</div>



<?php

require("./include/footer.php");


?>