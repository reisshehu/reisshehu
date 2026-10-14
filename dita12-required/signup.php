<?php
$errors = [];
$name = '';
$email = '';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($name === '') {
        $errors[] = 'Shkruani emrin dhe mbiemrin.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Shkruani një adresë emaili të vlefshme.';
    }
    if (strlen($password) < 8) {
        $errors[] = 'Fjalëkalimi duhet të ketë të paktën 8 karaktere.';
    }
    if ($password !== $confirmPassword) {
        $errors[] = 'Fjalëkalimet nuk përputhen.';
    }
    if (!isset($_POST['terms'])) {
        $errors[] = 'Duhet të pranoni kushtet e përdorimit.';
    }

    if (!$errors) {
        $success = true;
        // Kjo formë nuk ruan përdorues në databazë. Lidhni këtu kodin e ruajtjes.
    }
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krijo llogari</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<main class="page-shell">
    <section class="signup-card" aria-labelledby="signup-title">
        <div class="brand-mark" aria-hidden="true">R</div>
        <p class="eyebrow">MIRË SE ERDHËT</p>
        <h1 id="signup-title">Krijo llogarinë</h1>
        <p class="intro">Plotëso të dhënat më poshtë për t'u regjistruar.</p>

        <?php if ($success): ?>
            <div class="notice success" role="status">
                Regjistrimi u validua me sukses për <strong><?= escape($email) ?></strong>.
                <span>Ky shembull nuk i ruan të dhënat në databazë.</span>
            </div>
        <?php endif; ?>

        <?php if ($errors): ?>
            <div class="notice error" role="alert">
                <strong>Kontrolloni këto fusha:</strong>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= escape($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="signup.php">
            <label for="name">Emri dhe mbiemri</label>
            <input id="name" name="name" type="text" autocomplete="name" placeholder="p.sh. Reis Shehu" value="<?= escape($name) ?>" required>

            <label for="email">Emaili</label>
            <input id="email" name="email" type="email" autocomplete="email" placeholder="emri@shembull.com" value="<?= escape($email) ?>" required>

            <label for="password">Fjalëkalimi</label>
            <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Të paktën 8 karaktere" minlength="8" required>

            <label for="confirm_password">Konfirmo fjalëkalimin</label>
            <input id="confirm_password" name="confirm_password" type="password" autocomplete="new-password" placeholder="Shkruaje përsëri fjalëkalimin" required>

            <label class="terms">
                <input type="checkbox" name="terms" required>
                <span>Pranoj kushtet e përdorimit dhe politikën e privatësisë.</span>
            </label>

            <button type="submit">Krijo llogari <span aria-hidden="true">→</span></button>
        </form>
        <p class="login-prompt">Ke tashmë një llogari? <a href="#">Hyr këtu</a></p>
    </section>
</main>
</body>
</html>
