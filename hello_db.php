<?php
include('config/init.php');

//this won't work until you set up a database and connect to it with config.php

$result = dbQuery("SELECT * FROM messages limit 1")->fetch();

echo "<h1>".$result['MessageBody']."</h1>";
