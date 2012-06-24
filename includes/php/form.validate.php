<?php
 
 
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
}

?>