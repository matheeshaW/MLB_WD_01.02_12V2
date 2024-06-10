<!-- Amarasekara D.I.-->
<!DOCTYPE html>
<head>
<?php require("Header.php");
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <form action="insert.php" method="post"class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
      <h1>FAQ</h1>
        <input type="text" id="name" name="name" placeholder="Username" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <textarea id="message" name="message" placeholder="Message..." rows="5" required></textarea>
        <button type="submit" >Submit</button>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </form>

</body>
<?php require("Footer.php");
?>
</html>