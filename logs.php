<?php
// session_start();
include "header.php";
include "perfect_function.php"; 
?>


<br>

    <?php
        $table_name="logs";
        $column="log_id";
        $user_data=get_desc($table_name, $column);

        foreach ($user_data as $key => $row) {
            $log_id=$row['log_id'];
            $username=$row['username'];
            $fullname=$row['fullname'];
            $user_type=$row['user_type'];
            $action=$row['action'];
            $xdate=$row['xdate'];
            $xtime=$row['xtime'];

    ?>
<div class='card mb-4 py-3 border-bottom-success w-50 bg-gradient-dark'>
        <div class='card-body'>
              <span class="m-0 text-light" style="text-align: left;">
        
                <b>LOGS: </b><?= $action.", ".$xdate." ".$xtime ?>
                <br>
                <b>USER: </b><?= $username." - " .$fullname." (".$user_type.")" ?>

              </span>

        </div>
        </div>
        
        <?php   }   ?>

        </div> 

        </div>
        
        <?php include "footer.php"; ?>