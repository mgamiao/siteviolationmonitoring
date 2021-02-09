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

<div class="card w-100 bg-gradient-dark" style="border:none;">
            <div class="card-header py-3 bg-secondary" style="border:none;">
              <h1 class="m-0 font-weight-bold text-light">SANCTIONS</h1>
            </div>
            <div class="card-body">
            <form method="post" action="sanc_search.php">
                    <div class="input-group mb-3 w-25" style="float: left;">
                    <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary text-light" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>

                <a href="sanc_manage.php" class="btn btn-secondary btn-icon-split" style="float: right; margin-left: 1%;">
                    <span class="icon text-dark-50">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </span>
                    <span class="text">
                        Return to Sanction List
                    </span>
                </a>

                <a href="sanc_add.php" class="btn btn-success btn-icon-split" style="float: right; margin-left: 1%;">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">
                        New Sanction
                    </span>
                </a>

              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
    
    <thead style="text-align:center; color:white;" class="bg-secondary">
    <tr>
        <td>Sanction Name</td>
        <td>Quantity</td>
        <td>Option</td>

    </tr>
    </thead>

    <tfoot style="text-align:center; color:white;" class="bg-secondary">
    <tr>
        <td>Sanction Name</td>
        <td>Quantity</td>
        <td>Option</td>


    </tr>
    </tfoot>

    <tbody style="text-align:center; color:white;">

    <?php
        $table_name="sanctions";
        $search=$_POST['search'];
        echo "<div style='float:left; color:white;'><i>Results of <b>"
                ."'".$_POST['search']."'"
                ."</b>.</i><br><br></div>";
        $user_data=search_sanc($table_name, $search);

        foreach ($user_data as $key => $row) {
            $sanction_id=$row['sanction_id'];
            $sanction_name=$row['sanction_name'];
            $quantity=$row['quantity'];

    ?>
    

    <tr>
        <!-- <td><?= $sanction_id ?></td> -->
        <td><?= $sanction_name ?></td>
        <td><?= $quantity ?></td>


        
            
            <td>
            &nbsp;&nbsp;
            </a>
            <a href="sanc_edit.php?id=<?= $sanction_id?>" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    EDIT
                </span>
            </a>
        &nbsp;&nbsp;&nbsp;

        <?php if($_SESSION['access']=="DEAN"){ ?>

        <a href="sanc_delete.php?id=<?= $sanction_id?>" class="btn btn-danger btn-icon-split btn-md">
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

