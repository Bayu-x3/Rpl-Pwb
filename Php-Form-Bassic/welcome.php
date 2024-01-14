<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4">
      <?php
        $first_name = $_POST['first'];
        $last_name = $_POST['last'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $languages = $_POST['language'];
        $bio = $_POST['bio'];

        echo "<h1 class='text-center'>Welcome " . ($first_name !== "Tidak teridentifikasi" ? $first_name : "<em>Tidak teridentifikasi</em>") . " " . ($last_name !== "Tidak teridentifikasi" ? $last_name : "<em>Tidak teridentifikasi</em>") . "</h1>" ; 
        echo "<br>";
        echo "Gender: " . ($gender !== "Tidak teridentifikasi" ? $gender : "<em>Tidak teridentifikasi</em>");
        echo "<br>";
        echo "Nationality: " . ($country !== "Tidak teridentifikasi" ? $country : "<em>Tidak teridentifikasi</em>");
        echo "<br>";
        echo "Language Spoken: " . (is_array($languages) ? implode(", ", $languages) : ($languages !== "Tidak teridentifikasi" ? $languages : "<em>Tidak teridentifikasi</em>"));
        echo "<br>";
        echo "Bio: $bio";
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
