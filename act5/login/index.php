<form action="login.php" method="POST">

    <div>
        <label>User</label>
        <input type="text" name="username" required>
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>

    <button type="submit">Login</button>

</form>

<?php
                
if ($_GET['invalid'] === 'true') echo 'Login incorrecto';

?>
