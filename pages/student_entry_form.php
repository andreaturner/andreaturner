<?php
    //include/require files
    require '../includes/functions.php';
    require '../includes/db_connection.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www/w3org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Graduation Entry Form</title>
	<link rel="stylesheet" href="../styles/style.css">
	<style type="text/css"></style>
    </head>
	<body>
	    <div id="logo-div">
		<img alt="Highline logo" height="58" longdesc="Highline logo" src="https://includes.highline.edu/images/hclogo-webheader.gif" width="156">
	    </div>
	    
	    <div id="title-div">
		<h2>Graduation Entry Form</h2>
	    </div>
	    
	    <div id="sidebar-div"></div>

	    <div id="form-div">
		<form action="student_entry_form.php" method="post">
		    <p>Please complete the following form.</p>
		    
		    <?php
			// Check to see if the form has been submitted
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    
			    $problem = FALSE; // no problems so far
			    $sid = '';
			    $validSID = FALSE;
			    $sidLength = 9;
			    $fname = '';
			    $validFName = FALSE;
			    $mname = '';
			    $validMName = FALSE;
			    $lname = '';
			    $validLName = FALSE;
			    $nameMaxLength = 20;
			    $wkphone = '';
			    $validPhone = FALSE;
			    $gender = '';
			    $genderOptions = array('M', 'F');
			    $validGender = FALSE;
			    $address = '';
			    $validAddress = FALSE;
			    $city = '';
			    $validCity = FALSE;
			    $state = '';
			    $states = states();
			    $validState = FALSE;
			    $zip = '';
			    $zipLength = 5;
			    $validZip = FALSE;
			    
			    // Check for each value and validate it
			    
			    //sid must be exactly nine numeric digits with no spaces,
			    //letters, or special characters
			    if(empty($_POST['sid']) ||
			       !isset($_POST['sid']) ||
			       !(strlen($_POST['sid']) == $sidLength) ||
			       !is_numeric($_POST['sid'])) {
				$problem = TRUE;
				//print '<p class="error">Please enter your Student ID number.</p>';
			    } else {
				$sid = strip_tags($_POST['sid']);
				$validSID = TRUE;
			    }
			    
			    //first name and last name both must be fewer than 20
			    //characters and must consist of only alphabetic characters
			    //with no spaces, numbers, or special characters.
			    if(empty($_POST['fname']) ||
			       !isset($_POST['fname']) ||
			       !ctype_alpha($_POST['fname']) ||
			       !(strlen($_POST['fname']) <= $nameMaxLength)) {
				$problem = TRUE;
				//print '<p class="error">Please enter your first name.</p>';
			    } else {
				$fname = strip_tags($_POST['fname']);
				$validFName = TRUE;
			    }
			    
			    if(empty($_POST['mname']) ||
			       !isset($_POST['mname']) ||
			       !ctype_alpha($_POST['mname']) ||
			       !(strlen($_POST['mname']) <= $nameMaxLength)) {
				$problem = TRUE;
				//print '<p class="error">Please enter your first name.</p>';
			    } else {
				$mname = strip_tags($_POST['mname']);
				$validMName = TRUE;
			    }
		    
			    if(empty($_POST['lname']) ||
			       !isset($_POST['lname']) ||
			       !ctype_alpha($_POST['lname']) ||
			       !(strlen($_POST['lname']) <= $nameMaxLength)) {
				$problem = TRUE;
				//print '<p class="error">Please enter your last name.</p>';
			    }else {
				$lname = strip_tags($_POST['lname']);
				$validLName = TRUE;
			    }
			    
			    if(empty($_POST['wkphone']) ||
			       !isset($_POST['wkphone']) ||
			       !validPhone($_POST['wkphone'])) {
				$problem = TRUE;
				//print '<p class="error">Please enter your work phone number.</p>';
			    }else {
				$wkphone = strip_tags($_POST['wkphone']);
				$validPhone = TRUE;
			    }
			
			    if(empty($_POST['gender']) ||
			       !in_array($_POST['gender'], $genderOptions) ||
			       !isset($_POST['gender'])) {
				$problem = TRUE;
				//print '<p class="error">Please select your gender.</p>';
			    } else {
				$gender = strip_tags($_POST['gender']);
				$validGender = TRUE;
			    }
			    
			    if(empty($_POST['address']) ||
			       !isset($_POST['address'])) {
				$problem = TRUE;
				//print '<p class="error">Please enter your address.</p>';
			    }else {
				$address = strip_tags($_POST['address']);
				$validAddress = TRUE;
			    }
			    
			    if(empty($_POST['city']) ||
			       !isset($_POST['city'])) {
				$problem = TRUE;
				//print '<p class="error">Please select your city.</p>';
			    }else {
				$city = strip_tags($_POST['city']);
				$validCity = TRUE;
			    }
			    
			    if(empty($_POST['state']) ||
			       !isset($_POST['state']) ||
			       !in_array($_POST['state'], $states)) {
				$problem = TRUE;
				print '<p class="error">Please select your state.</p>';
			    }else {
				$state = strip_tags($_POST['state']);
				$validState = TRUE;
			    }
			    
			    if(empty($_POST['zip']) ||
			       !isset($_POST['zip']) ||
			       !(strlen($_POST['zip']) == $zipLength) ||
			       !is_numeric($_POST['zip'])) {
				$problem = TRUE;
				//print '<p class="error">Please enter your zip code.</p>';
			    }else {
				$zip = strip_tags($_POST['zip']);
				$validZip = TRUE;
			    }
			    
			    if(!$problem) { // if there aren't any problems....
				// Print a message:
				print '<p>Your application has been submitted.</p>';
				
				// Clear the posted values:
				$_POST = array();
				
				$statement = $pdoConnection->prepare('INSERT INTO students
                                              (sid, first_name, middle, last_name, work_phone, gender, address, city, state, zip)
                                              VALUES
                                              (:sid, :first_name, :middle, :last_name, :work_phone, :gender, :address, :city, :state, :zip)');
        
				$statement->bindValue(':sid', "$sid", PDO::PARAM_INT);
				$statement->bindValue(':first_name', "$fname", PDO::PARAM_STR);
				$statement->bindValue(':middle', "$mname", PDO::PARAM_STR);
				$statement->bindValue(':last_name', "$lname", PDO::PARAM_STR);
				$statement->bindValue(':work_phone', "$wkphone", PDO::PARAM_STR);
				$statement->bindValue(':gender', "$gender", PDO::PARAM_STR);
				$statement->bindValue(':address', "$address", PDO::PARAM_STR);
				$statement->bindValue(':city', "$city", PDO::PARAM_STR);
				$statement->bindValue(':state', "$state", PDO::PARAM_STR);
				$statement->bindValue(':zip', "$zip", PDO::PARAM_STR);
				
				$statement->execute();
			
				if ($statement == 1) {
				    echo '<p>Your insert was successful!</p>';
				} else {
				    echo '<p>Insert was unsuccessful!</p>';
				}
				
				//post the given values to the database
				//dbInsert($sid, $fname, $mname, $lname, $wkphone, $gender, $address, $city, $state, $zip);
				
//				$result = $pdoConnection->exec("INSERT INTO students (sid,
//                                                              first_name,
//                                                              middle,
//                                                              last_name,
//                                                              work_phone,
//                                                              gender,
//                                                              address,
//                                                              city,
//                                                              state,
//                                                              zip)
//                                        VALUES ($sid,
//                                                '$fname',
//                                                '$mname',
//                                                '$lname',
//                                                '$wkphone',
//                                                '$gender',
//                                                '$address',
//                                                '$city',
//                                                '$state',
//                                                $zip)");
				
				//if ($result !== false) {
				//    echo 'Your insert was successful!';
				//} else {
				//    echo 'Insert was unsuccessful!';
				//}
				
				} else { // Forgot a field.
				    print '<p class="error">There was a problem. Please correct any errors and try again.</p>';
			    }
			    
			} // End of handle form IF.
		    ?>
			<!--  Create the form. -->
			    
		    <label class="label" for="sid">Student ID:</label>
		    <input type="text" name="sid" id="sid" value='<?php echo "$sid" ?>' placeholder="123456789">
		    <?php
			//if the form was posted and the sid was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validSID) {
				//give prompt for correcting the entry
				echo 'A valid student identification number contains only nine numeric digits.';
			    }
			}
		    ?><br>
		        
		    <label class="label" for="fname">First Name:</label>
		    <input type="text" name="fname" id="fname" value='<?php echo "$fname" ?>' placeholder="Sally">
		    <?php
			//if the form was posted and the first name was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validFName) {
				//give prompt for correcting the entry
				echo 'A valid name contains fewer than twenty alphabetic characters and no spaces.';
			    }
			}
		    ?><br>
		    
		    <label class="label" for="mname">Middle Name:</label>
		    <input type="text" name="mname" id="mname" value='<?php echo "$mname" ?>' placeholder="Anne">
		    <?php
			//if the form was posted and the middle name was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validMName) {
				//give prompt for correcting the entry
				echo 'A valid name contains fewer than twenty alphabetic characters and no spaces.';
			    }
			}
		    ?><br>
		    
		    <label class="label" for="lname">Last Name:</label>
		    <input type="text" name="lname" id="lname" value='<?php echo "$lname" ?>' placeholder="Smith">
		    <?php
			//if the form was posted and the last name was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validLName) {
				//give prompt for correcting the entry
				echo 'A valid name contains fewer than twenty alphabetic characters and no spaces.';
			    }
			}
		    ?><br>
		    
		    <label class="label" for="wkphone">Work Phone:</label>
		    <input type="text" name="wkphone" id="wkphone" value='<?php echo "$wkphone" ?>' placeholder="(555)555-5555">
		    <?php
			//if the form was posted and the phone number was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validPhone) {
				//give prompt for correcting the entry
				echo 'Please enter a phone number in the format: (555)555-5555';
			    }
			}
		    ?><br>
		 
		    <p>Please select your gender:
		    <input type="radio" name="gender" value="M"
			   <?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				    if ($validGender && ($gender == 'M')) {
					echo 'checked="checked"';
				    }
				}
			   ?>>Male 
		    <input type="radio" name="gender" value="F"
			    <?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				    if ($validGender && ($gender == 'F')) {
					echo 'checked="checked"';
				    }
				}
			   ?>>Female
			   
			    <?php
				    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					if (!$validGender) {
					    echo 'Please select a gender.';
					}
				    }
			    ?></p>
		
		    <label class="label" for="address">Address:</label>
		    <input type="text" size="50" name="address" id="address" value='<?php echo "$address" ?>'
			   placeholder="555 N. 5th St.">
		    <?php
			//if the form was posted and the address was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validAddress) {
				//give prompt for correcting the entry
				echo 'Please enter your address.';
			    }
			}
		    ?><br>
		    
		    <label class="label" for="city">City:</label>
		    <input type="text" size="30" name="city" id="city" value='<?php echo "$city" ?>' placeholder="Seattle">
		     <?php
			//if the form was posted and the address was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validCity) {
				//give prompt for correcting the entry
				echo 'Please enter your city';
			    }
			}
		    ?><br>
		    
		    <label>State: </label>
		    <select name="state">
			<?php
			    //retrieve the states array
			    $states = states();
			    
			    //create the states dropdown menu and make it sticky!
			    foreach ($states as $currentState) {
				echo "<option value='$currentState'";
				
				//was the value posted back to the page?
				//if so it should be selected this time!
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				    if ($currentState == $state) {
					echo 'selected="selected"';
				    }
				}
				
				echo ">$currentState</option>";
			    }
			?>
		    </select>
		    
		    <label class="state-zip-label" for="zip">Zip Code:</label>
		    <input type="text" size="20" name="zip" id="zip" value='<?php echo "$zip" ?>' placeholder="99999">
		    <?php
			//if the form was posted and the zip code was not valid
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			    if (!$validZip) {
				//give prompt for correcting the entry
				echo 'Your zip code should be five numeric digits in the format: 99999.';
			    }
			}
		    ?>
		    </div>
			
		    <input id="mySubmit" type="submit" value="Submit my Application">
			
		</form>
	    </div>
        </body>
</html>