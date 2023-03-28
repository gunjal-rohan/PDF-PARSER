<?php

require_once 'vendor/autoload.php';
require_once 'PDFTextExtractor.php';
require_once 'config.php';

//check if file uploaded
if (isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
    $pdf = new PDFTextExtractor();
    $pdf->load($file);
    $text = $pdf->extractText();


    // Use regular expressions to extract phone numbers and email addresses

    $epattern = "/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i";
    $npattern = "/\b\d{10}\b/";


     preg_match_all($npattern, $text, $phone_numbers);
     preg_match_all($epattern, $text, $emails);


    // Store the extracted information in the database
    // Connect to the database
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    echo "Parsing Pdf ...."."<br />";

    // Insert the phone numbers into the database
    foreach ($phone_numbers[0] as $phone_number) {
        mysqli_query($conn, "INSERT INTO phone_numbers (number) VALUES ('$phone_number')");
        echo "Number Extracted and saved Sucessfully!!"."<br />";
    }

    // Insert the email addresses into the database
    foreach ($emails[0] as $email) {
        mysqli_query($conn, "INSERT INTO email_addresses (email) VALUES ('$email')");
        echo "Mail extracted and saved Sucessfully!!"."<br />";
    }

    mysqli_close($conn);
    echo 'Parsing Done!!';
}
?>
