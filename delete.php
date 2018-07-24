<?php
require 'database/querybuilder.php';
$db = new QueryBuilder;
$db->delete("tasks", $id);