<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pizza</title>
</head>
<body>
    <?php 
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            
            // Checking empty fields
            if(empty($name) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Please fill out all the fields.";
            } else {
                $to = 'example@gmail.com';
                $subject = 'New Pizza Order!';
                $message = 'Name: '. $name . "\n\nPhone Number: ". $phone . "\n\nAddress: ". $address;
                
                mail($to, $subject, $message);
                echo "Your order has been submitted successfully!";
            }
        }
     ?>
     
     <!-- Form -->
     <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
         Name: <br>
         <input type="text" name="name"><br><br>
         
         Phone number: <br>
         <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required name="phone">
         <small>Format: 123-456-7890</small><br><br>
         
         Delivery Address: <br>
         <textarea name="address" rows="5" cols="30"></textarea><br><br>
         
         <input type="submit" value="Submit" name="submit">
     </form>

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
</body>
</html>