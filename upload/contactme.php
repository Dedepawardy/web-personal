<?php
// Tambahkan ini di file PHP yang mengatur tampilan dasbor, misalnya dashboard.php

// Fungsi untuk menampilkan menu dashboard
function display_dashboard_menu() {
    // Output menu-menu yang ada di dalam dashboard
    echo '<ul>';
    echo '<li><a href="dashboard.php">Dashboard</a></li>';
    echo '<li><a href="profile.php">Profile</a></li>';
    echo '<li><a href="settings.php">Settings</a></li>';
    // Tambahkan menu "Contact Me" di sini
    echo '<li><a href="contact.php">Contact Me</a></li>';
    echo '</ul>';
}

// Panggil fungsi untuk menampilkan menu dashboard
display_dashboard_menu();
?>
