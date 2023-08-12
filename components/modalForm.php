<div class="modal" id="modal-form">

  <button class="btn btn-close-modal" id="btn-close-modal-form" onclick="btnCloseModal(this)"><i class="fas fa-xmark"></i></button>

  <form action="/decypher/controllers/whatsapp.php" method="POST" target="_blank" rel="noopener noreferrer">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="modal-title">Course Registration</h4>
      </div>

      <div class="modal-body">

        <div class="form-section">
          <div class="input-form">
            <label for="course">course</label>
            <select id="course" name="course" required>
              <option id="0" value="">choose</option>
              <?php foreach ($course['list'] as $row) : ?>
                <option id="<?= $row['id'] ?>" value="<?= $row['title'] ?>"><?= $row['title'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="input-form">
            <label for="kelas">class</label>
            <select id="kelas" name="kelas" required>
              <option value="">choose</option>
              <option value="online">online</option>
              <option value="offline">offline</option>
            </select>
          </div>
        </div>


        <div class="form-section">

          <h5>Personal data</h5>

          <div class="combo-form">
            <div class="input-form">
              <label for="firstname">firstname</label>
              <input type="text" name="firstname" id="firstname" placeholder="firstname" required>
            </div>

            <div class="input-form">
              <label for="lastname">lastname</label>
              <input type="text" name="lastname" id="lastname" placeholder="lastname" required>
            </div>
          </div>

          <div class="input-form">
            <label for="birthday">date of birth</label>
            <input type="date" name="birthday" id="birthday" placeholder="lorem ipsum" required>
          </div>

          <div class="input-form">
            <label for="handphone">no handphone</label>
            <input type="text" name="handphone" id="handphone" placeholder="081112233344" required>
          </div>

          <div class="input-form">
            <label for="email">email</label>
            <input type="text" name="email" id="email" placeholder="you@company.com" required>
          </div>

        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">registration</button>
      </div>
    </div>
  </form>

</div>