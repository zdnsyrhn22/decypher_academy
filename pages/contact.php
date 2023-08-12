<?php require('../data/courses_data.php'); ?>
<?php require('../data/contact_data.php'); ?>

<?php include '../components/header.php' ?>

<div class="contact">
    <div class="container">
        <div class="content-section">
            <div class="maps">
                <iframe src="<?= $hero_contact['maps_src'] ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-us">
                <div class="title-section">
                    <div class="title">
                        <h2><?= $hero_contact['title'] ?></h2>
                        <p><?= $hero_contact['desc'] ?></p>
                    </div>
                </div>

                <form action="/decypher/controllers/email.php" method="POST" target="_blank" rel="noopener noreferrer">

                    <div class="combo-form">
                        <div class="input-form">
                            <label for="firstname">firstname</label>
                            <input type="text" id="firstname" name="firstname" placeholder="firstname" required>
                        </div>
                        <div class="input-form">
                            <label for="lastname">lastname</label>
                            <input type="text" id="lastname" name="lastname" placeholder="lastname" required>
                        </div>
                    </div>

                    <div class="input-form">
                        <label for="email">email</label>
                        <input type="text" id="email" name="email" placeholder="you@company.com" required>
                    </div>

                    <div class="input-form">
                        <label for="no-handphone">no handphone</label>
                        <input type="text" id="no-handphone" name="no-handphone" placeholder="081112233344" required>
                    </div>

                    <div class="input-form">
                        <label for="message">message</label>
                        <textarea id="message" name="message" class="" id="" cols="100%" rows="10" required></textarea>
                    </div>

                    <div class="btn-contact">
                        <button class="btn btn-primary" type="submit">Submit Form</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="contact-info">
        <div class="title-section-middle">
            <div class="title">
                <h2><?= $contact_info['title'] ?></h2>
                <p><?= $contact_info['desc'] ?></p>
            </div>
        </div>
        <div class="content-section">
            <?php foreach ($contact_info['list'] as $row) : ?>
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <img src="<?= $row['icon'] ?>" class="card-icon" alt="icon-chat">
                            <div class="card-title">
                                <h5><?= $row['title'] ?></h5>
                                <p><?= $row['subtitle']  ?></p>
                            </div>
                        </div>
                        <div class="card-content">
                            <?php foreach ($row['info'] as $info) : ?>
                                <p> <a href="<?= $info['link'] ?>" target="_blank" rel="noopener noreferrer"> <?= $info['text'] ?> </a></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include "../components/modalForm.php" ?>
<?php include '../components/footer.php' ?>