
<?php
session_start();
// include 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM User WHERE email = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $role);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            if ($role == "Client") {
                header("Location: client_dashboard.php");
            } else {
                header("Location: freelancer_dashboard.php");
            }

            exit();

        } else {
            $error = "Invalid email or password.";
        }

    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | AI Freelance</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f8fa;
            color: #17251f;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 9px;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #202d27;
        }

        .logo span {
            color: #2eb872;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            font-size: 13px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-size: 13px;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #2eb872;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #2eb872;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #23975c;
        }

        .error {
            color: red;
            text-align: center;
            font-size: 13px;
            margin-bottom: 15px;
        }

        .register {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #777;
        }

        .register a {
            color: #2eb872;
            text-decoration: none;
            font-weight: bold;
        }

        .home {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
        }

        .home a {
            color: #555;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <div class="logo">
            <span>AI</span> Freelance
        </div>

        <h2>Welcome Back!</h2>

        <p class="subtitle">
            Login to access your account
        </p>

        <?php if ($error != "") { ?>
            <div class="error">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php } ?>

        <form method="POST" action="">

            <label>Email Address</label>
            <input type="email" name="email"
                   placeholder="Enter your email" required>

            <label>Password</label>
            <input type="password" name="password"
                   placeholder="Enter your password" required>

            <label>Login As</label>
            <select name="role" required>
                <option value="">Select your role</option>
                <option value="Client">Client</option>
                <option value="Freelancer">Freelancer</option>
            </select>

            <button type="submit">Log In</button>

        </form>

        <div class="register">
            Don't have an account?
            <a href="register.php">Sign Up</a>
        </div>

        <div class="home">
            <a href="index.php">← Back to Home</a>
        </div>

    </div>

</body>
</html>
