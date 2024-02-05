<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МОУ "Краснопольская" СОШ</title>
</head>
<body>
    <?php require("php/header.php"); ?>
    <section>
        <h1 class='title'>События</h1>
        <div class="events">
            <?php 
                require("php/conn.php");
                $sql = "SELECT * FROM Events";
                foreach($conn->query($sql) as $row):?>
                <div class="event-item">
                    <img src="<?php echo $row['image']; ?>" alt="">
                    <div>
                        <h2><?php echo $row['title']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>