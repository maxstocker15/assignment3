<form method="POST">
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $stmt = $pdo->prepare("INSERT INTO users (email) VALUES (?)");
    $stmt->execute([$email]);
}

foreach ($pdo->query("SELECT * FROM users") as $row) {
    echo "<p>" . htmlspecialchars($row['email']) . "</p>";
}
?>
