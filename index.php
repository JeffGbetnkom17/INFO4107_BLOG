<?php
    include("includes/header.php");
    $sql = "SELECT * FROM articles";
    $st = $conn->prepare( $sql );
    $st->execute();
?>
                    <div class="blog-header">
                        <h1 class="blog-title">INF 4107 Blog</h1>
                        <p class="lead blog-description">All what you need to know about AWS, so get started !</p>
                    </div>
                    
                    <?php
                        if (isset($st)) {
                            while($row = $st->fetch()){
                    ?>
                    <div class="blog-post">
                        <h3 class="blog-post-title"><a href="single.php?article=<?php echo $row['article_id']; ?>"><?php echo $row['article_title']; ?></a></h3>
                        <p class="blog-post-meta"><?php echo $row['article_date']; ?> by <a href="#">Admin</a></p>
                        <a href="single.php?article=<?php echo $row['article_id']; ?>" class="btn btn-primary">Read the article</a>
                        <br>
                        <br>
                    </div><!-- /.blog-post -->
                    <?php } } ?>
                </div><!-- /.blog-main -->

                <?php include("includes/sidebar.php"); ?>
                <?php include("includes/footer.php"); ?>            