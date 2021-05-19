<?php
session_start();
unset($_SESSION["slog"]);
header("Location:signin.php");
?>