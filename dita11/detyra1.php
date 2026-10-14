
<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
</head>

<body>

    <h2>Register Form</h2>

    <form method="post">
        First Name:
        <input type="text" name="FirstName">
        <br><br>

        Last Name:
        <input type="text" name="LastName">
        <br><br>

        Username:
        <input type="text" name="Username">
        <br><br>

        Email:
        <input type="email" name="Email">
        <br><br>

        Password:
        <input type="password" name="Password">
        <br><br>

        Confirm Password:
        <input type="password" name="ConfirmPassword">
        <br><br>

        <input type="submit" value="Register">
        <input type="reset" value="Cancel">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $firstName = $_POST['FirstName'] ?? '';
        $lastName = $_POST['LastName'] ?? '';
        $username = $_POST['Username'] ?? '';
        $email = $_POST['Email'] ?? '';
        $password = $_POST['Password'] ?? '';
        $confirmPassword = $_POST['ConfirmPassword'] ?? '';

        if (empty($firstName)) {
            echo '<script>alert("First Name is empty!");</script>';
        }
        elseif (empty($lastName)) {
            echo '<script>alert("Last Name is empty!");</script>';
        }
        elseif (empty($username)) {
            echo '<script>alert("Username is empty!");</script>';
        }
        elseif (empty($email)) {
            echo '<script>alert("Email is empty!");</script>';
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Email is incorrect!");</script>';
        }
        elseif (empty($password)) {
            echo '<script>alert("Password is empty!");</script>';
        }
        elseif (empty($confirmPassword)) {
            echo '<script>alert("Confirm Password is empty!");</script>';
        }
        elseif ($password != $confirmPassword) {
            echo '<script>alert("Passwords do not match!");</script>';
        }
        else {
            echo '<script>alert("Registration successful!");</script>';
        }

    }
    ?>

</body>
</html>
