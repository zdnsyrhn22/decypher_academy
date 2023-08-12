<?php require('../data/about_data.php'); ?>
<?php require('../data/courses_data.php'); ?>

<?php include '../components/header.php' ?>

<!-- hero-about -->
<div class="hero-about">
  <div class="container">
    <div class="title-section">
      <div class="title">
        <h1><?= $hero_about['title'] ?></h1>
        <p><?= $hero_about['desc'] ?></p>
      </div>
    </div>
  </div>

  <div class="content-section">
    <?php foreach ($hero_about['activity'] as $row) : ?>
      <img src="<?= $row['img'] ?>" alt="" width="<?= $row['width'] ?>">
    <?php endforeach; ?>
  </div>

</div>

<div class="container">

  <!-- our story -->
  <div class="our-story">
    <div class="title-section">
      <div class="title">
        <h3><?= $out_story['title'] ?></h3>
        <p><?= $out_story['desc'] ?></p>
      </div>
    </div>
  </div>

  <!-- visi misi -->
  <div class="visi-misi">
    <div class="title-section-middle">
      <div class="title">
        <h2><?= $mission['title'] ?></h2>
        <p><?= $mission['desc'] ?></p>
      </div>
    </div>
    <div class="content-section">
      <?php foreach ($mission['list'] as $row) : ?>
        <div class="card">
          <img src="<?= $row['img'] ?>" class="card-icon" alt="icon-visi-misi">
          <h5><?= $row['title'] ?></h5>
          <p><?= $row['desc'] ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <!-- our team -->
  <div class="our-team">
    <div class="title-section-middle">
      <div class="title">
        <h2><?= $ourTeam['title'] ?></h2>
        <p><?= $ourTeam['desc'] ?></p>
      </div>
    </div>
    <div class="content-section">
      <?php foreach ($ourTeam['list'] as $row) : ?>
        <div class="card">
          <img class="card-image" src="<?= $row['img'] ?>" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              <?= $row['name'] ?>
            </h5>
            <p class="card-text">
              <?= $row['desc'] ?>
            </p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>


</div>

<?php include "../components/modalForm.php" ?>
<?php include "../components/footer.php" ?>