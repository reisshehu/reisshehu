
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>

    <form method="post">
        Username:
        <input type="text" name="Username">
        <br><br>

        Password:
        <input type="password" name="Password">
        <br><br>

        <input type="submit" value="Log in">
        <input type="reset" value="Cancel">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['Username'] ?? '';
        $password = $_POST['Password'] ?? '';

        if (empty($username)) {
            echo '<script>alert("Username is empty!");</script>';
        } 
        elseif (empty($password)) {
            echo '<script>alert("Password is empty!");</script>';
        } 
        elseif ($username != 'reis') {
            echo '<script>alert("Username is incorrect!");</script>';
        } 
        elseif ($password != 'shehu') {
            echo '<script>alert("Password is incorrect!");</script>';
        } 
        else {
            echo '<script>alert("Welcome!");</script>';
            // echo "<script>window.location.href = 'admin.php';</script>";
        }

    }
    ?>

</body>
</html>

