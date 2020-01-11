<?php
include 'header.php';
?>
<div class="container">
            <h1 class="text-center">Enter Distance</h1>
            <div class="row">
            <div class="col-lg-12"> 
            <?php echo form_open('Crore/distentry');
?> 
<div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Station" name="stat"></div>
                        
            <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Distance" name="kmm"></div>
                        
            <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
<?php
echo form_close();
include 'footer.php';
?>