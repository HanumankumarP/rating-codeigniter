<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate the Product</title>

    <link rel="stylesheet" href="<?php echo base_url('public/CSS/bootstrap.css');?>" />


    <script src="<?php echo base_url('public/SCRIPTS/jquery.js');?>"></script>
    <script src="<?php echo base_url('public/SCRIPTS/bootstrap.js');?>"></script>

    <style>
        body{
            background:#f2f2f2;
        }
        label{
            color:#FFFCE4 !important;
            font-size:16px;
        }
    </style>

</head>
<body>

        <h1 class="text-center font-weight-bold text-danger my-2">Rate The Product</h1>

    <main class="col-lg-5 mx-auto my-5 p-5 rounded" style="background:#FAA51A;">
        <h2 class="text-center text-light font-weight-bold">Register Here</h2>
        <form method="post" action="<?php echo base_url('home/register');?>">
        
            <?php

                if(!empty(validation_errors())){
                    print("
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error!</strong>".validation_errors()."
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>"
                );
                    
                }
            ?>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div>

            <div class="">
                <button class="btn btn-primary" type="submit">
                    Register
                </button>
            </div>  
            
            <div class="">
                Already Registered? <a href="<?php echo base_url('login'); ?>">Login Here</a>
            </div>  

        </form>
    </main>
    
</body>
</html>