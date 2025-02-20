<?php
session_start();
include("./database/db.php");

$message = "";
$message_type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check user credentials
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['is_verified'] == 0) {
            $message = "Your account is not verified yet. Please wait for admin approval.";
            $message_type = "warning";
        } elseif ($user['status'] == 'inactive') {
            $message = "You are unauthorized to log in!";
            $message_type = "unauthorized";
        } elseif (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_img'] = $user['user_img'];

            $message = "Login successful! Redirecting...";
            $message_type = "success";

            // Handle role-based redirection
            $redirectUrl = "index.php"; // Default for general users
            if ($user['role'] == 'admin') {
                $redirectUrl = "admin/dashboard.php";
            } elseif ($user['role'] == 'agent') {
                $redirectUrl = "agent/dashboard.php";
            }elseif ($user['role'] == 'user') {
                $redirectUrl = "index.php";
            }

            echo "<script>
                    setTimeout(function() {
                        window.location.href = '$redirectUrl';
                    }, 2000);
                  </script>";
        } else {
            $message = "Invalid credentials!";
            $message_type = "error";
        }
    } else {
        $message = "Invalid credentials!";
        $message_type = "error";
    }
}
?>

<?php include('./includes/header.php'); ?>

<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <!-- Page title content -->
</section>

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
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required="">
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
                        <!-- User Tab -->
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <h4>Sign in</h4>
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required="">
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
