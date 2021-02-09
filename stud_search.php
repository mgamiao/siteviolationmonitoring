<?php

include "header.php";
include "perfect_function.php";

?>

<div align=center>

    <?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY ADDED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==2){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY EDITED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==3){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY DELETED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    ?>

<br>

<br><br>


    <div class="card w-100 bg-gradient-dark">
                <div class="card-header py-3 bg-secondary">
                <h1 class="m-0 font-weight-bold text-light">STUDENTS</h1>
                </div>
                <div class="card-body">
                <form method="post" action="stud_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                    <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary text-light" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>

                <a href="stud_manage.php" class="btn btn-secondary btn-icon-split" style="float: right; margin-left: 1%;">
                    <span class="icon text-dark-50">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </span>
                    <span class="text">
                        Return to Student List
                    </span>
                </a>

                <a href="stud_add.php" class="btn btn-success btn-icon-split" style="float: right; margin-left: 1%;">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">
                        NEW STUDENT
                    </span>
                </a>

                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead style="text-align:center; color:white;" class="bg-secondary">
        <tr>
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <td>Email</td>
            <td>Contact</td>
            <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

        </tr>
        </thead>

        <tfoot style="text-align:center; color:white;" class="bg-secondary">
        <tr>
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <td>Email</td>
            <td>Contact</td>
            <?php if($_SESSION['access']=="DEAN"){ ?>
            <td>Option</td>
            <?php } ?>

        </tr>
        </tfoot>

        <tbody>

    <?php
        $table_name="students";
        $search=$_POST['search'];
        echo "<div class='text-light' style='float:left;'><i>Results of <b>"
                ."'".$_POST['search']."'"
                ."</b>.</i><br><br></div>";
        $user_data=search_stud($table_name, $search);

        foreach ($user_data as $key => $row) {
            $id=$row['id'];
            $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $program=$row['program'];
            $year_level=$row['year_level'];
                if ($year_level == 1){
                    $year_level = "1";
                } elseif ($year_level == 2){
                    $year_level = "2";
                } elseif ($year_level == 3){
                    $year_level = "3";
                } elseif ($year_level == 4){
                    $year_level = "4";
                } else {
                    $year_level = "5";
                }
            $section=$row['section'];
            $email=$row['email'];
            $contact=$row['contact'];

    ?>
    

    <tr style="text-align:center; color:white;">
        <!-- <td><?= $id ?></td> -->
        <td><?= $name ?></td>
        <td><?= $program ?></td>
        <td><?= $year_level ?></td>
        <td><?= $section ?></td>
        <td><?= $email ?></td>
        <td><?= $contact ?></td>

        <?php if($_SESSION['access']=="DEAN"){ ?>
            
            <td>
            &nbsp;&nbsp;
            <a href="stud_edit.php?id=<?= $id?>" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    EDIT
                </span>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="stud_delete.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="far fa-trash-alt"></i>
        </span>
        <span class="text">
            DELETE
        </span>
                </a>
                </a>
            </td>
    
            <?php } ?>
    </tr>


        <?php   }   ?>
    </tbody>
</table>
</div>
</div>
</div>

