<!-- Create a web form for book search catalog.The form should contain a dropdown defining a search type, a text box for search keyword,a radio button for download type true or false,now write a php script to store data from the form into database table and also retrieve the results from stored table in new page  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>Book search catalog</h2>
    <form action="submit.php" method="POST">
        <div>
            <label for="">Choose book to be searched:</label>
            <select name="search" id="">
                <option value="web">Web technology</option>
                <option value="ai">AI</option>
                <option value="dbms">DBMS</option>
                <option value="os">OS</option>
            </select>
        </div><br>
        <div>
            <label for="">Enter the name of book:</label>
            <input type="text" name="name">
        </div><br>
        <div>
            <label for="">Do you want to download?</label>
            <label for=""><input type="radio" name="download" value="true">TRUE</label>
            <label for=""><input type="radio" name="download" value="false">FALSE</label>
        </div><br>

        <button>Submit</button>
    </form>
</body>

</html>