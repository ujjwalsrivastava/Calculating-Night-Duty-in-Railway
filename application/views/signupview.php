<?php
include 'header.php';
?>
<div class="container">
            <h1 class="text-center">Create new account</h1>

            <?php echo form_open('Signup/sign_up');

?> 
<div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter User Id" name="user_id"></div>
                        <?php echo '<div class="text-danger">'.form_error('user_id').'</div>'; ?>
            <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Password" name="psw"></div>
                        <?php echo '<div class="text-danger">'.form_error('psw').'</div>'; ?>
            <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="cpsw"></div>
                        <?php echo '<div class="text-danger">'.form_error('cpsw').'</div>'; ?>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Create</button>

            <?php echo form_close(); ?>
</div>
<div class="container mt-5">
            <div class="row">
                        <div class="col-lg-12">
                                    <table class="table">
                                                <thead class="thead-dark">
                                                            <tr>
                                                                        <th>User_id</th>

                                                                        <th>Action</th>
                                                            </tr>
                                                </thead>
                                                <tbody>
                                                            <?php
         if(isset($data)) {
        foreach ($data as $row): ?>
                                                            <tr>
                                                                        <td><?php echo $row->user_id;?></td>

                                                                        </td>
                                                                        <td><a href="<?php echo base_url('Signup/delete/').$row->id;?>">
                                                                                                <button
                                                                                                            class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i> Delete
                                                                                                            account</button></a>
                                                                        </td>
                                                            </tr>
                                                            <?Php endforeach; }  ?>
                                                </tbody>
                                                <?php
include 'footer.php';
?>