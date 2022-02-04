<?php
    include("includes/header.php");
?>
                    <div class="blog-header">
                        <h2>Students Result Management System</h2>
                    </div>
                    
                    <div class="blog-srms-form">
                        <form class="form-horizontal">
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
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.blog-main -->

                <?php include("includes/footer.php"); ?>  