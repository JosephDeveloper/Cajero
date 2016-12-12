<!DOCTYPE html>
<html lang="en">

    <?php include HTML_DIR . 'overall/header.php';?>

<body>

    <?php require_once HTML_DIR . 'overall/topnav.php';?>

    <?php if (!isset($_SESSION['id'])) {
    include HTML_DIR . 'public/login.html';}?>


    <!-- jQuery -->
    <script src="views/bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="views/bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="views/bootstrap/js/jquery.easing.min.js"></script>
    <script src="views/bootstrap/js/scrolling-nav.js"></script>

</body>

</html>
