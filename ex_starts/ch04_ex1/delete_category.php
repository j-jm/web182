<?php
require_once('database.php');
// get category ID
//$category_id = 9;
 $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);


// delete category from the database
if ($category_id != false) {
	$query = 'DELETE FROM categories WHERE categoryID = :category_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':category_id', $category_id);
	#$category = $statement->fetch();
	$success = $statement->execute();
	$statement->closeCursor();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Category&nbsp;'<?php echo $category_id; ?>'&nbsp;was successfully deleted.</h1>
		<p><a href="category_list.php">View Category List</a></p>
    </main>

<footer>
	<p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>

</body>
</html>