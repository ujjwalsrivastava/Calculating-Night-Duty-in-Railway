<!DOCTYPE html>
<html lang="en">

<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                        crossorigin="anonymous">
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
                        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'
                        crossorigin='anonymous'>
            <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-datepicker.css');?>">
            <title>Login</title>
            
            </head>
<body>
<?php
if($this->session->has_userdata('id')){?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Railway Table</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                                <a class="nav-link" href="<?php echo base_url('Crore/record'); ?>">Home
                                                            <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('Crore/distentry');?>">Enter Distance</a>
                                    </li>
                                    <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('Crore/report');?>">Record view</a>
                                    </li>
                                    <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('Signup/sign_up');?>">Signup</a>
                                    </li>
                                    <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url('Crore/logout');?>">Logout</a>
                                    </li>

                        </ul>
            </div>
</nav>
<?php }?>