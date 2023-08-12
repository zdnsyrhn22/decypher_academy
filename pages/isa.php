<?php require('../data/isa_data.php'); ?>

<?php include '../components/header.php' ?>

<div class="container">
    <!-- hero section -->
    <div class="hero hero-isa">
        <img class="hero-img" src="<?= $hero_isa['image'] ?>" alt="hero-img" />
        <div class="hero-content">
            <h1><?= $hero_isa['title'] ?></h1>
            <p>
                <?= $hero_isa['desc'] ?>
            </p>
        </div>
    </div>

    <div class="isa-benefit">
        <div class="title-section">
            <h3><?= $isa_benefit['title'] ?></h3>
        </div>
        <div class="content-section">
            <?php foreach ($isa_benefit['list'] as $row) : ?>
                <div class="card">
                    <img src="<?= $row['img'] ?>" class="card-icon" alt="icon-visi-misi">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p><?= $row['desc'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="isa-terms">
        <div class="title-section">
            <h3><?= $isa_terms['title'] ?></h3>
        </div>

        <div class="content-section">
            <?php foreach ($isa_terms['list'] as $row) : ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?= $row['title'] ?>
                        </h4>
                        <p class="card-text">
                            <?= $row['text'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?php include "../components/modalForm.php" ?>
<?php include '../components/footer.php' ?>