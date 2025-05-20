<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signIn"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($email == "admin@gmail.com" && $password == "admin123   ") {
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-300 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto">
        <div class="bg-white shadow-lg rounded-xl p-8" id="signup" style="display:none;">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>
            <form method="post" action="register.php">
                <div class="mb-4 relative">
                    <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required class="pl-10 p-2 w-full border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-transparent ">
                </div>
                <div class="mb-4 relative">
                    <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required class="pl-10 p-2 w-full border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-transparent ">
                </div>
                <div class="mb-4 relative">
                    <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required class="pl-10 p-2 w-full border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-transparent ">
                </div>
                <div class="mb-4 relative">
                    <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required class="pl-10 p-2 w-full border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-transparent ">
                </div>
                <p class="text-red-500 text-sm mb-4"><?php echo isset($error) ? $error : ""; ?></p>
                <input type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300" value="Sign Up" name="signUp">
            </form>
            <p class="text-center my-4">----------or----------</p>
            <div class="flex justify-center space-x-6">
                <i class="fab fa-google text-2xl"></i>
                <i class="fab fa-facebook text-2xl"></i>
            </div>
            <div class="text-center mt-6 flex justify-center">
                <p>Already Have Account ?</p>
                <button id="signInButton" class="text-blue-500 hover:underline ml-2">Sign In</button>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-8 mt-8" id="signIn">
            <h1 class="text-2xl font-bold mb-6 text-center">Sign In</h1>
            <form method="post" action="register.php">
                <div class="mb-4 relative">
                    <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required class="pl-10 p-2 w-full border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-transparent ">
                </div>
                <div class="mb-4 relative">
                    <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required class="pl-10 p-2 w-full border-b-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-transparent ">
                </div>
                <p class="text-red-500 text-sm mb-4"><?php echo isset($error) ? $error : ""; ?></p>
                <p class="text-right mb-4">
                    <a href="#" class="text-blue-500 hover:underline">Recover Password</a>
                </p>
                <input type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300" value="Sign In" name="signIn">
            </form>
            <p class="text-center my-4">----------or----------</p>
            <div class="flex justify-center space-x-6">
                <i class="fab fa-google text-2xl"></i>
                <i class="fab fa-facebook text-2xl"></i>
            </div>
            <div class="text-center mt-6 flex justify-center">
                <p>Don't have account yet?</p>
                <button id="signUpButton" class="text-blue-500 hover:underline ml-2">Sign Up</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

