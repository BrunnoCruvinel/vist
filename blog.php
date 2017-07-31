<?php require "header.php"; ?>

<section class="container page">

  <div class="row">
    <div class="col-md-12 title">
      <h2>BLOG</h2>
      <h3>BLOG</h3>
    </div>
  </div>


  <div class="row mt5">

    <div class="col-md-7 blog">

      <!-- POST COM FOTO -->
      <div class="col-md-12 postThumb">
        <img src="img/blog.png">
        <a href="single.php">
          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. laboris nisi ut aliquip ex ea commodo consequat.</h4>
        </a>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
        </p>
      </div>

      <!-- POST SEM FOTO -->
      <div class="col-md-12 np">
        <div class="postText">
          <a href="single.php">
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </h3>
          </a>
          <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
            nulla facilisi.
          </p>
        </div>
      </div>

      <!-- POST SEM FOTO -->
      <div class="col-md-12 np">
        <div class="postText">
          <a href="single.php">
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </h3>
          </a>
          <p>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
            nulla facilisi.
          </p>
        </div>
      </div>

      <div class="col-md-12 mt5">
        <div class="loading">
            <h2>... CARREGANDO ...</h2>
        </div>
      </div>


    </div>


    <?php require "sidebar-blog.php" ?>

  </div>



</section>


<?php require "footer.php"; ?>
