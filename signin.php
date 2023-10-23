<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require("./connection_db/connection.php");

require("./include/header.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $mysqli->real_escape_string($_POST['email_username']);
    $username = $mysqli->real_escape_string($_POST['email_username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users_data WHERE email = '$email' OR username = '$username'";

    $result = $mysqli->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user["password_hash"])) {
                session_start();
                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                echo "User found " . $user['username'];

                header("Location: /moviez-zone/dashboard.php?page=page1");
                exit;
            } else {
                echo "Invalid Password";
            }


        } else {
            echo 'User not found';
        }
    } else {
        echo "Query error: " . $mysqli->error;
    }



}
?>



<div class="flex flex-col md:flex-row" style="height: 60vh;">
    <div class="bg-gray-400 flex flex-col justify-between flex-1 p-10">
        <h1 class="text-2xl">Welcome</h1>

        <img src="" class="align-center justify-center" alt="big logo">

        <h4 class="text-lg"> Not a member yet <a href="signup.php" class="underline pl-1 text-black">Register
                here.</a>
        </h4>

    </div>

    <div class="flex-1 p-10">
        <h1 class="text-2xl">Login Page</h1>

        <form method="post" class="flex gap-5 flex-col mt-5">
            <div class="email-container flex flex-col gap-7">
                <label for="email_username">Email</label>
                <input type="text" name="email_username"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="" required>
            </div>

            <div class="password-container flex flex-col gap-7 ">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="outline-none border-b border-gray-300 focus:border-b-2 focus:border-black hover:border-black py-2"
                    placeholder="Password" required>

            </div>

            <button
                class="w-50 p-3 bg-black text-white hover:bg-gray-500 transition duration-300 ease-in-out">Login</button>

        </form>
    </div>

</div>


<?php

require("./include/footer.php");


?>