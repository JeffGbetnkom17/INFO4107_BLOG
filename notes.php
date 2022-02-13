<?php
    include("includes/header.php");
    $dbhost = $_SERVER['notes-blog.crztxtabnevx.us-east-2.rds.amazonaws.com'];
    $dbport = $_SERVER['3306'];
    $dbname = $_SERVER['RDS_DB_NAME'];
    $charset = 'utf8' ;

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
    $username = $_SERVER['admin'];
    $password = $_SERVER['adminroot'];

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