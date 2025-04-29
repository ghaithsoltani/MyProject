<?php
$file = 'data.json';
$questions = [];

if (file_exists($file)) {
    $questions = json_decode(file_get_contents($file), true);
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>الأسئلة المرسلة</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>جميع الأسئلة</h2>

    <?php if (!empty($questions)): ?>
        <?php foreach ($questions as $q): ?>
            <div class="question">
                <h3><?= htmlspecialchars($q['name']) ?> (<?= htmlspecialchars($q['email']) ?>)</h3>
                <p><?= nl2br(htmlspecialchars($q['question'])) ?></p>
                <p class="date">بتاريخ: <?= htmlspecialchars($q['date']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>لا توجد أسئلة إلى حد الآن.</p>
    <?php endif; ?>

    <a href="index.html" class="back-link">أرسل سؤال جديد</a>
</div>

</body>
</html>