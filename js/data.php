<?php
function initializeSessionVariables() {
    // Check if the session is new
    if (!isset($_SESSION['initialized'])) {
        $_SESSION['initialized'] = true;

        // Initialize remaining pages and student pages to 10
        $_SESSION['remaining_pages'] = 10;
        $_SESSION['student_pages'] = 10;

        // Create a new Student object with 10 pages
        $student = new Student(2252442, 'Bảo Lê', 'password', 10);
        $student->save();
    } else {
        // Session has already been initialized; retrieve existing student pages
        $student = new Student(2252442, 'Bảo Lê', 'password', $_SESSION['student_pages']);
    }

    return $student;
}
?>