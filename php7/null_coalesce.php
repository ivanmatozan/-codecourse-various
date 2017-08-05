<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'Anonymous';

$name = $_GET['name'] ?? 'Anonymous';
$name = $_GET['name'] ?? $_GET['name'] ?? 'Anonymous';

echo $name;