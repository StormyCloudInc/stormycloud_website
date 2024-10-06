<?php
$messageFile = 'message.txt';
$signatureFile = 'message.sig';
$publicKeyFile = 'publickey.asc';

// Import the public key
putenv('GNUPGHOME=/tmp/gnupg'); // Use a temporary directory for GnuPG
$gpg = new gnupg();
$keyData = file_get_contents($publicKeyFile);
$gpg->import($keyData);

// Verify the signature
$message = file_get_contents($messageFile);
$signature = file_get_contents($signatureFile);
$info = $gpg->verify($message, $signature);

if ($info) {
    echo "The message is verified and comes from a trusted source.";
} else {
    echo "The message could not be verified.";
}
?>