<?php
require('database.php');

$newCategory = filter_input(INPUT_POST, 'newCategory');

$query = 'insert into categories (categoryName) values (:newCategory)';
$statement = $db->prepare($query);
$statement->bindValue(':newCategory', $newCategory);
$statement->execute();
$statement->closeCursor();
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
        <h1>New category&nbsp;'<?php echo $newCategory; ?>'&nbsp;was successfully added.</h1>
		<p><a href="category_list.php">View Category List</a></p>
    </main>

<footer>
	<p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>

</body>
</html>