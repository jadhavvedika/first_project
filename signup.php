<?php

session_start();

$errors = [
  'login' => $_SESSION['login_error'] ?? '',
  'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error)
{
  return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm)
{
  return $formName === $activeForm ? 'active' : '';
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Sign Up - Swadishta Puranpoli Gruh</title>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand logo" href="#"><img src="logo.png" alt="logo" /></a>

      <!-- Hamburger Button -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu Items -->
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNav">
        <ul class="navbar-nav gap-5">
          <li class="nav-item">
            <a class="nav-link" href="index.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mycart.php">MY CART</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visitus.html">VISIT-US</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- login section -->

  <div class="login-container">
    <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
      <form action="login_register.php" method="post">
        <h2 id="log">LOGIN</h2>
        <?= showError($errors['login']); ?>
        <input type="email" name="email" placeholder="Email" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required />
        <button type="submit" name="login">LOGIN</button>
        <p class="text-center mt-4">
          Don't have an account?
          <a href="#" onclick="showForm('register-form')">Create</a>
        </p>
      </form>
    </div>

    <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
      <form action="login_register.php" method="post">
        <h2 id="log">Create your Account here.</h2>
        <?= showError($errors['register']); ?>
        <input
          type="text"
          name="name"
          placeholder="Enter Your full Name here."
          required />
        <input type="email" name="email" placeholder="Email" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required />

        <select name="role" required>
          <option value="">-- Select Role--</option>
          <option value="User">User</option>
          <option value="Admin">Admin</option>
        </select>
        <button type="submit" name="register">CREATE</button>
        <p class="text-center mt-4">
          Already have an account?
          <a href="#" onclick="showForm('login-form')">Login</a>
        </p>
      </form>
    </div>
  </div>

  <script>
    function showForm(formId) {
      document
        .querySelectorAll(".form-box")
        .forEach((form) => form.classList.remove("active"));
      document.getElementById(formId).classList.add("active");
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <footer>
    <div class="footer-bottomm">
      <p>© Swadishta Puranpoli Gruh . All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>