<?php
// session_start();
include "header.php";
include "perfect_function.php"; 
?>
<div align=center>
<?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
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
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
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
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
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


<div class="card w-100 bg-gradient-dark" style="border:none;">
            <div class="card-header py-3 bg-secondary" style="border:none;">
              <h1 class="m-0 font-weight-bold text-light">MY ACCOUNT</h1>
            </div>
            <div class="card-body">
            <!-- <form method="post" action="account_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                        <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form> -->
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
    
    <thead style="text-align:center; color:white;" class="bg-secondary">
    <tr>
        <td>Username</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Contact</td>
        <td>User Type</td>
        <td>Option</td>

    </tr>
    </thead>

    <tfoot style="text-align:center; color:white;" class="bg-secondary">
    <tr>
        <td>Username</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Contact</td>
        <td>User Type</td>
        <td>Option</td>

    </tr>
    </tfoot>

    <tbody style="text-align:center; color:white;">

    <?php
        $table_name = "accounts";
        $column = "username";
        $get_userData = get_where_custom($table_name, $column, $_SESSION['username']);

        foreach ($get_userData as $key => $row) {
            $acc_id=$row['acc_id'];
            $username=$row['username'];
            $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $contact=$row['contact'];
            $email=$row['email'];
            $user_type=$row['user_type'];
            // if ($user_type==0){
            //     $user_type="GOVERNOR";
            // } elseif ($user_type==1){
            //     $user_type="FACULTY";
            // } elseif ($user_type==2){
            //     $user_type="DEAN";
            // } 

    ?>
    

    <tr>
        <!-- <td><?= $acc_id ?></td> -->
        <td><?= $username ?></td>
        <td><?= $name ?></td>
        <td><?= $email ?></td>
        <td><?= $contact ?></td>
        <td><?= $user_type ?></td>


        <td>
            <a href="my_account_edit.php?id=<?= $acc_id?>" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Edit
                </span>
            </a>
        &nbsp;&nbsp;&nbsp;
        
            </a>
            </a>
        </td>
    </tr>


        <?php   }   ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include "footer.php"; ?>