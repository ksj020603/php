<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hello Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">김세준(메인)</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="hello.php">Hello, World (반복문)</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.html">로그인</a>
    </li>
  </ul>
</nav>
<br>

</body>
</html>


<?php
for($i=0; $i<=100; $i=$i+1)
{
    echo $i."Hello World; <br />";
}
?>
