<?php
// define variables and set to empty values
$billing_first_name = $billing_last_name = $billing_address_line1 = $billing_address_line2 = $billing_postal_code =$billing_city =  $billing_country = $billing_email = $billing_phone_number = $billing_id = "";
$billing_first_nameErr = $billing_last_nameErr = $billing_address_line1Err = $billing_address_line2Err = $billing_postal_codeErr =$billing_cityErr =  $billing_countryErr = $billing_emailErr = $billing_phone_numberErr = $billing_idErr = "";
$shipping_first_name = $shipping_last_name = $shipping_address_line1 = $shipping_address_line2 = $shipping_postal_code =$shipping_city =  $shipping_country = $shipping_email = $shipping_phone_number = $shipping_id = $shipping_comment = "";
$shipping_first_nameErr = $shipping_last_nameErr = $shipping_address_line1Err = $shipping_address_line2Err = $shipping_postal_codeErr =$shipping_cityErr =  $shipping_countryErr = $shipping_emailErr = $shipping_phone_numberErr = $shipping_idErr = $shipping_commentErr = "";
 
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] == 'POST' && !is_admin()) {
  if (empty($_POST["billing_first_name"])) {
    $billing_first_nameErr = "first name is required";
  } else {
    $billing_first_name = address_input($_POST["billing_first_name"]);
    // check if first name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$billing_first_name)) {
      $billing_first_nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["billing_last_name"])) {
    $billing_last_nameErr = "last name is required";
  } else {
    $billing_last_name = address_input($_POST["billing_last_name"]);
    // check if last name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$billing_last_name)) {
      $billing_last_nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["billing_address_line1"])) {
    $billing_address_line1Err = "address line 1 is required";
  } else {
    $billing_address_line1 = address_input($_POST["billing_address_line1"]);
  }

  if (empty($_POST["billing_address_line2"])) {
    $billing_address_line2Err = "";
  } else {
    $billing_address_line2 = address_input($_POST["billing_address_line2"]);
  }

  if (empty($_POST["billing_postal_code"])) {
    $billing_postal_codeErr = "postal code is required";
  } else {
    $billing_postal_code = address_input($_POST["billing_postal_code"]);
    // check if postal code only contains numbers
    if (!preg_match("/^[0-9-' ]*$/",$billing_postal_code)) {
      $billing_postal_codeErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["billing_city"])) {
    $billing_cityErr = "city is required";
  } else {
    $billing_city = address_input($_POST["billing_city"]);
    // check if city only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$billing_city)) {
      $billing_cityErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["billing_country"])) {
    $billing_countryErr = "country is required";
  } else {
    $billing_country = address_input($_POST["billing_country"]);
  }

  if (empty($_POST["billing_email"])) {
    $billing_emailErr = "email is required";
  } else {
    $billing_email = address_input($_POST["billing_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($billing_email, FILTER_VALIDATE_EMAIL)) {
      $billing_emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["billing_phone_number"])) {
    $billing_phone_numberErr = "phone number is required";
  } else {
    $billing_phone_number = address_input($_POST["billing_phone_number"]);
    // check if phone number only contains numbers
    if (!preg_match("/^[0-9-' ]*$/",$billing_phone_number)) {
      $billing_phone_numberErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["billing_id"])) {
    $billing_idErr = "ID is required";
  } else {
    $billing_id = address_input($_POST["billing_id"]);
    // check if id only contains numbers
    if (!preg_match("/^[0-9-' ]*$/",$billing_id)) {
      $billing_idErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["shipping_first_name"])) {
    $shipping_first_nameErr = "first name is required";
  } else {
    $shipping_first_name = address_input($_POST["shipping_first_name"]);
    // check if first name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$shipping_first_name)) {
      $shipping_first_nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["shipping_last_name"])) {
    $shipping_last_nameErr = "last name is required";
  } else {
    $shipping_last_name = address_input($_POST["shipping_last_name"]);
    // check if first name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$shipping_last_name)) {
      $shipping_last_nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["shipping_address_line1"])) {
    $shipping_address_line1Err = "address line 1 is required";
  } else {
    $shipping_address_line1 = address_input($_POST["shipping_address_line1"]);
  }

  if (empty($_POST["shipping_address_line2"])) {
    $shipping_address_line2Err = "";
  } else {
    $shipping_address_line2 = address_input($_POST["shipping_address_line2"]);
  }

  if (empty($_POST["shipping_postal_code"])) {
    $shipping_postal_codeErr = "postal code is required";
  } else {
    $shipping_postal_code = address_input($_POST["shipping_postal_code"]);
    // check if postal code only contains numbers
    if (!preg_match("/^[0-9-' ]*$/",$shipping_postal_code)) {
      $shipping_postal_codeErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["shipping_city"])) {
    $shipping_cityErr = "city is required";
  } else {
    $shipping_city = address_input($_POST["shipping_city"]);
    // check if city only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$shipping_city)) {
      $shipping_cityErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["shipping_country"])) {
    $shipping_countryErr = "country is required";
  } else {
    $shipping_country = address_input($_POST["shipping_country"]);
  }

  if (empty($_POST["shipping_email"])) {
    $shipping_emailErr = "email is required";
  } else {
    $shipping_email = address_input($_POST["shipping_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($shipping_email, FILTER_VALIDATE_EMAIL)) {
      $shipping_emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["shipping_phone_number"])) {
    $shipping_phone_numberErr = "phone number is required";
  } else {
    $shipping_phone_number = address_input($_POST["shipping_phone_number"]);
    // check if phone number only contains numbers
    if (!preg_match("/^[0-9-' ]*$/",$shipping_phone_number)) {
      $shipping_phone_numberErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["shipping_id"])) {
    $shipping_idErr = "ID is required";
  } else {
    $shipping_id = address_input($_POST["shipping_id"]);
    // check if id only contains numbers
    if (!preg_match("/^[0-9-' ]*$/",$shipping_id)) {
      $shipping_idErr = "Only numbers allowed";
    }
  }

  if (empty($_POST["shipping_comment"])) {
    $shipping_commentErr = "";
  } else {
    $shipping_comment = address_input($_POST["shipping_comment"]);
  }
}
function address_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>