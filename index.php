

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
    <form action="./greetings.php" method="GET">
        <input type="text" placeholder="Enter your username" name="username">
        <input type="text" placeholder="Enter age" name="age">
        <input type="submit" value="Submit form" name='submit'>
    </form>

   
    <script src="/js/dist/index_page.js"></script>
</body>
</html>