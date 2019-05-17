<!DOCTYPE html>
<?php include 'db_conn.php';

    $conn = Open();

    echo "Connected Successfully";
    
    Close($conn);

?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
        <h1>
            <?php 
                $name = $_GET['name'];
                $city = $_GET['city'];

                if (isset($_GET['submit'])) {
                    
                    echo 'You are '.$name.' from '.$city.'. Greetings!';
                }
            ?>
        </h1>
</body>
</html>