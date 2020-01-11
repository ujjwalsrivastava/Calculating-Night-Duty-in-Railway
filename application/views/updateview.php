<?php
include 'header.php';
?>
<div class="container">
    <h1>Update Password</h1>
    <hr>
<?php echo form_open('Signup/sign_up');

?>   <div class="form-group">
    <input type="text" placeholder="Enter User Id" name="user_id"></div>
    <div class="form-group">
    <input type="password" placeholder="Enter Password" name="psw" ></div>
    <div class="form-group">
    <input type="password" placeholder="Confirm Password" name="cpsw"></div>
    
      <button type="submit" >Create</button>
  
<?php echo form_close(); ?>
</div>
<?php
include 'footer.php';
?>