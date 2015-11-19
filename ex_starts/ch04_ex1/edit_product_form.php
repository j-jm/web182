<?php
// Get the product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);

// get the categories selections
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

// get name of current category
$query = 'SELECT *
          FROM categories
          WHERE categoryID = :category_id';
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->execute();
$category = $statement->fetch();
$categoryName = $category['categoryName'];
$statement->closeCursor();

// other way to do above



// get product data
$query = 'SELECT *
          FROM products
          WHERE productID = :product_id';
$statement = $db->prepare($query);
$statement->bindValue(':product_id', $product_id);
$statement->execute();
$product = $statement->fetch();
$productID = $product['productID'];
$productCode = $product['productCode'];
$productName = $product['productName'];
$listPrice = $product['listPrice'];
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post"
              id="product_form">
    <!--        <label>P</label>
            <input type="text" name="product_id" value=<?php# echo $productID; ?>><br>  -->
        <label>Category:</label>
    <!-- text box version 
            <input type="hidden" name="product_id" value=<?php echo $productID; ?>><br>         
            <input type="text" name="category_id" value=<?php echo $categoryName; ?>><br>
    -->

    <!-- selection box version -->

 
         <select name="category_id" value = 'category_id'>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>"
                    <?php if ($category_id == $category['categoryID'])
                        {
                         ?> selected ='selected'
                          <?php
                        }
                           ?>>   
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
        </select><br> 

        <label>Code:</label>
            <input type="text" maxlength=10 name="code" value=<?php echo $productCode; ?> size=10><br>

        <label>Name:</label>
            <input type="text" maxlength=255 name="name" value=<?php echo $productName; ?> size=50><br>

        <label>List Price:</label>
            <input type="text" name="price" value=<?php echo $listPrice; ?> size=10><br>

        <label>&nbsp;</label>
            <input type="submit" value="Update Product"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>