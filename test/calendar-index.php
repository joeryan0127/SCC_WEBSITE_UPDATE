<?php include 'Student/includes/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calendar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.webp" rel="icon">
    <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Template Calendar CSS File -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <link href="assets/css/calendar-style.css" rel="stylesheet">
</head>

<body>

    <!-- End Header Link -->
    <?php
    include 'headers/navigation-bar.php';
    ?>
    <section class="calendar-container">
        <div class="section-title" data-aos="zoom-in">
            <h2>Calendar of Activities</h2>
            <p>Cecilian Events</p>
        </div>
        <div class="container-fluid py-5" id="page-container" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div id="calendar"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php
    $schedules = $conn->query("SELECT * FROM `schedule_list`");
    $sched_res = [];
    foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
        $row['sdate'] = date("F d, Y h:i A", strtotime($row['start_datetime']));
        $row['edate'] = date("F d, Y h:i A", strtotime($row['end_datetime']));
        $sched_res[$row['id']] = $row;
    }
    ?>
    <?php
    if (isset($conn)) $conn->close();
    ?>

    <!-- ======= Footer ======= -->
    <?php
    include 'headers/footer.php'
    ?>

</body>

<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./fullcalendar/lib/main.min.js"></script>

<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>
