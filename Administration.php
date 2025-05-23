<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      background-color: black;
      color: red;
      font-family: "Courier New", Courier, monospace;
    }

    .login-container {
      max-width: 300px;
      margin: 100px auto;
      padding: 20px;
      background-color: black;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      background-color: black;
      color: red;
      border: 1px solid red;
    }

    #c {   
      position: relative;
      top: 397px;
      left: 800px;
      text-decoration: none;
      text-align: left;
      color: #b71c1c;
      font: size 10px;
      font-weight: bolder;
    }

    input[type="submit"] {
      background-color: red;
      color: black;
      cursor: pointer;
    }

    label {
      margin-bottom: 8px;
      display: block;
    }
  </style>
</head>
<body>
  <div id="home">
    <a id="c" href="project.php">HOME</a>
  </div>
  <div class="login-container">
    <h2>Login</h2>
    <form method="post" onsubmit="return login()">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">
    </form>
  </div>
  <script>
    function login() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username === "admin" && password === "4444") {
          alert("Successfully logged in");
          window.location.href = "project.php";
          return false;
      } else {
          alert("Username or password is incorrect!");
          return false;
      }
    }
  </script>
</body>
</html>
