<!-- Develop a simple website that takes first name,last name,and address from the user and stores this information in the database.Use javascript to validate form data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body> 
    <form  onsubmit="return validation()" action="submit.php" method="post">
      <div>
        <label for="fname">Firstname:</label>
        <input type="text" name="fname" id="fname">
      </div><br>
      <div>
        <label for="lname">Lastname:</label>
        <input type="text" name="lname" id="lname">
      </div><br>
      <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
      </div><br>
      <input type="submit" value="Submit">
    </form>
</body>
<script>
    function validation(){
        let fname=document.getElementById('fname').value;
        let lname=document.getElementById('lname').value;
        let address=document.getElementById('address').value;
        if(fname==""){
            alert("Enter firstname");
            return false;
        }
        else if(lname==""){
            alert("Enter lastname");
            return false;
        }
        else if(address==""){
            alert("Enter address");
            return false;
        }
        else if(address.length<=5){
            alert("The address length should be greater than 5");
            return false;
        }
        return true;
    }
</script>
</html>