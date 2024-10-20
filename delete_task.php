<?php
if (isset($_GET['index'])) {
    $index = (int) $_GET['index'];
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        $tasks = array_values($tasks); // Re-index the array
        file_put_contents('tasks.json', json_encode($tasks));
    }
}
header('Location: index.php');
exit();