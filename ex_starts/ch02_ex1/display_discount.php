
<?php
/*
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent  = $_POST['discount_percent'];
$discount_amount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount_amount;
*/
?>

<?php
if (empty($_POST['product_description'])) {
    include 'index.html';
    $error1 = 'Please enter a product description.';
    echo $error1;
    exit;
}
if (empty($_POST['list_price'])) {
    include 'index.html';
    $error2 = 'Please enter a list price.';
    echo $error2;
    exit;
}
if (empty($_POST['discount_percent'])) {
    include 'index.html';
    $error3 = 'Please enter a discount percentage.';
    echo $error3;
    exit;
}
?>


<?php
$product_description = filter_input(INPUT_POST , 'product_description');
$list_price = filter_input(INPUT_POST , 'list_price');
$discount_percent  = filter_input(INPUT_POST , 'discount_percent');
$discount_amount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount_amount;

$list_price_f = number_format($list_price , 2);
$discount_amount_f = number_format($discount_amount , 2);
$discount_price_f = number_format($discount_price , 2);
$tax_rate = .08;
$tax_rate_f = number_format($tax_rate*100,2).'%';
$sales_tax = $tax_rate * $discount_price;
$sales_tax_f = number_format($sales_tax , 2);
#$discount_percent_f = number_format($discount_percent);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Your Purchase:</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo '$'.htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent).'%'; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo '$'.htmlspecialchars($discount_amount_f); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo '$'.htmlspecialchars($discount_price_f); ?></span><br>

        <label>Tax rate:</label>
        <span><?php echo $tax_rate_f; ?></span><br>

        <label>Sales tax:</label>
        <span><?php echo '$'.$sales_tax_f; ?></span><br>
    </main>
</body>
</html>

<?php 
include 'index.html';
?>