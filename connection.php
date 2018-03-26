<?php
require 'config.php';

$db = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die("Problem u konekciji, probajte kasnije!");
$sql = "SELECT * FROM oglasi";

$query = mysqli_query($db,$sql);
