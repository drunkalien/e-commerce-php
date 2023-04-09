<main class="auth">
  <div class="container">
    <section class="login">
      <h2>Login</h2>

      <form class="login-form form" action="" method="POST">
        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter your username" onchange="cache_uname()">
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
include "configure.php";

// Prefiilling the username field
echo "<script>
const uname = document.getElementById('username');
function cache_uname() {
  localStorage.setItem('cached_uname', uname.value);
}
uname.value = localStorage.getItem('cached_uname') || ''
</script>";

// $username and $password is coming from configure.php
function login($username, $password)
{
  return $username == username && $password == password;
}

if (isset($_POST["login"])) {
  $username = trim(strtolower($_POST["username"]));
  $password = trim(($_POST["password"]));

  if (login($username, $password)) {
    $_SESSION["username"] = $username;
    header("Location: index.php?login=success");
  } else {
    echo "<script> error.innerHTML='Invalid Username or Password'</script>";
  }
}
?>