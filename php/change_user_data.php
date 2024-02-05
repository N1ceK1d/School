<div class="user-data">
    <?php 
        require("conn.php"); 
        session_start();
    ?>
    <?php
        $user = mysqli_fetch_array($conn->query("SELECT * FROM Users WHERE id = ".$_SESSION['id']));
    ?>
    <form action="../php/change_user.php" method="POST" class='change_user_form'>
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <p>Логин: <?php echo $user['login']; ?></p>
        <div>
        <label>Пароль: </label>
        <input type="text" name="password" value="<?php  echo $user['password']; ?>">
        </div>
        
        <input type="submit" value="Изменить">
    </form>
</div>