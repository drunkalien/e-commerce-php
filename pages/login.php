<main class="auth">
  <div class="container">
    <section class="login">
      <h2>Login</h2>

      <form class="login-form form" action="" method="POST">
        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter your email" onchange="cache_email()">
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <p id="error"></p>
        <div class="form-control">
          <button name="login" class="btn">Login</button>
        </div>
      </form>

      <div class="auth-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </section>

  </div>
</main>

<?php
include "application_top.php";

echo "<script>
const email = document.getElementById('username');
function cache_email() {
  localStorage.setItem('cached_email', uname.value);
}
email.value = localStorage.getItem('cached_email') || ''
</script>";

function login($email, $password)
{
  global $connection;
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($password == $row["PASSWORD"]) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }  
}

if (isset($_POST["login"])) {
  $email = trim(strtolower($_POST["email"]));
  $password = trim(($_POST["password"]));

  if (login($email, $password)) {
    $_SESSION["email"] = $email;
    header("Location: index.php?login=success");
  } else {
    echo "<script> error.innerHTML='Invalid Username or Password'</script>";
  }
}
?>