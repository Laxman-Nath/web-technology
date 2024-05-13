<!-- Develop a simple website that stores its contents in a database and display those contents from the database.Assume at least five different contents. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation in php</title>
</head>
<body>
    <form action="submit.php" method="post">
        <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
        </div><br>
        <div>
        <label for="address">Address:</label>
        <input type="text" name="address">
        </div><br>
        <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
        </div><br>
        <div>
        <label for="phone">Phone:</label>
        <input type="text" name="phone">
        </div><br>
        <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
        </div><br>
        <button>Submit</button>
    </form>
</body>
</html>