<?php
$id = $_GET['id'];
$id2 = $_GET['id2'];
include "header.php";
?>

<div align=center>
        <!-- Begin Page Content -->
        <div class="container-fluid">

<div class="card shadow w-50 bg-gradient-dark">
                <div class="card-header py-3 bg-secondary">
                  <h1 class="m-0 font-weight-bold text-light">DELETE VIOLATION</h1>
                </div>
                
                <div class="card-body">
                  <h5 style="color: white;">Are you sure you want to delete this violation?</h5>
           <br>
                <i><a href="violation_delete_proc.php?id=<?= $id?>&id2=<?= $id2?>" class="btn btn-success btn-icon-split btn-md">
                <span class="icon text-white-50">
	<i class="fas fa-check"></i>
		</span>
		<span class="text">
			Continue
		</span>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="violation_view.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
        <span class="icon text-white-50">
	<i class="fas fa-times"></i>
</span>
<span class="text">
    CANCEL
</span>
            </a>
          
            </div>

              </div>

