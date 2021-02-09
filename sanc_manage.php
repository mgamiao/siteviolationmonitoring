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

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==5){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
                    <div class='card-body'>
                    SANCTION SUCCESSFULLY DEACTIVATED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==6){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    ALL SANCTIONS SUCCESSFULLY DEACTIVATED
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
    
    <thead class="bg-secondary" style="text-align:center; color:white;">
    <tr>
        <td>Sanction Name</td>
        <td>Quantity</td>
        <td>Option</td>


    </tr>
    </thead>

    <tfoot class="bg-secondary" style="text-align:center; color:white;">
    <tr>
        <td>Sanction Name</td>
        <td>Quantity</td>
        <td>Option</td>


    </tr>
    </tfoot>

    <tbody style="text-align:center; color:white;">

    <?php
        $table_name="sanctions";
        $column = "status";
        $condition=0;
        $get_userData = get_where_custom($table_name, $column, $condition);

        foreach ($get_userData as $key => $row) {
            $sanction_id=$row['sanction_id'];
            $sanction_name=$row['sanction_name'];
            $quantity=$row['quantity'];

    ?>
    

    <tr>
        <td><?= $sanction_name ?></td>
        <td><?= $quantity ?></td>

        
            
        <td>
        <!-- <a href="sanc_deact.php?id=<?= $sanction_id?>" class="btn btn-secondary btn-icon-split" style="margin-left: 1%;">
                    <span class="icon text-red-50">
                    <i class="fas fa-truck-loading"></i>
                </span>
                <span class="text">
                    ARCHIVE
                </span>
        </a> -->
        &nbsp;&nbsp;
        <a href="sanc_edit.php?id=<?= $sanction_id?>" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Edit
                </span>
            </a>
        &nbsp;&nbsp;&nbsp;

        <?php if($_SESSION['access']=="DEAN"){ ?>

        <a href="sanc_delete.php?id=<?= $sanction_id?>" class="btn btn-danger btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="far fa-trash-alt"></i>
        </span>
        <span class="text">
            Delete
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
</div>
</div>
</div>

<?php include "footer.php"; ?>