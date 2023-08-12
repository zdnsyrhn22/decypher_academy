<?php require('data/home_data.php'); ?>
<?php require('data/courses_data.php'); ?>

<?php include 'components/header.php' ?>

<div class="container">
    <!-- hero section -->
    <div class="hero">
        <img class="hero-img" src="<?= $hero['image'] ?>" alt="hero-img" />
        <div class="hero-content">
            <h1><?= $hero['title'] ?></h1>
            <p>
                <?= $hero['desc'] ?>
            </p>
            <div class="hero-button">
                <a href="#our-services" class="btn btn-primary">Get Started</a>
                <button class="btn btn-secondary" id="btn-youtube"><i class="fas fa-play"></i>Learn How</button>
            </div>
        </div>
    </div>

    <!-- companies section -->
    <div class="companies">
        <div class="title-section-middle">
            <h5 class="text-color-secondary"><?= $companies['title'] ?></h5>
        </div>
        <div class="icon-companies">
            <?php foreach ($companies['images'] as $row) : ?>
                <img src="<?= $row ?>" alt="icon-companies" />
            <?php endforeach; ?>
        </div>
    </div>

    <!--  our services section -->
    <div class="our-services" id="our-services">
        <div class="title-section-middle">
            <div class="title">
                <h2><?= $our_services['title'] ?></h2>
                <p><?= $our_services['subtitle'] ?></p>
            </div>
        </div>
        <div class="content-section">
            <?php foreach ($our_services['services'] as $row) : ?>
                <div class="card">
                    <img src="<?= $row['img'] ?>" class="card-icon" alt="icon-our-learners" />
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- benefit section -->
    <div class="benefit">
        <img class="benefit-img" src="<?= $benefits['image'] ?>" alt="" />
        <div class="benefit-content">
            <h2><?= $benefits['title'] ?></h2>
            <p><?= $benefits['desc'] ?></p>
            <ul class="list-item">
                <?php foreach ($benefits['list'] as $row) : ?>
                    <li> <img src="assets/icons/check.png" alt=""> <span><?= $row ?></span> </li>
                <?php endforeach; ?>
            </ul>
            <div class="benefit-button">
                <button class="btn btn-primary" id="btn-join">join now</button>
            </div>
        </div>
    </div>

    <!-- roadmap section -->
    <div class="roadmap">
        <div class="title-section">
            <h3><?= $roadmap['title'] ?></h3>
        </div>

        <div class="content-section">
            <?php foreach ($roadmap['list'] as $row) : ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="<?= $row['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $row['title'] ?></a>
                        </h4>
                        <p class="card-text">
                            <?= $row['text'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- popular course section -->
    <div class="pop-course">
        <div class="title-section">
            <h3>Popular Course</h3>
            <a href="pages/courses.php" class="pop-course-link">See all <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="content-section">
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <div class="card">
                    <img class="card-image" src="<?= $course['list'][$i]['image'] ?>" alt="" />
                    <div class="card-body">
                        <div>
                            <h4 class="card-title"><?= $course['list'][$i]['title'] ?></h4>
                            <p class="card-text"><?= $course['list'][$i]['text'] ?></p>
                        </div>
                        <div class="card-button">
                            <button class="btn btn-primary" id="btn-join" value="<?= $course['list'][$i]['id'] ?>">enroll course</button>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- email section -->
    <div class="email">
        <div class="card-email">
            <div class="card-email-body">
                <h2><?= $email['title'] ?></h2>
                <p><?= $email['desc'] ?></p>

                <form action="controllers/subscription.php" method="POST">
                    <div class="form-email">
                        <input class="input-email" type="text" name="email" id="email" placeholder="enter your email address">
                        <button class="btn btn-email" type="submit">submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

</div>

<?php include "components/modalYoutube.php" ?>
<?php include "components/modalForm.php" ?>
<?php include 'components/footer.php' ?>