<div class='change_schedule_block'>
    <div class='nav_buttons'>
        <?php require("../php/conn.php"); 
        $sql = "SELECT * FROM Groupss";

        foreach($conn->query($sql) as $row):?>
            <button type='button' id='<?php echo $row['id'] ?>' class='select_group'><?php echo $row['name'] ?> класс</button>
        <?php endforeach; ?>
    </div>
        
    <?php require("group_shedule.php"); ?>
</div>