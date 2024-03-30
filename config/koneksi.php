<?php
$db = new mysqli("localhost","root","","kuliah_x2034_db");
if ($db->connect_errno >0)
echo "ada masalah dengan database atau koneksi";
?>