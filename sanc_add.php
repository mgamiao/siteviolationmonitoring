<?php include "perfect_function.php";
include "header.php"
?>
<div align=center>
<div class="card mb-4 bg-gradient-dark"  style="width:50%;">
<div class="card-header bg-secondary text-light">
    <h1>ADD NEW SANCTION</h1>
</div>

<form method="post" action="sanc_add_proc.php">

    <input type="text" name="sanction_name" class="form-control form-control-user" autocomplete=off placeholder="Item Name" required style="width:80%; margin-left:5%; margin-top:5%;"> <br>

    <input type="number" name="quantity" class="form-control form-control-user" autocomplete=off placeholder="Quantity" required style="width:80%; margin-left:5%;"> <br>

    <!-- <select name="status" class="form-control" required style="width:80%; margin-left:5%;">
    <option value="">Select Student Status:</option>
    <option value="1">Regular</option>
    <option value="0">Irregular</option>
    </select>
    <br> -->

    <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:5%;">
        <span class="icon text-white-50">
        <i class="fas fa-check"></i>
            </span>
            <span class="text">
                Continue
            </span>
        </button>
    &nbsp;&nbsp;
        <a href="sanc_manage.php" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
        <i class="fas fa-times"></i>
    </span>
    <span class="text">
        CANCEL
    </span>
    </a>
    <br><br><br>

<form>
</div>
