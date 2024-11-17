<?php
// session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Location: ../../pages/login.php');
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPSO Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/SPSO.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero">
            <div class="advertisement">
                <h1>Dịch vụ in ấn thông minh, tiện lợi, nhanh chóng và dễ dàng</h1>
            </div>
            <button class="view-report-btn">Xem báo cáo</button>
        </section>

        <!-- Edit Section -->
        <section class="section-title">
            <h2>Chỉnh sửa</h2>
            <div class="line-left"></div>
            <div class="line-right"></div>
        </section>

        <section class="action-buttons">
            <div class="action-card">
                <div class="card-title" onclick="window.location.href='printer_info.php'">Thông tin máy in</div>
                <img src="../../assets/printer-settings.png" alt="Printer Settings">
                <p>Chỉnh sửa thông tin các máy in hoặc thêm máy in mới.</p>
            </div>
            <div class="action-card">
                <div class="card-title" onclick="window.location.href='printer_config.php'">Tùy chọn in</div>
                <img src="../../assets/content-management.png" alt="Content Management">
                <p>Chỉnh sửa các cài đặt mặc định như số trang cung cấp, thời gian cung cấp và định dạng tập tin cho phép.</p>
            </div>
        </section>

        <!-- View Section -->
        <section class="section-title">
            <h2>Xem</h2>
            <div class="line-left"></div>
            <div class="line-right"></div>
        </section>

        <section class="action-buttons">
            <div class="action-card">
                <div class="card-title" onclick="window.location.href='print_history.php'">Lịch sử in</div>
                <img src="../../assets/logs.png" alt="Print History">
                <p>Xem lại toàn bộ các lần in đã được thực hiện bởi sinh viên tại trường.</p>
            </div>
            <div class="action-card">
                <div class="card-title" onclick="window.location.href='reports.php'">Báo cáo</div>
                <img src="../../assets/report.png" alt="Reports">
                <p>Xem thống kê hàng tháng, hàng năm được tạo tự động bởi hệ thống.</p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>