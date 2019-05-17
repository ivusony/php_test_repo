

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test page</title>
</head>
<body>
    <h1>Custom test page served by apache</h1>
    <h3>Served by apache2</h3>
    <form action="" method="GET">
        <input type="text" placeholder="Enter your name" name="name">
        <input type="text" placeholder="Enter city" name="city">
        <input type="submit" value="Submit form" name='submit'>
    </form>

    <?php 
        $name = $_GET['name'];
        $city = $_GET['city'];

        if (isset($_GET['submit'])) {
            
            echo 'You are '.$name.' from '.$city.'. Greetings!'
        }
    ?>
</body>
</html>