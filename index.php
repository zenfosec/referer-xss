<?php header('X-XSS-Protection: 0'); header('Referrer-Policy: unsafe-url');?>
<!DOCTYPE html>
<html>
<head>
<title>Referer based XSS testing</title>
</head>
<body>
<script>window.location.replace('<?php echo $_GET['target']; ?>');</script>
</body>
</html>