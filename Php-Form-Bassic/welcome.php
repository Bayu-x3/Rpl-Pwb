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
        $gender = $_POST['gender'] ?? "Tidak teridentifikasi";
        $country = $_POST['country'];
        $languages = $_POST['language'] ?? "Tidak teridentifikasi";
        $bio = $_POST['bio'];

        function displayValue($value) {
          return $value !== "Tidak teridentifikasi" ? $value : "<em>Tidak teridentifikasi</em>";
        }

        echo "<h1 class='text-center'>Welcome " . displayValue($first_name) . " " . displayValue($last_name) . "</h1>" ; 
        echo "<br>";
        echo "Gender: " . displayValue($gender);
        echo "<br>";
        echo "Nationality: " . displayValue($country);
        echo "<br>";
        echo "Language Spoken: " . (is_array($languages) ? implode(", ", $languages) : displayValue($languages));
        echo "<br>";
        echo "Bio: $bio";
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
