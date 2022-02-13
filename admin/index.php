                    <?php
                        include("includes/header.php"); 
                        $status = "";
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $title = $_POST['title'];
                            $category = $_POST['category'];
                            $date = $_POST['date'];
                            $content = $_POST['content'];
                            if (empty($title) || empty($category) || empty($date) || empty($content)) {
                                $status = "Missing informations.";
                            }
                            else {
                                $sql = "INSERT INTO articles (article_title, article_category, article_date, article_body)
                                            VALUES (:title, :category, :date, :body)";
                                $st = $conn->prepare($sql);
                                $st->execute([
                                    'title' => $title,
                                    'category' => $category,
                                    'date' => $date,
                                    'body' => $content
                                ]);

                                $status = "The article has been registered in the database, refresh the home page.";
                                $title = "";
                                $category = "";
                                $date = "";
                                $content = "";
                            }
                        }
                    ?>
                    <form action="" method="POST" class="form-horizontal">
                        <h6><?php echo "" . $status; ?></h6>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Category</label>
                            <div class="col-sm-8">
                                <input type="text" name="category" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Date</label>
                            <div class="col-sm-8">
                                <input type="text" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Content</label>
                            <textarea name="content" cols="40" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>