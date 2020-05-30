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
    
    * {
        margin: 0;
        padding: 0;
    }


    .single_product {
        padding-top: 66px;
        padding-bottom: 140px;
        background-color: #e5e5e5;
        margin-top: 0px;
        padding: 17px
    }

    .product_name {
        font-size: 20px;
        font-weight: 400;
        margin-top: 0px
    }

    .badge {
        display: inline-block;
        padding: 0.50em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem
    }

    .product-rating {
        margin-top: 10px
    }

    .rating-review {
        color: #5b5b5b
    }

    .product_price {
        display: inline-block;
        font-size: 30px;
        font-weight: 500;
        margin-top: 9px;
        clear: left
    }


    .singleline {
        margin-top: 1rem;
        margin-bottom: .40rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }



    body {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #FFFFFF;
        color: #000000
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .single_product {
        padding-top: 16px;
        padding-bottom: 140px
    }

    .image_selected {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: calc(100% + 15px);
        height: 525px;
        transform: translateX(-15px);
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 15px
    }

    .image_selected img {
        max-width: 100%
    }

    .product_rating {
        margin-top: 7px
    }

    .product_rating i {
        margin-right: 4px
    }

    .product_rating i::before {
        font-size: 13px
    }
    
    </style>

</head>
    <body>
    <h1 class="text-center font-weight-bold text-danger my-2">Rate The Product</h1>
<a href="<?php echo base_url('login/logout'); ?>" style="position : fixed; top:5px; right:5px;" class="btn btn-success">Logout</a>
        <div class="super_container">
            <div class="single_product">
                <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                    <div class="row">
                        <div class="col-lg-4 order-lg-2 order-1">
                            <div class="image_selected"><img src="<?php echo $product->product_Image; ?>" alt=""></div>
                        </div>
                        <div class="col-lg-6 order-3">
                            <div class="product_description">
                                <div class="product_name"><?php echo $product->product_name; ?></div>
                                <div class="product-rating"><span class="badge badge-success"> <?php echo round($rating->rate,1); ?> Star</span> <span class="rating-review"><?php echo $rating->num; ?> Ratings</span></div>
                                <div> <span class="product_price">₹ <?php echo $product->price; ?></span></div>
                                
                                <hr class="singleline">
                                <div>
                                    <?php
                                        echo $product->description;
                                    ?>
                                </div>
                            </div>

                            <?php
                                if($check == 0 ):
                            ?>
                                <hr class="singleline">
                                <div class="user-rating">
                                    <h4>Rate this Product:</h4>
                                    <form method="get" action="<?php echo base_url('Product/rate');?>">
                                        <select class="form-control col-6 d-inline" name="rating">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button class="btn btn-primary" type="submit">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                                <?php endif; ?>

                                <div>
                                    <a class="btn btn-outline-danger my-3" href="<?php echo base_url('products');?>">Go back</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>