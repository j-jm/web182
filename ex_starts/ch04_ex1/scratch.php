// delete all products in category
if ($category_id != false) {
	$query = 'DELETE FROM products WHERE categoryID = :category_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':category_id', $category_id);
	#$category = $statement->fetch();
	$success = $statement->execute();
	$statement->closeCursor();
}


// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {