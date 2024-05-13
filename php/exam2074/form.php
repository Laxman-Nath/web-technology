<!-- Construct a web page that takes name,address and phone number from the user and stores this information in the database using server side script.use javascript to validate form data for phone number -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form onsubmit="return validation()" action="submit.php" method="POST" >
       <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
       </div><br>
       <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
       </div><br>
       <div>
        <label for="phone">Phone:</label>
        <input type="number" name="phone" id="phone">
       </div><br>
       <input type="submit" value="Submit">
    </form>

    <script>
        function validation(){
        let name=document.getElementById('name').value;
        let address=document.getElementById('address').value;
        let phone=document.getElementById('phone').value;
        if(name===""){
            alert("Please enter name");
            return false;
        }
        else if(address===""){
            alert("Please enter addresss");
            return false;
        }
        else if(phone===""){
            alert("Please enter phone number");
            return false;
        }
        else if(phone.length!==10){
            alert("The length of phone number should be equal to 10");
            return false;
        }
        return true;
    }
    </script>
</body>
</html>