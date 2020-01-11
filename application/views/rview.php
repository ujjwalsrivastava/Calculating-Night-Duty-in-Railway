<?php
include 'header.php';
?>
<div class="container">
<h1 class="text-center">View Record</h1>
<div class="row">
<div class="col-lg-12">
<?php 
echo validation_errors();
echo form_open('Crore/report');
?>
<div class="form-group">
<input type="text" class="form-control date" name="dfrom" placeholder="From" data-provide="datepicker" data-date-format="yyyy-mm-dd">
</div>
<div class="form-group">
<input type="text" class="form-control date" name="dto" placeholder="To" data-provide="datepicker" data-date-format="yyyy-mm-dd">
</div> 
<button type="submit" class="btn btn-lg btn-primary">Report</button>
<?php echo 
form_close();
if(isset($all)){
?>
<table class="table table-responsive table-striped">
    <thead>
        <tr>
        <th>Train No<br/>Date</th>
        <th>From<br/>To</th>
        <th>Dept<br/>Arrival</th>
        <th>Object of Journey</th>
        <th>Kms</th>
        <th>Remarks</th>
        <th>Night Duty</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($all as $mk):?>
    <tr>
    <td><?php 
    echo $mk->train_no;echo "<br/>";
    echo $mk->date;
    ?></td>
    <td>
    <?php echo $mk->from_f; echo "<br/>";
    echo $mk->to_t;
    ?>
    </td>
    <td>
    <?php echo $mk->dep; echo "<br/>";
    echo $mk->arrival;?>
    </td>
    <td>
    <?php
    echo $mk->object;
    ?>
    </td>
    <td>
    <?php 
    echo $mk->km;
    ?>
    </td>
    <td>
    <?php 
    echo $mk->remark;
    ?>
    </td>
    </tr>
    <?php 
    endforeach;
    ?>
    </tbody>
</table>
    <?php
    $all==0;
}
    
include 'footer.php';
?>
