<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>E-Mail Eintragung</title>
</head>
<body>

<h1>DAS IST EIN TEST: BITTE trage deine E-MAil ein:</h1>

<form method="POST">
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>

<?php
include 'db.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) {
        $email = $_POST['email'];
        $stmt = $pdo->prepare("INSERT INTO users (email) VALUES (?)");
        $stmt->execute([$email]);
        echo "<p><strong>✅ E-Mail gespeichert!</strong></p>";
    }

    echo "<h2>Gespeicherte E-Mails:</h2>";
    $stmt = $pdo->query("SELECT * FROM users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>" . htmlspecialchars($row['email']) . "</p>";
    }
} catch (PDOException $e) {
    echo "<p><strong>❌ Fehler:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>

</body>
</html>
