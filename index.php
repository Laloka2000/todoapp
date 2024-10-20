<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit">Add Task</button>
        </form>
        <ul>
            <?php
            $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];
            foreach ($tasks as $index => $task) {
                echo "<li>" . htmlspecialchars($task) . " <a href='delete_task.php?index=$index'>Delete</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>