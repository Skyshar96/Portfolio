<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Configuration
$to_email = "mathisdev7@gmail.com"; // Remplacez par votre email
$subject_prefix = "[Portfolio Contact] ";

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Response array
$response = array(
    'success' => false,
    'message' => ''
);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? sanitize_input($_POST['subject']) : '';
    $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';
    
    // Validation
    $errors = array();
    
    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    } elseif (strlen($name) < 2) {
        $errors[] = "Le nom doit contenir au moins 2 caractères.";
    }
    
    if (empty($email)) {
        $errors[] = "L'email est requis.";
    } elseif (!validate_email($email)) {
        $errors[] = "L'email n'est pas valide.";
    }
    
    if (empty($subject)) {
        $errors[] = "Le sujet est requis.";
    }
    
    if (empty($message)) {
        $errors[] = "Le message est requis.";
    } elseif (strlen($message) < 10) {
        $errors[] = "Le message doit contenir au moins 10 caractères.";
    }
    
    // Check for errors
    if (!empty($errors)) {
        $response['message'] = implode(" ", $errors);
        echo json_encode($response);
        exit;
    }
    
    // Prepare email
    $email_subject = $subject_prefix . $subject;
    
    $email_body = "Vous avez reçu un nouveau message depuis votre portfolio.\n\n";
    $email_body .= "Détails:\n\n";
    $email_body .= "Nom: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Sujet: " . $subject . "\n\n";
    $email_body .= "Message:\n" . $message . "\n";
    
    // Email headers
    $headers = array();
    $headers[] = "From: " . $name . " <" . $email . ">";
    $headers[] = "Reply-To: " . $email;
    $headers[] = "X-Mailer: PHP/" . phpversion();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/plain; charset=UTF-8";
    
    // Send email
    $mail_sent = mail($to_email, $email_subject, $email_body, implode("\r\n", $headers));
    
    if ($mail_sent) {
        $response['success'] = true;
        $response['message'] = "Merci! Votre message a été envoyé avec succès.";
        
        // Optional: Log the message to a file
        $log_message = date("Y-m-d H:i:s") . " - Message from: " . $name . " (" . $email . ") - Subject: " . $subject . "\n";
        file_put_contents("contact_log.txt", $log_message, FILE_APPEND);
        
    } else {
        $response['message'] = "Désolé, une erreur s'est produite lors de l'envoi du message. Veuillez réessayer ou me contacter directement.";
    }
    
} else {
    $response['message'] = "Méthode de requête invalide.";
}

// Return JSON response
echo json_encode($response);
exit;
?>
