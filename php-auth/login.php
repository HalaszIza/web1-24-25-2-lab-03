<?php
    ob_start();
    session_start();
?>

<html>
    <head>
        <title>Login Example</title>
        <link href="docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container form-signin">
            <h2>Enter email and password</h2>
            <?php
                $msg = '';

                if (
                    isset($_POST['login'])
                    && !empty($_POST['email'])
                    && !empty($_POST['password'])
                ) {
                    // MySQL connection
                    // phpauth ARITXU5AUexyvMv)

                    $dbh = new PDO(dns: 'mysql:host=localhost;dbname=phpauth', username: 'phpauth', password: 'ARITXU5AUexyvMv)');
                    $sql = 'SELECT * FROM users WHERE email = :email AND password = SHA1(:password)';
                    $stmt = $dbh->prepare(query: $sql);
                    $stmt->execute(params: array(
                        ':email' => $_POST['email'],
                        ':password' => $_POST['password']
                    ));
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    // [ 'id' => '1', 'email' => 'hello@me.hu', 'password' => 'HASH' ]
                    // FALSE 

                    if ($user) {                    
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['email'] = $_POST['email'];

                        header(header: 'Location: index.php');
                    } else {
                        $msg = 'Wrong email or password';
                    }
                }
            ?>
        </div>

        <div class="container">
            <form class="form-signin" action="" method="post">
                <h4 class="form-singin-heading">
                    <?php echo $msg; ?>
                </h4>
                <div class="form-group">
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="email"
                        require
                        autofocus></br>
                </div>
                <div class="form-group">
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        placeholder="password"
                        require
                        autofocus>
                </div>
                <button
                    class="btn btn-lg btn-primary mt-2"
                    type="submit"
                    name="login">
                        Login
                </button>
            </form>

            <a href="logout.php" title="Logout">Logout</a>

        </div>
    </body>
</html>

