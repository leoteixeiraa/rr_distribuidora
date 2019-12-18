<?php
session_start();
session_destroy();
header('Location: http://177.85.98.125/~rrdistri/index.php');
exit();