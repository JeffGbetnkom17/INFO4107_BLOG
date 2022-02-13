                    <?php
                        include("includes/header.php"); 
                        session_start();
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if ($_POST["username"] == ADMIN_USERNAME && $_POST["password"] == ADMIN_PASSWORD) {
                                echo "It works";
                                $_SESSION["username"] = $_POST["username"];
                            }
                            echo "Session : " . $_SESSION["username"];
                        }
                        $username = isset( $_SESSION["username"] ) ? $_SESSION["username"] : "";
                        echo "Username : " . $username;
                        if ( $username == "" ) {
                    ?>
                    <form action="" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="form-control">
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
                    <?php
                        }
                        else { 
                    ?>
                    <?php echo "Welcome " . $_SESSION["username"] ?>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>