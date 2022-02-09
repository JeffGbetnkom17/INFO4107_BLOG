<?php
    include("includes/header.php");
    $status = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $password = $_POST['password'];
        if (empty($name) || empty($name)) {
            $status = "All fields are compulsory.";
        }
        else {
            if (strlen($name) >= 255 || !preg_match("/^[a-zA-Z'\s]+$/", $name)) {
                $status = "Please enter a valid name";
            }
            else {
                $sql = "INSERT INTO users (user_pseudo, user_password)
                        VALUES (:name, :password)";
                $st = $conn->prepare($sql);
                $st->execute([
                    'name' => $name,
                    'password' => $password
                ]);


                $status = "Your infos have been registered, you can now add comments.";
                $name = "";
                $password = "";
            }
        }
    }
?>
                    <div class="blog-header">
                        <h2>Contact us</h2>
                    </div>
                    
                    <div class="blog-srms-form">
                        <h6><?php echo "" . $status; ?></h6>
                        <form action="" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.blog-main -->

                <?php include("includes/footer.php"); ?>