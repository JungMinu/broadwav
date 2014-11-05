<?php
session_start();
$_SESSION['usrid'] =$_GET['id'];
?>
<script>
location.href="/timeline/"
</script>