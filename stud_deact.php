<?php
$id = $_GET['id'];
include "header.php";
?>

<div align=center>
        <!-- Begin Page Content -->
        <div class="container-fluid">

<div class="card shadow w-50 bg-gradient-dark">
                <div class="card-header py-3 bg-gradient-dark">
                  <h1 class="m-0 font-weight-bold text-light">DEACTIVATE STUDENT</h1>
                </div>
                <br>
                <div class="card-body text-light">
                  <h4> Are you sure you want to deactivate this student record? </h4>
           <br>
           <br>
           
           <form method="post" action="stud_deact_proc.php?id=<?= $id?>">
           <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">
                Continue
            </span>
            </a>
            </button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="stud_manage.php" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
            <span class="text">
                Cancel&nbsp;&nbsp;&nbsp;
            </span>
            </a>
          
            </div>

              </div>

