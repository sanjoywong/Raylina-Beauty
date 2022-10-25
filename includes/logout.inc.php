<?php
session_start();
session_destroy();
echo 'session detruite !';
header('Emplacement: index.php?salon');