<?php
    #$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    #$username = 'mgs_user';
    #$password = 'pa55word';


    if ($_SERVER['HTTP_HOST'] == 'localhost')
    {
        $dsn= 'mysql:host=localhost;dbname=my_guitar_shop1';
        $username= 'mgs_user';
        $password= 'pa55word';
    }

    else
    {
        $dsn= 'mysql:host=web182jjm.db;dbname=my_guitar_shop1';
        $username= 'mgs_user';
        $password= 'pa55word';
    }
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>