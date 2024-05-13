<!-- Write a php script to create a form and insert values into the database table.The form should contain at least two fields -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="submit.php" method="POST">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name">
        </div><br>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>