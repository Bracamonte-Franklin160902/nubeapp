<?php
$host = "aws-0-us-west-2.pooler.supabase.com";
$db   = "postgres";
$user = "postgres.sjbfpfmgljfczetvhoii";
$pass = "VXClJCJcFIZC4UvI";
$port = "5432";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>