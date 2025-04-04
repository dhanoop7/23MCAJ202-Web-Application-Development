<?php
// 🟡 Initialize variables
$name = $email = $username = $password = "";
$nameErr = $emailErr = $usernameErr = $passwordErr = "";
$successMsg = "";

// 🔵 Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Validate Username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }

    // Validate Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } elseif (strlen($_POST["password"]) < 6) {
        $passwordErr = "Password must be at least 6 characters";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }

    // If no errors, show success message
    if (empty($nameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr)) {
        $successMsg = "✅ Registration successful!";
        // You can add DB logic here
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 🔵 Background Animation (Orbies Style) -->
<div class="animated-bg"></div>

<!-- 🌟 Navigation Bar -->
<div class="navbar">
    <h1>MySite</h1>
    <div>
        <a href="#">Home</a>
        <a href="#">Register</a>
        <a href="#">Login</a>
    </div>
</div>

<!-- 📝 Registration Form -->
<div class="form-container">
    <form method="post" action="">

        <!-- ✅ Success Message -->
        <?php if (!empty($successMsg)) : ?>
            <p class="success"><?php echo $successMsg; ?></p>
        <?php endif; ?>

        <!-- 🔴 Name -->
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <!-- 🔴 Email -->
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <!-- 🔴 Username -->
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <span class="error"><?php echo $usernameErr; ?></span>

        <!-- 🔴 Password -->
        <label>Password:</label>
        <input type="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span>

        <!-- 🔘 Submit -->
        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
