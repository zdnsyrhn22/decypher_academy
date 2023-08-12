<?php require('../data/courses_data.php'); ?>

<?php include '../components/header.php' ?>

<div class="container">
  <div class="course">

    <!-- title section -->
    <div class="title-section-middle">
      <div class="title">
        <h2><?= $course['title'] ?></h2>
        <p><?= $course['desc'] ?></p>
      </div>
    </div>

    <!-- search input -->
    <div class="search-course">
      <div class="search-form">
        <input class="search-input" type="text" name="search" id="search" placeholder="search course">
        <button class="btn btn-search"><i class="fas fa-magnifying-glass"></i></button>
      </div>
    </div>

    <!-- course section -->
    <div class="content-section">

      <?php foreach ($course['list'] as $row) : ?>
        <div class="card">
          <img class="card-image" src="<?= $row['image'] ?>" alt="" />
          <div class="card-body">
            <div class="">
              <h4 class="card-title">
                <?= $row['title'] ?>
              </h4>
              <p class="card-text">
                <?= $row['text'] ?>
              </p>
            </div>
            <div class="card-button">
              <button class="btn btn-primary" id="btn-join" value="<?= $row['id'] ?>">enroll course</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- pagination -->
    <div class="pagination">
      <ul class="list-item list-item-pagination">
        <li class="page-item"><button class="btn page-link" value="first"><i class="fas fa-chevron-left"></i></button></li>
        <li class="page-item"><button class="btn page-link" value="last"><i class="fas fa-chevron-right"></i></button></li>
      </ul>
    </div>

  </div>
</div>

<?php include "../components/modalForm.php" ?>
<?php include "../components/footer.php" ?>