<div class='schedules'>
    <?php for($i = 1; $i < 12; $i++):?>
        <div class='schedule' id="schedule_<?php echo $i;?>">
            <?php
                require("../php/conn.php");    
                session_start();
                $sql_days = "SELECT * FROM Days";
                $days = $conn->query($sql_days); 
            ?>
            <form action="../php/change_schedule.php" method="post" class="form_schedule">
                
                <input type="hidden" name="goup_id" value="<?php echo $i;?>">
                
            <div class='editing_schedule'>
            <?php foreach ($days as $day):?>
                <table>

                    <input type="hidden" name="day[]" value='<?php echo $day['id']; ?>'>

                    <caption><?php echo $day['name']; ?></caption>
                    <thead>
                        <td>Время</td>
                        <td>Предмет</td>
                        <td></td>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT *, Courses.name as course_name, Courses.id as cours_id FROM Shedules
                        INNER JOIN Days ON Shedules.day_id = Days.id
                        INNER JOIN Courses ON Shedules.course_id = Courses.id
                        INNER JOIN Groupss ON Shedules.group_id = Groupss.id WHERE Days.id = ".$day['id']."
                        AND Groupss.id = $i";

                        $courses = $conn->query($sql);

                        foreach ($courses as $row):?>
                            <tr>
                                <td contenteditable="true">
                                    <select name="time[<?php echo $day['id']; ?>][]">
                                        <option value="<?php echo $row['schedule_time']; ?>"><?php echo $row['schedule_time']; ?></option>
                                        <option value="8:30">8:30</option>
                                        <option value="9:20">9:20</option>
                                        <option value="10:10">10:10</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:40">11:40</option>
                                        <option value="12:30">12:30</option>
                                    </select>
                                </td>
                                <td contenteditable="true">
                                    <select name="course[<?php echo $day['id']; ?>][]">
                                        <option value="<?php echo $row['cours_id'] ?>"><?php echo $row['course_name']; ?></option>
                                        <?php foreach($conn->query("SELECT * FROM Courses WHERE name != '".$row['course_name']."'") as $cours): ?>
                                            <option value="<?php echo $cours['id'] ?>"><?php echo $cours['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class="delete-row">
                                    <button type="button" class="delete-button">Удалить</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if(mysqli_num_rows($courses) == 0): ?>
                            <tr>
                                <td contenteditable="true">
                                    <select name="time[<?php echo $day['id']; ?>][]">
                                        <option value=""></option>
                                        <option value="8:30">8:30</option>
                                        <option value="9:20">9:20</option>
                                        <option value="10:10">10:10</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:40">11:40</option>
                                        <option value="12:30">12:30</option>
                                    </select>
                                </td>
                                <td contenteditable="true">
                                    <select name="course[<?php echo $day['id']; ?>][]">
                                        <option value=""></option>
                                        <?php foreach($conn->query("SELECT * FROM Courses WHERE name != '".$row['course_name']."'") as $cours): ?>
                                            <option value="<?php echo $cours['id'] ?>"><?php echo $cours['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class="delete-row">
                                    <button type="button" class="delete-button">Удалить</button>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <button type="button" class='add-row'>Добавить</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            <?php endforeach; ?>
            </div>
            <input type="submit" value="Изменить">
            </form>
        </div>
    <?php endfor;?>
    
</div>


<script src="../js/shedules.js"></script>