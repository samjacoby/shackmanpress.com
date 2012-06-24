<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include 'includes/php/mysql.authentication.php';

 	/**
    * This function can be used to check the sanity of variables
    *
    * @access private
    *
    * @param string $type  The type of variable can be bool, float, numeric, string, array, or object
    * @param string $string The variable name you would like to check
    * @param string $length The maximum length of the variable
    *
    * return bool
    */

  function sanityCheck($string, $type, $length){

  // assign the type
  $type = 'is_'.$type;

  if(!$type($string))
    {
    return FALSE;
    }
  // now we see if there is anything in the string
  elseif(empty($string))
    {
    return FALSE;
    }
  // then we check how long the string is
  elseif(strlen($string) > $length)
    {
    return FALSE;
    }
  else
    {
    // if all is well, we return TRUE
    return TRUE;
    }
}

function checkSet(){
  return isset($_POST['username'], $_POST['password']);
}

// END DEFINITIONS //

session_start();

if (!isset($_SESSION['uid']) ) {
		session_defaults();
}

if(isset($_SESSION['logged']) && ($_SESSION['logged'] == true)) {

	header("Location: index.php");
	
} else {

	$date = gmdate("'Y-m-d'");
	$db = db_connect();
	$user = new User($db);

}

if(checkSet() != FALSE)	{
	if(empty($_POST['username'])==FALSE && sanityCheck($_POST['username'], 'string', 25) != FALSE) {
       	 //If all is well we can  assign the value of POST field to a variable
                $username = $_POST['username'];
	} else {
        // if all is not well, we echo an error and exit the script
		echo 'Username is not set';
        exit();
	}
	if(empty($_POST['password'])==FALSE && sanityCheck($_POST['password'], 'string', 25) != FALSE) {
       	 //If all is well we can  assign the value of POST field to a variable
                $password = $_POST['password'];
	 } else {
        // if all is not well, we echo an error and exit the script
		echo 'Password is not set';
        exit();
	}
	
	If(empty($_POST['remember'])==FALSE) {
		$remember = 1;
	} else {
		$remember = 0;
	}	
		
	//$date = gmdate("'Y-m-d'");
	//$db = db_connect();
	//$user = new User($db);
	if($user->_checkLogin($username, $password, $remember)) {
		header("location: admin.php");
		exit();	
	} else {
		header("Location: login.php");
		exit();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shackman Press | Login</title>
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Administrative Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td></td>
<td width="294"><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td>Password</td>
<td></td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td width="294">Save Login</td>
<td></td>
<td><input type="checkbox" name="remember" id="remember" /></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>

</html>

