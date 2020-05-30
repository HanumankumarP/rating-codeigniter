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
            overflow-x:hidden;
        }

        img{
            width:200px!important;
            margin:auto;
        }
    </style>

</head>
<body>
        
<h1 class="text-center font-weight-bold text-danger my-2">Rate The Product</h1>
<a href="<?php echo base_url('login/logout'); ?>" style="position : fixed; top:5px; right:5px;" class="btn btn-success">Logout</a>
        <div class="row">


            <div class="container">
            <div class="row">
            <?php
                foreach($products as $product):
            ?>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 my-2">
                    <div class="card">
                        <img class="card-img" src="<?php echo $product->product_Image; ?>" alt="<?php echo $product->product_name; ?>">
                        <div class="card-img-overlay d-flex justify-content-end">
                        </div>
                        <div class="card-body">
                        <p class="card-text">
                            <?php echo $product->product_name; ?>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">$ <?php echo $product->price; ?></h5></div>
                            <a href="<?php echo base_url('product?id='.$product->id); ?>" style="z-index:100;" class="btn btn-danger mt-3"> Know More</a>
                        </div>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
            ?>
            </div>
            </div>

           
        </div>



</body>
</html>