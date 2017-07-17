<!DOCTYPE html>
<title>Discover Indonesia | Admin Log in</title>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include "layout/header_rel.php";?>
</head>
<body>
    <?php include "layout/navigation.php";?>
    
    <?php include "layout/sidebar.php";?>
    <div class="main-bar">
    
        <form method="POST" action="input/cek_login.php">
            <h2>Administrator Log in</h2>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Your Username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
                </tr>
            </table>
            <button type="submit">Log In</button>
        </form>
    </div>
    <div style="clear:both;"></div>
    <?php include "layout/footer.php"; ?>
</body>
<html>