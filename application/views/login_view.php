<?php
include 'header.php';?>
<div class="container-fluid h-100">
            <div class="row justify-content-center align-items-center h-200 mt-5">
                        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3 shadow-lg bg-white">
                                    <h1 class="text-center pt-5">Login Form</h1>
                                    <?php echo form_open('Login/login_validation');?>

                                    <div class="form-group">
                                                <?php echo '<div class="text-danger">'.form_error('uname').'</div>'; ?>
                                                <input type="text" class="form-control" placeholder="User Name"
                                                            name="uname" value="<?php echo set_value('uname'); ?>">
                                    </div>
                                    <?php 
                                    
    if(isset($login_err))
    {
      echo "<div class='text-danger'>$login_err</div>";
    }
  
  ?>
                                    <div class="form-group">
                                                <?php echo '<div class="text-danger">'.form_error('psw').'</div>'; ?>
                                                <input type="password" class="form-control" placeholder="Password"
                                                            name="psw" value="<?php echo set_value('psw'); ?>">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg mb-4 btn-block" id="submit">Log
                                                in</button>
                                    <?php
echo form_close();?>
          <em>&copy; <strong>Ujjwal Srivastava 2019-2020</strong></em><!--adding copyright-->
                        </div>
            </div>
</div>
<?php
include 'footer.php';?>