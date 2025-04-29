<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $question = htmlspecialchars(trim($_POST['question']));
    $date = date('Y-m-d H:i:s');

    $newEntry = [
        'name' => $name,
        'email' => $email,
        'question' => $question,
        'date' => $date
    ];

    $file = 'data.json';
    if (file_exists($file)) {
        $data = json_decode(file_get_contents($file), true);
    } else {
        $data = [];
    }

    $data[] = $newEntry;

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    header('Location: questions.php');
    exit();
} else {
    echo "طلب غير صالح.";
}
?>