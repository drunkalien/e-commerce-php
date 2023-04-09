<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <?php
  include "headDefaults.php"
  ?>
  <link rel="stylesheet" href="./styles/products.css" />
</head>

<body>
  <div class="login-success">You logged in successfully!</div>
  <?php
  include "components/header.php";
  include "pages/home.php";
  include "components/footer.php";
  ?>
  <script>
    const url = new URL(window.location.href);
    // removing previously cached username from login form
    if (localStorage.getItem("cached_uname")) {
      localStorage.removeItem("cached_uname");
    }
    // This script is used to remove the login=success query parameter from the URL
    if (url.searchParams.get("login") === "success") {
      // showing the login success message and hiding it after 5 seconds
      document.querySelector(".login-success").style.opacity = "1";
      window.history.replaceState({}, document.title, url.pathname);
      setTimeout(() => {
        document.querySelector(".login-success").style.opacity = "0";
      }, 5000);
    }
  </script>
</body>


</html>