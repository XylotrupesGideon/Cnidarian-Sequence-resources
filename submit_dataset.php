<?php

// Check that the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the input from the form
  $species = $_POST['species-input'];
  $datasetType = $_POST['dataset-type-select'];
  $datasetLink = $_POST['dataset-link-input'];
  $publication = $_POST['publication-textarea'];
  $info = $_POST['info-textarea'];

  // Set the recipient email address
  $to = "gideon.bergheim@cos.uni-heidelberg.de";

  // Set the subject of the email
  $subject = "Form submission: $species";

  // Construct the body of the email using the input from the form
  $body = "Species: $species\n";
  $body .= "Dataset Type: $datasetType\n";
  $body .= "Link to Dataset: $datasetLink\n";
  $body .= "Publication:\n$publication\n";
  $body .= "Additional Information:\n$info\n";

  // Use the mail function to send the email
  mail($to, $subject, $body);
}

?>