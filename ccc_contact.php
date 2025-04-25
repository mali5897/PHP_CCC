<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body style="background-color: lightgreen;">
    <?php include "ccc_header.php"; ?>
    <h2>Contact Us Today!</h2>
    <br/>
    <label>Please tell us your name:</label>
    <br/>
    <input type="text" name="cust_name" placeholder="First and Last name"/>
    <br/>
    <label>What is your email?</label>
    <br/>
    <input type="email" name="cust_email" placeholder="user@example.com"/>
    <br/>
    <input type="submit" value="Submit Now!"/>
    <br/>
    <a href="ccc_home.php">Click here to go back home!</a>
    
    <br/>
    
    <a href="ccc_about.php">Click here to learn more about us!</a>    
    <?php include "ccc_footer.php"; ?>

    
</body>
</html>