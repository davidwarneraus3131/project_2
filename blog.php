<?php 
session_start();
include './includes/header.php';
include("./database/db.php");
?>




<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Blog Grid</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Blog Grid</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-grid sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">

                        <?php
                        $limit = 4;
                        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                        $start = ($page - 1) * $limit;

                        $search_query = "";
                        $where_clause = "WHERE 1";

                        if (isset($_GET['search']) && !empty($_GET['search'])) {
                            $search_query = trim($_GET['search']);
                            $where_clause .= " AND (title LIKE '%$search_query%' OR category LIKE '%$search_query%' OR short_description LIKE '%$search_query%')";
                        }

                        // Get total number of records for pagination
                        $total_query = "SELECT COUNT(*) as total FROM `blogs` $where_clause";
                        $total_result = mysqli_query($conn, $total_query);
                        $total_row = mysqli_fetch_assoc($total_result);
                        $total_posts = $total_row['total'];
                        $total_pages = ceil($total_posts / $limit);

                        // Fetch paginated and filtered posts
                        $query = "SELECT `id`, `title`, `category`, `image`, `author`, `author_image`, `publish_date`, `short_description`, `blog_link`, `featured` 
          FROM `blogs` $where_clause ORDER BY publish_date DESC LIMIT $start, $limit";

                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Fetch the data
                                $id = $row['id'];
                                $title = $row['title'];
                                $category = $row['category'];
                                $image = $row['image'];
                                $author = $row['author'];
                                $author_image = $row['author_image'];
                                $publish_date = $row['publish_date'];
                                $short_description = $row['short_description'];
                                $blog_link = $row['blog_link'];
                                $featured = $row['featured'];
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.php"><img
                                                            src="assets/images/blogs/<?php echo $image ?>" alt=""></a></figure>
                                                <?php if ($featured == 1): ?>
                                                    <span class="category">Featured</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a
                                                        href="blog-details.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars($title); ?></a>
                                                </h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img
                                                                src="assets/images/agents/<?php echo $author_image ?>" alt="">
                                                        </figure>
                                                        <h5><a
                                                                href="blog-details.php"><?php echo htmlspecialchars($author); ?></a>
                                                        </h5>
                                                    </li>
                                                    <li><?php echo date("F d, Y", strtotime($publish_date)); ?></li>
                                                </ul>
                                                <div class="text">
                                                    <p><?php echo htmlspecialchars($short_description); ?></p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.php?id=<?php echo $id; ?>"
                                                        class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No blog posts found matching '<strong>" . htmlspecialchars($search_query) . "</strong>'</p>";
                        }
                        ?>
                    </div>
                    <?php if ($total_pages > 1): ?>
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <?php if ($page > 1): ?>
                                    <li><a
                                            href="?search=<?php echo urlencode($search_query); ?>&page=<?php echo ($page - 1); ?>"><i
                                                class="fas fa-angle-left"></i></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li><a href="?search=<?php echo urlencode($search_query); ?>&page=<?php echo $i; ?>"
                                            class="<?php echo ($page == $i) ? 'current' : ''; ?>"><?php echo $i; ?></a></li>
                                <?php endfor; ?>

                                <?php if ($page < $total_pages): ?>
                                    <li><a
                                            href="?search=<?php echo urlencode($search_query); ?>&page=<?php echo ($page + 1); ?>"><i
                                                class="fas fa-angle-right"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="sidebar-widget search-widget">
                        <div class="widget-title">
                            <h4>Search</h4>
                        </div>
                        <div class="search-inner">
                            <form method="GET">
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
                    <!-- <div class="sidebar-widget tags-widget">
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
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sidebar-page-container -->

<?php include './includes/footer.php'; ?>