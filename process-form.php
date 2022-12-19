<?php
  if (isset($_POST['phylum'])) {
    $to = 'gideon.bergheim@cos.uni-heidelberg.de';
    $subject = 'Email from HTML form';
    $message = 'Phylum: ' . $_POST['phylum'] . "\n" .
               'Subphylum: ' . $_POST['subphylum'] . "\n" .
               'Class: ' . $_POST['class'] . "\n" .
               'Genus: ' . $_POST['genus'] . "\n" .
               'Species: ' . $_POST['species'] . "\n" .
               'Dataset Type: ' . $_POST['dataset-type'] . "\n" .
               'Dataset Link: ' . $_POST['dataset-link'] . "\n" .
               'Dataset DOI: ' . $_POST['dataset-doi'] . "\n" .
               'Publication: ' . $_POST['publication'] . "\n" .
               'Publication DOI: ' . $_POST['publication-doi'] . "\n" .
               'Short Info: ' . $_POST['short-info'];
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
  }
?>