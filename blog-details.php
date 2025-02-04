<?php include './includes/header.php';
include("./database/db.php");
?>
<!-- tags  add admin panel
<label for="tags">Tags (comma-separated):</label>
<input type="text" name="tags" id="tags" placeholder="e.g., Real Estate, Interior, Rent Home">
And update your PHP insert script:

php
Copy
Edit
$tags = mysqli_real_escape_string($conn, $_POST['tags']);
$query = "INSERT INTO blogs (title, category, image, author, author_image, publish_date, content, featured, tags) 
          VALUES ('$title', '$category', '$image', '$author', '$author_image', '$publish_date', '$content', '$featured', '$tags')";
mysqli_query($conn, $query); -->

        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Blog Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-details sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">


                        <?php


// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog details
    $query = "SELECT `title`, `category`, `image`, `author`, `author_image`, `publish_date`, `short_description`, `featured`, `tags`
              FROM `blogs` WHERE `id` = $blog_id";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $category = $row['category'];
        $image = $row['image'];
        $author = $row['author'];
        $author_image = $row['author_image'];
        $publish_date = date("F d, Y", strtotime($row['publish_date']));
        $content = $row['short_description'];
        $featured = $row['featured'];
        $tags = explode(',', $row['tags']); // Convert tags to an array
    } else {
        echo "<p>Blog not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid blog ID.</p>";
    exit;
}
?>


<div class="news-block-one">
    <div class="inner-box">
        <div class="image-box">
            <figure class="image"><img src="assets/images/blogs/<?php echo $image; ?>" alt=""></figure>
            <?php if ($featured == 1): ?>
                <span class="category">Featured</span>
            <?php endif; ?>
        </div>
        <div class="lower-content">
            <h3><?php echo htmlspecialchars($title); ?></h3>
            <ul class="post-info clearfix">
                <li class="author-box">
                    <figure class="author-thumb"><img src="assets/images/agents/<?php echo $author_image; ?>" alt=""></figure>
                    <h5><a href="blog-details.php"><?php echo htmlspecialchars($author); ?></a></h5>
                </li>
                <li><?php echo $publish_date; ?></li>
            </ul>
            <div class="text">
                <?php echo nl2br(htmlspecialchars($content)); ?>
            </div>
            <div class="post-tags">
                <ul class="tags-list clearfix">
                    <li><h5>Tags:</h5></li>
                    <?php foreach ($tags as $tag): ?>
                        <li><a href="blog-details.php?tag=<?php echo urlencode(trim($tag)); ?>"><?php echo htmlspecialchars(trim($tag)); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
                            <?php 

// Get the blog ID from URL
$blog_id = $_GET['id'] ?? 1; // Default to 1 if not set

// Handle comment submission only if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {
    // Sanitize inputs to prevent XSS and SQL injection
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    // Insert comment into database only if there is a valid comment
    if (!empty($user_name) && !empty($comment)) {
        $query = "INSERT INTO comments (blog_id, user_name, comment) VALUES ('$blog_id', '$user_name', '$comment')";
        mysqli_query($conn, $query);
    }

    // Redirect to avoid resubmission on page refresh
    header("Location: blog-details.php?id=" . $blog_id);
    exit(); // Stop further execution after redirect
}

// Fetch comments for the blog
$query = "SELECT * FROM comments WHERE blog_id = $blog_id ORDER BY comment_date DESC";
$result = mysqli_query($conn, $query);

// Count total comments
$total_comments = mysqli_num_rows($result);
?>

<!-- Comments Section -->
<div class="comments-area">
    <div class="group-title">
        <h4><?php echo $total_comments; ?> Comments</h4>
    </div>

    <?php if ($total_comments > 0) : ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="comment-box">
                <div class="comment">
                    <figure class="thumb-box">
                        <img src="assets/images/news/<?php echo $row['user_image'] ?: 'default.jpg'; ?>" alt="">
                    </figure>
                    <div class="comment-inner">
                        <div class="comment-info clearfix">
                            <h5><?php echo htmlspecialchars($row['user_name']); ?></h5>
                            <span><?php echo date('F j, Y', strtotime($row['comment_date'])); ?></span>
                        </div>
                        <div class="text">
                            <p><?php echo htmlspecialchars($row['comment']); ?></p>
                            <a href="#"><i class="fas fa-share"></i>Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No comments yet. Be the first to comment!</p>
    <?php endif; ?>
