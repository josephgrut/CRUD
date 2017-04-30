<?php
echo "<h1>New database</h1>";

require_once 'model/model.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at']))
{
    insert($_POST['name'], $_POST['description'], $_POST['created_at']);
    header('Location: index.php');
}

require_once 'view/createTemplate.php';