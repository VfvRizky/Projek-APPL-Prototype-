<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/image/LOGOweb.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Data-data</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <section id="hero-background" class="hero is-fullheight">
            <div class="hero-body">
              <div class="container">
                <div class="columns is-centered is-gapless">
                  <div class="column is-4">
                    <div class="hero has-text-centered">
                        <div class="container">
                            <img src="assets/image/LogooIcon.png" alt="logo Login" >
                        </div>
                    
                    </div>
                  </div>
                  <div class="column is-5">
                    <div class="box">
                      <div class="field">
                        <label for="" class="label is-medium">Username</label>
                        <div class="control has-icons-left">
                          <input type="text" name="username" placeholder="username" class="input is-primary is-medium" required>
                          <span class="icon is-medium is-left">
                            <i class="fa fa-envelope"></i>
                          </span>
                        </div>
                      </div>
                      <br>
                      <div class="field">
                        <label for="" class="label is-medium">Password</label>
                        <div class="control has-icons-left">
                          <input type="password" name="password" placeholder="password" class="input is-primary is-medium" required>
                          <span class="icon is-medium is-left">
                            <i class="fa fa-lock"></i>
                          </span>
                        </div>
                      </div>
                      <br>
                      <div class="field">
                        <a href="index.php">
                            <button class="button is-block is-fullwidth is-primary is-medium">
                            Login
                            </button>
                        </a>
                        <br>
                        <a href="home.php">
                            <button class="button is-block is-fullwidth is-primary is-medium">
                            Kembali
                            </button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = new mysqli("localhost", "root", "", "tugaskelompok");

    $sql = "SELECT * FROM user where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            header("Location: index.php"); //kehome/beranda
        }
    } else {
        echo "Username dan Password salah";
    }
}
?>

</html>