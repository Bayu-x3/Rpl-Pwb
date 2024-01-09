<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tugas Pwb</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form method="POST" action="welcome.php">
      <div class="mb-3">
        <label for="FirstName" class="form-label">First name :</label>
        <input type="text" class="form-control" name="first" id="first" required>
      </div>

      <div class="mb-3">
        <label for="LastName" class="form-label">Last name :</label>
        <input type="text" class="form-control" name="last" id="last" required>
      </div>

      <div class="mb-3">
        <label for="Gender" class="form-label">Gender</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="male" id="male">
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="female" id="female">
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="Nationality" class="form-label">Nationality</label><br>
        <select class="form-select" name="country" id="country">
          <option value="Indonesia">Indonesia</option>
          <option value="Inggris">Inggris</option>
          <option value="Jepang">Jepang</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="Language" class="form-label">Language Spoken</label><br>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="language[]" value="Indonesia" id="indonesia">
          <label class="form-check-label" for="indonesia">Indonesia</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="language[]" value="Inggris" id="inggris">
          <label class="form-check-label" for="inggris">Inggris</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="language[]" value="Other" id="other">
          <label class="form-check-label" for="other">Others</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="Bio" class="form-label">Bio</label><br>
        <textarea class="form-control" name="bio" id="bio" cols="30" rows="10" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
