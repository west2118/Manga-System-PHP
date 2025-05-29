<?php
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}
?>

<link rel="stylesheet" href="../Style/navbar.css">

<nav class="navbar">
    <div class="nav-container">
        <a href="#" class="logo">
            <i class="fas fa-book-open"></i>
            <span>MangaVerse</span>
        </a>

        <ul class="nav-links">
            <li><a href="/Manga-System/">Home</a></li>
            <li><a href="/Manga-System/View/mangasPage.php">Manga</a></li>
            <li><a href="/Manga-System/Controllers/logout.php">Logout</a></li>
        </ul>

        <div class="nav-actions">
            <div class="nav-search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search manga...">
            </div>

            <?php if (isset($user_id)): ?>
                <div class="user-actions">
                    <a href="/Manga-System/View/favorites.php"><i class="fas fa-bookmark"></i></a>
                    <a href="/Manga-System/View/userInfo.php"><i class="fas fa-user"></i></a>
                </div>
            <?php else: ?>
                <a href="View/login.php">Sign In</a>
                <a href="View/signUp.php">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>