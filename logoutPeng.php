<?php
// Mulai sesi
session_start();

// Hancurkan sesi
session_destroy();

// Alihkan ke halaman login
header("Location: index.php");
exit();
?>