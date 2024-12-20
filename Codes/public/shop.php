<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT.DS.'header.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <h1>
                All Products Market
            </h1>
        </header>
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Products</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
       
       <?php get_products_in_shop_page()?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

        <!-- Footer -->
        
  <?php include(TEMPLATE_FRONT.DS.'footer.php'); ?>