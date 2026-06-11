<?php
// includes/functions.php
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function send_contact_message($name, $email, $message, $db) {
    $stmt = $db->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $stmt->bindValue(':message', $message, SQLITE3_TEXT);
    return $stmt->execute();
}
?>