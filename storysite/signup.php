<?php
/* signup.php
 * This form is largely copied from:
 * "https://code.tutsplus.com/tutorials/
 * how-to-create-a-phpmysql-powered-forum-from-scratch--net-10188"
 * I've modified it with Twitter Bootstrap code patched together from:
 * "https://www.w3schools.com/bootstrap/bootstrap_forms.asp"
 * Thank you Tutsplus and w3schools
 */
include 'connect.php';
include 'header.php';
 
echo '<h3>Sign up</h3>';
 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    /* the form hasn't been posted yet, display it
     * note that the action="" will cause the form to post to the same page it
     * is on.
     */
    echo '<form method="post" action="">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="username" class="form-control" id="user_name">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="user_pass">
        </div>
        <div class="form-group">
            <label for="user_pass_check">Reenter Password:</label>
            <input type="password" class="form-control" name="user_pass_check">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="user_email">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>        
     </form>';
}
else
{
    /* so, the form has been posted, we'll process the data in three steps:
        1.  Check the data
        2.  Let the user refill the wrong fields (if necessary)
        3.  Save the data 
    */
    $errors = array(); /* declare the array for later use */
     
    if(isset($_POST['user_name']))
    {
        //the user name exists
        if(!ctype_alnum($_POST['user_name']))
        {
            $errors[] = 'The username can only contain letters and digits.';
        }
        if(strlen($_POST['user_name']) > 30)
        {
            $errors[] = 'The username cannot be longer than 30 characters.';
        }
    }
    else
    {
        $errors[] = 'The username field must not be empty.';
    }
     
     
    if(isset($_POST['user_pass']))
    {
        if($_POST['user_pass'] != $_POST['user_pass_check'])
        {
            $errors[] = 'The two passwords did not match.';
        }
    }
    else
    {
        $errors[] = 'The password field cannot be empty.';
    }
     
    if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
    {
        echo 'Uh-oh.. a couple of fields are not filled in correctly..';
        echo '<ul>';
        foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
        {
            echo '<li>' . $value . '</li>'; /* this generates a nice error list */
        }
        echo '</ul>';
    }
    else
    {
        //the form has been posted without, so save it
        //notice the use of mysql_real_escape_string, keep everything safe!
        //also notice the sha1 function which hashes the password
        $sql = "INSERT INTO
                    users(user_name, user_pass, user_email ,user_date, user_level)
                VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
                       '" . sha1($_POST['user_pass']) . "',
                       '" . mysql_real_escape_string($_POST['user_email']) . "',
                        NOW(),
                        0)";
                         
        $result = mysql_query($sql);
        if(!$result)
        {
            //something went wrong, display the error
            echo 'Something went wrong while registering. Please try again later.';
            //echo mysql_error(); //debugging purposes, uncomment when needed
        }
        else
        {
            echo 'Successfully registered. The button below will allow you to post.';
            echo '<button type="button" class="btn btn-success" href="signin.php">Sign In</button>';
            
        }
    }
}
 
include 'footer.php';
?>