</div>

<!-- Comment Submission Form -->
<!-- Comment Submission Form -->
<div class="leave-comment">
    <h4>Leave a Comment</h4>
    <form method="post">
        <input type="hidden" name="blog_id" value="<?php echo $blog_id; ?>">
        <div class="form-group">
            <input type="text" name="user_name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <textarea name="comment" placeholder="Your Comment" required></textarea>
        </div>
        <button type="submit" name="submit_comment" class="theme-btn">Post Comment</button>
    </form>
</div><br><br>

                            <div class="comments-form-area">
                                <div class="group-title">
                                    <h4>Leave a Comment</h4>
                                </div>
                                <form action="blog-details.php" method="post" class="comment-form default-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Your email" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone number" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                        <div class="sidebar-widget search-widget">
                        <div class="widget-title">
                            <h4>Search</h4>
                        </div>
                        <div class="search-inner">
                        <form method="GET" action="blog.php">
                                <div class="form-group">
                                    <input type="text" name="search" placeholder="Search..."
                                        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
                                        required>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                            <?php
                    // Fetch social media links from database
                    $query = "SELECT icon_class, link FROM social_links";
                    $result = mysqli_query($conn, $query);
                    ?>

                    <div class="sidebar-widget social-widget">
                        <div class="widget-title">
                            <h4>Follow Us On</h4>
                        </div>
                        <ul class="social-links clearfix">
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <li>
                                    <a href="<?php echo htmlspecialchars($row['link']); ?>" target="_blank">
                                        <i class="<?php echo htmlspecialchars($row['icon_class']); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                            <!-- <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Category</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.php">Home improvement<span>(9)</span></a></li>
                                        <li><a href="blog-details.php">Architecture<span>(5)</span></a></li>
                                        <li><a href="blog-details.php">Tips and advice<span>(2)</span></a></li>
                                        <li><a href="blog-details.php">Interior<span>(7)</span></a></li>
                                        <li><a href="blog-details.php">Real Estate<span>(3)</span></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <?php
                    // Fetch recent blog posts ordered by updated_at (latest first)
                    $query = "SELECT id, title, image, publish_date FROM blogs ORDER BY updated_at DESC LIMIT 3";
                    $result = mysqli_query($conn, $query);
                    ?>

                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="post-inner">
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <div class="post">
                                    <figure class="post-thumb">
                                        <a href="blog-details.php?id=<?php echo $row['id']; ?>">
                                            <img src="assets/images/blogs/<?php echo $row['image']; ?>" alt="">
                                        </a>
                                    </figure>
                                    <h5>
                                        <a href="blog-details.php?id=<?php echo $row['id']; ?>">
                                            <?php echo htmlspecialchars($row['title']); ?>
                                        </a>
                                    </h5>
                                    <span
                                        class="post-date"><?php echo date("F d, Y", strtotime($row['publish_date'])); ?></span>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                            <!-- <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.php">November 2016<span>(9)</span></a></li>
                                        <li><a href="blog-details.php">November 2017<span>(5)</span></a></li>
                                        <li><a href="blog-details.php">November 2018<span>(2)</span></a></li>
                                        <li><a href="blog-details.php">November 2019<span>(7)</span></a></li>
                                        <li><a href="blog-details.php">November 2020<span>(3)</span></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.php">Real Estate</a></li>
                                        <li><a href="blog-details.php">HouseHunting</a></li>
                                        <li><a href="blog-details.php">Architecture</a></li>
                                        <li><a href="blog-details.php">Interior</a></li>
                                        <li><a href="blog-details.php">Sale</a></li>
                                        <li><a href="blog-details.php">Rent Home</a></li>
                                        <li><a href="blog-details.php">Listing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container -->

        <?php include './includes/footer.php'; ?>