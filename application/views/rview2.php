<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<?php 
if(!is_null($dat['dfrom'])){?>
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
    foreach($new as $mk):?>
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
}?> 
</body>
</html>

