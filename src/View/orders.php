<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDERS</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- bootstrap icons -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
</head>

<body>
    <!-- navigation section -->
    <div class="container-fluid navbar-light bg-light">
        <?php include "../inc/menu.php"; ?>
    </div>
    <div class="container mt-3">
        <?php include "../Controller/user/orders.php";?>
    </div>
    <!-- footer section -->
    <?php include "../inc/footer.php";?>
</body>

</html>