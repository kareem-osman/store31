<html>
     <?php
    // session_start();
    // if(isset($_SESSION['user']) && $_SESSION['user'])
    // {
    //     header('Location: index.php');
    // }
    ?> 
    <head>


    </head>
    <body>
        Login Form
        <form action="checklogin.php" method="POST">
            <label for="">email </label>
            <input type="email" name="user_email" ><br>
            <label for="">password </label>
            <input type="password" name="user_pass" ><br>
            <input type="submit">
        </form>
        <?php
            // if(isset($_SESSION['error']) && $_SESSION['error']==1)
            // {
            //     echo "<h1>Invalid cardentials</h1>";
            // }
        ?>
        <br>
        <a href="register.html">Sign in Naw</a>

    </body>
</html>