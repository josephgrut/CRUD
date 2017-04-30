<?php
echo "<h1>New database</h1>";

require_once 'model/model.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at']))
{
    $result = insert($_POST['name'], $_POST['description'], $_POST['created_at']);
    var_dump($result);
}
require_once 'view/indexTemplate.php';