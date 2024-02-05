<div class="add_teacher_block">
<h1 class='title'>Добавить учителя</h1>
<form action="../php/add_teacher.php" method="POST" class='add_form'>
    <input type="text" name="first_name" placeholder="Имя">
    <input type="text" name="last_name" placeholder="Фамилия">
    <input type="text" name="login" placeholder="Логин">
    <label for="cours">Курс</label>
    <select name="cours">
        <?php 
            require("../php/conn.php");
            $sql = "SELECT * FROM Courses";
            $result = mysqli_query($conn, $sql);
            foreach ($result as $row) { 
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
            }
        ?>
    </select>
    <input type="submit" value="Добавить">
</form>
</div>
