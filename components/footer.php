<?php require('/xampp/htdocs/decypher/data/contact_data.php'); ?>

<footer class="container">

    <div class="navbar-brand">
        <a href="/decypher"><img class="nav-icon" src="/decypher/assets/images/logo-2.png" alt=""></a>
    </div>

    <!-- footer item -->
    <div class="item-footer">
        <div class="column-footer">
            <div class="address">
                <h5>Address</h5>
                <ul class="list-item list-item-footer">
                    <?php foreach ($contact_info['list'][1]['info'] as $row) : ?>
                        <li><a href="<?= $row['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $row['text'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="column-footer">
            <div class="number">
                <h5>Phone Number</h5>
                <ul class="list-item list-item-footer">
                    <?php foreach ($contact_info['list'][2]['info'] as $row) : ?>
                        <li><a href="<?= $row['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $row['text'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="column-footer">
            <div class="faq">
                <h5>Faq</h5>
                <ul class="list-item list-item-footer">
                    <li><a href="/decypher/index.php" target="_blank" rel="noopener noreferrer">online chat</a></li>
                    <li><a href="/decypher/index.php" target="_blank" rel="noopener noreferrer">call admin</a></li>
                    <li><a href="/decypher/index.php" target="_blank" rel="noopener noreferrer">leave message</a></li>
                </ul>
            </div>
        </div>

        <div class="column-footer">
            <div class="sosmed">
                <h5>Social Media</h5>
                <ul class="list-item list-item-footer">
                    <li><a href="https://www.youtube.com/@decypheracademy" target="_blank" rel="noopener noreferrer">youtube</a></li>
                    <li><a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">instagram</a></li>
                    <li><a href="https://www.twitter.com/" target="_blank" rel="noopener noreferrer">twitter</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>

<script src="/decypher/assets/javascripts/course.js"></script>
<script src="/decypher/assets/javascripts/header.js"></script>
<script src="/decypher/assets/javascripts/modal.js"></script>
<script src="/decypher/assets/javascripts/toast.js"></script>

</body>


</html>