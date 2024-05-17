 <?php
session_start();
include("db.php");

  
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $conformpassword = $_POST['password'];


   if(!empty($email) && !empty($password) && !is_numeric($email))
   {
    $query = "insert into form (email, password , conformpassword) values ('$email', '$password', '$conformpassword')";

    mysqli_query($conn, $query);

    echo "<script type='text/javascript'> alert('successfully Register')</script>";
   }
   else{
    echo "<script type='text/javascript'> alert('plese enter some valid information')</script>";
   }
  }
?> 


<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="https://cdn.tailwindcss.com"></script>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-size: 16px;
      }
    </style>
	</head>
	<body class="bg-gray-300 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-lg w-96">
        <h1 class="text-3xl font-semibold mb-4">Sign Up</h1>
        <form method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="mail" class="w-full px-3 py-2 border border-black rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-black rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2"> conform Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-black rounded focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-black hover:bg-blue-600 text-white font-semibold px-8 py-2 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-700">Sign In</button>
                <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
            </div>
        </form>
    </div>
</body>
</html>