<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="index.php">Go back</a>';
header("Location: index.php");
