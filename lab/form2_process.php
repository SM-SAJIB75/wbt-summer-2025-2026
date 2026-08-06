<?php

$nameErr = $postalErr = $dobErr = $emailErr = $passwordErr = $countryErr = "";
$name = $postal = $dob = $email = $password = $country = "";
$isValid = false; 
 $countries = ["Bangladesh", "NZ", "USA", "UK", "Canada", "Australia"]; 

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //name
    if (empty($_POST["name"])) {
        $nameErr = "    Enter your name";
    } else {
        $name = cleanInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }    
           elseif (  strlen($name)<3)  {
              $nameErr = "name must be at least 2 characters"; 
           }
    }  
           
        
          // Postal Code
   if (empty($_POST["postal"])) {
    $postalErr = "Postal code is required";
} else {
    $postal = cleanInput($_POST["postal"]);

    if (!preg_match("/^[0-9]{4,10}$/", $postal)) {
        $postalErr = "Only numbers allowed (4-10 digits)";
    }
}
            //DOB 
             if (empty($_POST["dob"])) {
        $dobErr = "Enter your date of birth";
    } else {
        $dob   = cleanInput($_POST["dob"]);
        $today = new DateTime();
        $birth = DateTime::createFromFormat("Y-m-d", $dob);

        if (!$birth || $birth->format("Y-m-d") !== $dob) {
            $dobErr = "Enter a valid date in YYYY-MM-DD format";
        } elseif ($birth > $today) {
            $dobErr = "Date of birth cannot be in the future";
        } elseif ($birth->diff($today)->y < 18) {
            $dobErr = "You must be at least 18 years old to register";
        } 
    }   
      
    //mail 

if (empty($_POST["email"])) {
    $emailErr = "email is required";
} else {
    $email = cleanInput($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "invalid email formate";
    }
}
          
   // Password

if (empty($_POST["password"])) {
    $passwordErr = "Enter a password";
     } else {
    $password = $_POST["password"];
        }

   if (strlen($password) < 8) {
    $passwordErr = "Password must be at least 8 characters";
   } 
     else if (!preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {

    $passwordErr = "Password must contain at least one letter and one number";
            
    }
         

                        
  // Country
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = cleanInput($_POST["country"]);
        if (!in_array($country, $countries)) {
            $countryErr = "Please select a valid country";
        }
    } 
          $isValid = !$nameErr && !$postalErr && !$dobErr
        && !$emailErr && !$passwordErr && !$countryErr;

}
?>
    


                      
         
            