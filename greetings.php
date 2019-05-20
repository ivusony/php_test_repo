<!DOCTYPE html>


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

                include 'db_conn.php';

                $conn = Open();

                $username = $_GET['username']; 
                $age = $_GET['age'];

                if (isset($_GET['submit'])) {
                    
                    $insert = "INSERT INTO users (username, age) VALUES ('$username','$age')";

                    if(mysqli_query($conn, $insert)){
                        echo "Inserted to DB successfully";
                    }else{
                        echo "Not added. Error";
                    }
                }

                
                Close($conn);
            
            ?>
        </h1>
        
</body>
</html>