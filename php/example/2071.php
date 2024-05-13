<!-- Develop a website that checks validity of a user during the log-in process.Assume that the login data(username and password) are already stored in a database.Use client-side script to validate the user input during login process -->
  <html>
    <head>
        <title>form</title>
    </head>
    <body>
    <h2>Registration form</h2>
    <form name="LoginForm" action="/example/insert.php" method="post" onsubmit="return validateForm()">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div><br>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div><br>
       
        <button>Submit</button>
    </form>
    <script>
     function validateForm(){
        let uname=document.getElementById('name').value;
        let password=document.getElementById('password').value;
        if(uname==""){
            alert("please enter username");
            return false;
     }
     else if(password==""){
        alert("please enter password ");
        return false;
     }
     return true;
    }
    </script>
</body>
</html>