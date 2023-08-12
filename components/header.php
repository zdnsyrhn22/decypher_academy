<?php
$pages = $_SERVER['SCRIPT_NAME'];

$pageTitle = explode('/', $pages);

$pageTitle = $pageTitle[count($pageTitle) - 1];

$pageTitle = explode('.', $pageTitle);

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/decypher/assets/stylesheets/style.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/header.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/home.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/about.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/course.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/contact.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/isa.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/footer.css" />
    <link rel="stylesheet" href="/decypher/assets/stylesheets/modal.css" />

    <link rel="icon" href="/decypher/assets/images/tab-icon.png">

    <title>Decypher | <?= $pageTitle[0] !== "index" ? ucfirst($pageTitle[0]) : "Home" ?></title>
</head>

<body>

    <header class="container">
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="/decypher"><img class="nav-icon" src="/decypher/assets/images/logo-2.png" alt=""></a>
            </div>

            <ul class="navbar-nav list-item">
                <li class="nav-item">
                    <a class="nav-link <?= ($pages == "/decypher/index.php") ? "active" : "" ?>" id="home" aria-current="page" href="/decypher">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($pages == "/decypher/pages/courses.php") ? "active" : "" ?>" id="courses" href="/decypher/pages/courses.php">courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="student" href="#">for student <i class="fa-solid fa-caret-down"></i></a>
                </li>
                <ul class="dropdown-content">
                    <li class="nav-item">
                        <a class="<?= ($pages == "/decypher/pages/isa.php") ? "active" : "" ?>" id="Ebook" href="/decypher/pages/isa.php">
                            <div class="nav-drodown-card">
                                <img src="/decypher/assets/icons/stamp.png" alt="" class="card-icon">
                                <div class="card-desc">
                                    <h5>Income Share Agreement</h5>
                                    <p>A payment program that will focus you on your learning process</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?= ($pages == "/decypher/pages/share your creation.php") ? "active" : "" ?>" id="share your creation" href="#">
                            <div class="nav-drodown-card">
                                <img src="/decypher/assets/icons/ebook.png" alt="" class="card-icon">
                                <div class="card-desc">
                                    <h5>Our library <span>upcoming</span></h5>
                                    <p>Text-based tutorials to increase your knowledge of technology.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?= ($pages == "/decypher/pages/isa.php") ? "active" : "" ?>" id="isa" href="#">
                            <div class="nav-drodown-card">
                                <img src="/decypher/assets/icons/web-design.png" alt="" class="card-icon">
                                <div class="card-desc">
                                    <h5>Project Showcase <span>upcoming</span></h5>
                                    <p>Showcase your projects to build your portfolio.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link <?= ($pages == "/decypher/pages/about.php") ? "active" : "" ?>" id="about" href="/decypher/pages/about.php">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($pages == "/decypher/pages/contact.php") ? "active" : "" ?>" id="contact" href="/decypher/pages/contact.php">contact</a>
                </li>
            </ul>

            <ul class="navbar-nav nav-btn-join">
                <li class="nav-link"><button class="btn btn-primary" id="btn-join">Join Now</button></li>
            </ul>

            <ul class="navbar-mobile">
                <li class="nav-link"><button class="btn btn-primary" id="btn-navbar-mobile" value="false"><i class="fas fa-bars"></i></button></li>
            </ul>
        </nav>

    </header>

    <?php if (isset($_SESSION['status'])) : ?>
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="content-section">
                <div class="toast-body">
                    <?= $_SESSION['status'] ?>
                </div>
                <button type="button" class="btn" data-bs-dismiss="toast" aria-label="Close"><i class="fas fa-xmark"></i></button>
            </div>
        </div>
        <?php unset($_SESSION['status']) ?>
    <?php endif; ?>