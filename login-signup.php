<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / Signup</title>

    <link rel="stylesheet" href="./assets/css/loginform.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header" data-header>
      <div class="container">
        <div class="overlay" data-overlay></div>

        <a href="./index.php" class="logo">
          <img src="./assets/images/logo.svg" alt="Filmlane logo" />
        </a>
      </div>
    </header>


    <main>
      <div class="form-modal">
        <div class="form-toggle">
          <button id="login-toggle" onclick="toggleLogin()">log in</button>
          <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>

        <div id="login-form">
          <form>
            <input id="emailuser" name="emailuser" type="text" placeholder="Enter email or username" />
            <input id="lopassword" name="password" type="password" placeholder="Enter password" />
            <button type="button" class="btn login" onclick="validateLogin()">login</button>
            <p><a>Forgotten account</a></p>
            <hr />
          </form>
        </div>

        <div id="signup-form">
          <form >
            <input id="email" name="email" type="email" placeholder="Enter your email" />
            <input id="username" name="username" type="text" placeholder="Choose username" />
            <input id="supassword" name="password" type="password" placeholder="Create password" />
            <button type="button" class="btn signup" onclick="validateSignUp()">create account</button>
            <p>
              Clicking <strong>create account</strong> means that you are agreeing
              to our <a>terms of services.</a>
            </p>
            <hr />
          </form>
        </div>
      </div>
    </main>

    <script src="assets/js/loginform.js"></script>

  </body>
</html>