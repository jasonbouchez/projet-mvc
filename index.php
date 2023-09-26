<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestionnaire de Tâches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestionnaire de Tâches</h1>
    <input type="text" id="taskInput" placeholder="Nouvelle tâche">
    <button id="addTask">Ajouter</button>
    <ul id="taskList"></ul>
    <?
    include("../http/get.php");
    include("../http/post.php");
    include_once("../http/get.php");
    ?>
</body>
</html>