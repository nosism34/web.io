<?php 
require_once('..\\kresources\\config.php');
include(TEMPLATE_FRONT . DS . 'header.php');
?>

<!-- Page Content -->
<div class="container">

    <!-- Checkout Message -->
    <div class="row">
        <h4 class="text-center bg-danger">
            <?php display_message(); ?>
        </h4>
        <h1 class="text-center">Checkout</h1>
    </div>

    <!-- Checkout Form -->
    <div class="row">
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-md-8">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="tendai2@business.com">
            <input type="hidden" name="currency_code" value="CNY">
            <input type="hidden" name="upload" value="1">

            <!-- Products Table -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Sub-total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php cart(); ?>
                </tbody>
            </table>

            <!-- Payment Button -->
            <div id="paypal-payment-button" class="text-center">
                <script src="https://www.paypal.com/sdk/js?client-id=AWxwoQjx9AGZIjNMQNynlagNl6-WT5AKQhb6ZwJXEF830-k9cusmnkC-50pH_H_RccKLyQLE0rA7nMGi&disable-funding=credit,card"></script>
                <?php echo show_paypal(); ?>
            </div>
        </form>

        <!-- Cart Totals -->
        <div class="col-md-4">
            <h2>Cart Totals</h2>
            <table class="table table-bordered">
                <tr class="cart-subtotal">
                    <th>Items:</th>
                    <td><span class="amount">
                        <?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>
                    </span></td>
                </tr>
                <tr class="shipping">
                    <th>Shipping and Handling:</th>
                    <td>Free Shipping</td>
                </tr>
                <tr class="order-total">
                    <th>Order Total:</th>
                    <td><strong><span class="amount">
                        &#165;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
                    </span></strong></td>
                </tr>
            </table>
        </div>
    </div>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>
