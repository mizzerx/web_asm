<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/style.css">
  <title>Introduction</title>
</head>

<body>
  <div align="center">
    <h1>Wellcome to my Student Management Website</h1>
    <hr>
  </div>
  <div align="center">
    <h3>Login to Management Site</h3>
    <aside>
      <div align="center">
        <form action="/acction/login.php" method="POST">
            <table>
              <tr>
                <td>Username:</td>
                <td><input type="text" name="usr" id="usr"></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" id="pwd"></td>
              </tr>
            </table>
            <input type="submit" value="Login">
        </form>
      </div>
    </aside>
  </div>
</body>

</html>