<?php
session_start();
include("./database/db.php");

// Initialize the message variable
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']); // Role from the form

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists, show error message
        $message = "Email already exists. Please try another one.";
    } else {
        // Insert the new user into the database
        $insertQuery = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$hashedPassword', '$role')";

        if (mysqli_query($conn, $insertQuery)) {
            // Registration successful, redirect to login page or show success message
            $_SESSION['message'] = "Registration successful! Please log in.";
            header("Location: signin.php");
            exit();
        } else {
            // Something went wrong
            $message = "There was an error. Please try again.";
        }
    }
}
?>

<?php include('./includes/header.php'); ?>

<section class="page-title-two bg-color-1 centred">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Sign Up</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Sign Up</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Registration Section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                <div class="sec-title">
                    <h5>Register</h5>
                    <h2>Register With Realshed</h2>
                </div>

                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Agent</li>
                            <li class="tab-btn" data-tab="#tab-2">User</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <!-- Agent Registration Form -->
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <h4>Sign up</h4>
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Agent name</label>
                                        <input type="text" name="name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required="">
                                    </div>
                                    <input type="hidden" name="role" value="agent">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Register</button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Already have an account? <a href="signin.php">Sign In Now</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- User Registration Form -->
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <h4>Sign up</h4>
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>User name</label>
                                        <input type="text" name="name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required="">
                                    </div>
                                    <input type="hidden" name="role" value="user">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Register</button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Already have an account? <a href="signin.php">Sign In Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // Display the message if there is any
                if (!empty($message)) {
                    echo "<p class='alert alert-danger'>$message</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Registration Section -->
<?php include('./includes/footer.php'); ?>