<?php
    include("includes/header.php");
    $sql = "SELECT * FROM articles WHERE article_id = :id";
    $st = $conn->prepare( $sql );
    $st->execute([
        ':id' => $_GET['article']
    ]);
?>
                    <br>
                    <?php
                        if (isset($st)) {
                            while($row = $st->fetch()){
                    ?>
                    <div class="blog-post">
                        <h3 class="blog-post-title"><?php echo $row['article_title']; ?></h3>
                        <p class="blog-post-meta"><?php echo $row['article_date']; ?> by <a href="#">Admin</a></p>
                        <?php echo $row['article_body']; ?>
                        <br>
                        <br>
                    </div><!-- /.blog-post -->
                    <?php } } ?>

                    <blockquote>Comments</blockquote>
                    <div class="comment-area">
                        <form method="post">
                            <div class="form-group">
                                <textarea name="comment" cols="40" rows="10" class="form-control"></textarea>
                            </div>
                            <input value="Post a comment" type="submit" class="btn btn-primary"/>
                        </form>
                    </div>
                    <br>
                    <br>
                    <hr>
                    <div class="comment">
                        <div class="comment-head">
                            <p>Slam City</p>
                        </div>
                        <div class="comment-content">
                            <p>This is a comment entirely written by...</p>
                        </div>
                    </div>
                    <hr>
                    <div class="comment">
                        <div class="comment-head">
                            <p>Slam City</p>
                        </div>
                        <div class="comment-content">
                            <p>This is a comment entirely written by...</p>
                        </div>
                    </div>
                </div><!-- /.blog-main -->

                <?php include("includes/sidebar.php"); ?>
                <?php include("includes/footer.php"); ?>            