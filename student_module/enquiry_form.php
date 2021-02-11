<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="enquiry_form_style.php"/>
    </head>
    <body>   
    <div class="main-block"> 
        <form method="POST" action="connection.php">
            <label>Enter Your Full Name:</label><br>
            <input class="f1" type="text" name="fname" placeholder="Your Name.."><br>
            <label>Contact Number:</label><br>
            <input class="f1" type="tel" name="phone" placeholder="Contact Number.."><br><br>
            <label>Email-Id:</label><br>
            <input class="f1" type="email" name="email" placeholder="Enter Your official Email-Id"><br><br>

            <label>In Which Field you are Interested ?:</label><br>
            <select name="courses" class="f1">
                <option value="B.TECH">B.Tech UG </option>
                <option value="M.TECH">M.TECH</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="BCS/MSC">BSC/MSC</option>
            </select><br><br>
            <label>Password:</label><br>
            <input class="f1" type="password" name="pass" placeholder="Enter Your password"><br><br><br>
        <input type="submit" value="REGISTER">
      </form>
    </div>
    </body>
</html>