<?php
// session_start();
include "header.php";
include "perfect_function.php"; 
unset($_SESSION['committer_id']);
?>

<div align=center>

    <?php
    // if (isset($_SESSION['alert_msg'])){
    //     if ($_SESSION['alert_msg']==1){
    //         echo "
    //             <div class='card mb-4 py-3 border-bottom-success'>
    //                 <div class='card-body'>
    //                 RECORD SUCCESSFULLY ADDED
    //                 </div>
    //             </div>";
    //             unset($_SESSION['alert_msg']);
    //     }
    // }
    
    // if (isset($_SESSION['alert_msg'])){
    //     if ($_SESSION['alert_msg']==2){
    //         echo "
    //             <div class='card mb-4 py-3 border-bottom-success'>
    //                 <div class='card-body'>
    //                 RECORD SUCCESSFULLY EDITED
    //                 </div>
    //             </div>";
    //             unset($_SESSION['alert_msg']);
    //     }
    // }

    // if (isset($_SESSION['alert_msg'])){
    //     if ($_SESSION['alert_msg']==3){
    //         echo "
    //             <div class='card mb-4 py-3 border-bottom-success'>
    //                 <div class='card-body'>
    //                 RECORD SUCCESSFULLY DELETED
    //                 </div>
    //             </div>";
    //             unset($_SESSION['alert_msg']);
    //     }
    // }
    ?>

    <!-- <a href="stud_add.php" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
    </span>
    <span class="text">
        ADD STUDENT
    </span>
    </a>

<br><br> -->
    <div class="card w-100 bg-gradient-dark" style="border:none;"> 
                <div class="card-header py-3 bg-secondary" style="border:none;">
                <h1 class="m-0 font-weight-bold text-light">VIOLATIONS</h1>
                </div>
                <div class="card-body">
                <form method="post" action="violation_active_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                    <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary text-light" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>
                
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
        
        <thead class="bg-secondary" style="text-align: center; color: white;">
        <tr>
            <td>Student ID</td>
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <!-- <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td> -->
            <td>Option</td>

        </tr>
        </thead>

        <tfoot class="bg-secondary" style="text-align: center; color: white;">
        <tr>
            <td>Student ID</td>
            <td>Name</td>
            <td>Program</td>
            <td>Year</td>
            <td>Section</td>
            <!-- <td>Email</td>
            <td>Contact</td>
            <td>Officer</td>
            <td>Gender</td> -->
            <td>Option</td>

        </tr>
        </tfoot>

        <tbody style="text-align: center; color: white;">

    <?php
        $table_name="students";

        $user_data=get($table_name);

        foreach ($user_data as $key => $row) {
            $id=$row['id'];
            $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $program=$row['program'];
                // if ($program==0){
                //     $program="BLIS";
                // } elseif ($program==1){
                //     $program="BSIT";
                // } elseif ($program==2){
                //     $program="BSCE";
                // } elseif ($program==3){
                //     $program="BSCpE";
                // } else {
                //     $program="BSEnSE";
                // }
            $year_level=$row['year_level'];
                if ($year_level==1){
                    $year_level="1";
                } elseif ($year_level==2){
                    $year_level="2";
                } elseif ($year_level==3){
                    $year_level="3";
                } elseif ($year_level==4){
                    $year_level="4";
                } else {
                    $year_level="5";
                }
            $section=$row['section'];
            $email=$row['email'];
            $contact=$row['contact'];


    ?>
    

    <tr>
        <td><?= $id ?></td>
        <td><?= $name ?></td>
        <td><?= $program ?></td>
        <td><?= $year_level ?></td>
        <td><?= $section ?></td>
        <!-- <td><?= $email ?></td>
        <td><?= $contact ?></td> -->

        <td>
                
        <a href="violation_view.php?id=<?= $id?>" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="far fa-eye"></i>
        </span>
        <span class="text">
            View Violations
        </span>
        </a>
        &nbsp;&nbsp;&nbsp;
        <a href="violation_add.php?id=<?= $id?>" class="btn btn-danger btn-icon-split" style="padding-right: -5%;">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">
            New Violation
        </span>
        </a>
            <!-- <a href="stud_edit.php?id=<?= $id?>" class="btn btn-warning btn-circle btn-md">
            <i class="far fa-edit"></i>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="stud_delete.php?id=<?= $id?>" class="btn btn-danger btn-circle btn-md">
            <i class="far fa-trash-alt"></i>
            </a>
            </a> -->
        </td>
    </tr>


        <?php   }   ?>
    </tbody>
</table>

<!-- <?= $id.$_SESSION['committer_id'];?> -->
</div>
</div>
</div>
</div>
</div>
</div>

<?php include "footer.php"; ?>