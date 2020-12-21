<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $phone = filter_input(INPUT_POST, 'phone');
    // get the rest of the data for the form
    $heard_from = filter_input(INPUT_POST, 'heard_from');
    if ($heard_from === NULL){
        $heard_from = 'Unknown';
    }
    // for the heard_from radio buttons,
    // display a value of 'Unknown' if the user doesn't select a radio button
    $wants_updates = $_POST['wants_updates'];
    // for the wants_updates check box,
    if(isset($wants_updates)){
        $wants_updates='Yes';
    } else{
        $wants_updates = 'No';
    }
    // display a value of 'Yes' or 'No'
    $contact_via = filter_input(INPUT_POST, 'contact_via');
    $comments = filter_input(INPUT_POST, 'comments');
    $comments = htmlspecialchars($comments); 
    $comments = nl2br($comments, false);  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><!-- add PHP code here-->
            <?php echo htmlspecialchars($password);?>
        </span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone);?></span><br>

        <label>Heard From:</label>
        <span><?php echo htmlspecialchars($heard_from);?></span><br>

        <label>Send Updates:</label>
        <span><?php echo htmlspecialchars($wants_updates);?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via);?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo $comments;?></span><br>        
    </main>
</body>
</html>