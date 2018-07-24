<?php
require 'database/querybuilder.php';
$db = new QueryBuilder;
$data = [
    "title" => $_POST["title"],
    "content" => $_POST["content"]


];
$db->store("tasks", $data);

