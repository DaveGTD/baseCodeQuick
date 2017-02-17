<?php

/* Check Registration form submitted */
if(!empty($_POST) && $_POST['Action']=='create_user'){
    /* Define return | here result is used to return user data and error for error message */
    $Return = array('result'=>array(), 'error'=>'');

    $name = safe_input($con, $_POST['input_name']);
    $email = safe_input($con, $_POST['input_email']);
    $password = safe_input($con, $_POST['input_password1']);

    /* Server side PHP input validation */
    if($name===''){
        $Return['error'] = "Please enter Full name.";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $Return['error'] = "Please enter a valid Email address.";
    }elseif($password===''){
        $Return['error'] = "Please enter Password.";
    }
    if($Return['error']!=''){
        output($Return);
    }

    /* Check Email existence in DB */
    $result = mysqli_query($con, "SELECT * FROM tbl_users WHERE email='$email' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        /*Email already exists: Set error message */
        $Return['error'] = 'You have already registered with us, please login.';
    }else{
        /*Insert registration data to user table (user_GUID is Unique Identifier and Default status is 0 means pending)*/
        mysqli_query($con, "INSERT INTO tbl_users (user_GUID, email, password, entry_date) values(MD5(UUID()), '$email', '".md5($password)."' ,NOW() )");
        $user_id = mysqli_insert_id($con); /* Get the auto generated id used in the last query */
        /*Insert registration data to user profile table */
        mysqli_query($con, "INSERT INTO `tbl_user_profile` (user_id,name) VALUES('$user_id','$name')");
        /* Success: Set session variables and redirect to Protected page */
        $Return['result'] = $_SESSION['UserData'] = array('user_id'=>$user_id);
    }
    /*Return*/
    output($Return);
}

?>
