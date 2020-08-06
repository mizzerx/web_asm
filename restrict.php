<?php
session_start();
if (!$_SESSION['usr'] && !$_SESSION['usr']) {
    header("Location: login.html");
} ?>
