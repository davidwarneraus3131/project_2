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


    <!-- structure of the table -->
    <div class="container">
          <h1>  Best Commercial Spaces in Chennai</h1>
          <p class="description">Discover the best plots in top locations of Chennai. Explore prime commercial spaces with trusted projects.</p>
          <div class="table-container">
              <table>
                  <tr>
                      <th>Location</th>
                      <th>Project Name</th>
                      <th>Project Link</th>
                  </tr>
                  <tr>
                      <td rowspan="4">Best Plots At OMR</td>
                      <td class="project-name"><img src="logo.jpg" alt="logo"> Project Name 1</td>
                      <td class="project-link"><a href="#">View Project</a></td>
                  </tr>
                  <tr>
                      <td class="project-name"><img src="logo.jpg" alt="logo"> Project Name 2</td>
                      <td class="project-link"><a href="#">View Project</a></td>
                  </tr>
                  <tr>
                      <td class="project-name"><img src="logo.jpg" alt="logo"> Project Name 3</td>
                      <td class="project-link"><a href="#">View Project</a></td>
                  </tr>
                  <tr>
                      <td class="project-name"><img src="logo.jpg" alt="logo"> Project Name 4</td>
                      <td class="project-link"><a href="#">View Project</a></td>
                  </tr>
              </table>
          </div>
      </div>
       
    </div>
</section>
<!-- sidebar-page-container -->



<style>

.container {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .description {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #2dbe6c;
            color: white;
            text-transform: uppercase;
        }
        .project-name {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .project-name img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        .project-link a {
            text-decoration: none;
            color:#2dbe6c;
            font-weight: bold;
        }
        .project-link a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            th, td {
                padding: 8px;
                font-size: 14px;
            }
            .project-name img {
                width: 25px;
                height: 25px;
            }
        }

</style>

<?php include './includes/footer.php'; ?>