<?php
session_start();
include("./database/db.php");

$message = "";
$message_type = "";

// 🔐 CSRF Protection (generate token)
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// 🛡️ Limit login attempts
// Initialize login attempt tracking
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['last_login_attempt'] = time();
}

// Lockout check
if ($_SESSION['login_attempts'] >= 5) {
    $timePassed = time() - $_SESSION['last_login_attempt'];

    if ($timePassed < 300) { // 300 seconds = 5 minutes
        $remaining = 300 - $timePassed;
        die("Too many failed attempts. Try again after " . ceil($remaining / 60) . " minutes.");
    } else {
        // Reset after 5 minutes
        $_SESSION['login_attempts'] = 0;
        $_SESSION['last_login_attempt'] = time();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ✅ CSRF Check
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $message = "Security token mismatch!";
        $message_type = "error";
    } else {
        // 🧩 Sanitize input
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);

        // 🔐 Use Prepared Statement
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            if ($user['is_verified'] == 0) {
                $message = "Your account is not verified yet. Please wait for admin approval.";
                $message_type = "warning";
            } elseif ($user['status'] == 'inactive') {
                $message = "You are unauthorized to log in!";
                $message_type = "unauthorized";
            } elseif (password_verify($password, $user['password'])) {
                // ✅ Session hardening
                session_regenerate_id(true);
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['user_img'] = $user['user_img'];

                $_SESSION['login_attempts'] = 0; // reset on success

                $message = "Login successful! Redirecting...";
                $message_type = "success";

                // 🔁 Redirect based on role
                $redirectUrl = "index.php";
                if ($user['role'] == 'admin') {
                    $redirectUrl = "admin/dashboard.php";
                } elseif ($user['role'] == 'agent') {
                    $redirectUrl = "admin/property/property.php";
                }

                echo "<script>
                        setTimeout(function() {
                            window.location.href = '$redirectUrl';
                        }, 2000);
                      </script>";
            } else {
                $message = "Invalid credentials!";
                $message_type = "error";
                $_SESSION['login_attempts']++;
            }
        } else {
            $message = "Invalid credentials!";
            $message_type = "error";
            $_SESSION['login_attempts']++;
        }

        $stmt->close();
    }
}
?>

<?php include('./includes/header.php'); ?>

<!-- Page Title -->
<section class="page-title-two bg-color-1 centred"></section>

<!-- Register Section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                <div class="sec-title">
                    <h5>Sign in</h5>
                    <h2>Sign In With Realshed</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Agent</li>
                            <li class="tab-btn" data-tab="#tab-2">User</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <h4>Sign in</h4>
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Sign in</button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Have not any account? <a href="signup.php">Register Now</a></p>
                                </div>
                                <?php if (!empty($message)): ?>
                                    <div class="error-message">
                                        <p class="<?php echo $message_type; ?>"><?php echo $message; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <h4>Sign in</h4>
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Sign in</button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Have not any account? <a href="signup.php">Register Now</a></p>
                                </div>
                                <?php if (!empty($message)): ?>
                                    <div class="error-message">
                                        <p class="<?php echo $message_type; ?>"><?php echo $message; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./includes/footer.php'); ?>
