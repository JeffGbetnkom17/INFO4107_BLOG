<?php
    include("includes/header.php");
    $_SERVER['RDS_HOSTNAME'] = "notes-blog.crztxtabnevx.us-east-2.rds.amazonaws.com";
    $_SERVER['RDS_PORT'] = "3306";
    $_SERVER['RDS_DB_NAME'] = "students_management";
    $_SERVER['RDS_USERNAME'] = "admin";
    $_SERVER['RDS_PASSWORD'] = "adminroot";
    $dbhost = $_SERVER['RDS_HOSTNAME'];
    $dbport = $_SERVER['RDS_PORT'];
    $dbname = $_SERVER['RDS_DB_NAME'];
    $charset = 'utf8' ;

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
    $username = $_SERVER['RDS_USERNAME'];
    $password = $_SERVER['RDS_PASSWORD'];

    $conn = new PDO($dsn, $username, $password);
    $status = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $regnumber = $_POST['regnumber'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mark = $_POST['mark'];
        if (empty($regnumber) || empty($name) || empty($subject) || empty($mark)) {
            $status = "Missing informations.";
        }
        else {
            $sql = "INSERT INTO notes (regnumber, name, subject, mark)
                        VALUES (:regnumber, :name, :subject, :mark)";
                $st = $conn->prepare($sql);
                $st->execute([
                    'regnumber' => $regnumber,
                    'name' => $name,
                    'subject' => $subject,
                    'mark' => $mark
                ]);


                $status = "Your infos have been registered, you can now add comments.";
                $regnumber = "";
                $name = "";
                $subject = "";
                $mark = "";
        }
    }
?>
                    <div class="blog-header">
                        <h2>Students Result Management System</h2>
                    </div>
                    
                    <div class="blog-srms-form">
                        <form action="" method="POST" class="form-horizontal">
                            <p><?php echo "" . $status ?></p>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Registration Number</label>
                                <div class="col-sm-8">
                                    <input type="text" name="regnumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Student Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" name="subject" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Mark (/100)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="mark" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input value="Submit informations" type="submit" class="btn btn-primary"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.blog-main -->

                <?php include("includes/footer.php"); ?>  