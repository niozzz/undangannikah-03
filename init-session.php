<?php
if (!isset($_SESSION))
{
	session_start();

	
}

$_SESSION['statusTamu'] = "true";

echo "
        <script>
        
        document.location.href='index.php';
        </script>
        ";