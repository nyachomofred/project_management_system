<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">upload project</h4>
                            </div>
                            <div class="content">
                                <form name="project-upload" action="processprojectupload.php" method="POST">
                                 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>project name</label>
                                                <input type="text" class="form-control" name="projectname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>zip file</label>
                                                <input type="file" class="form-control" name="zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>documentation</label>
                                                <input type="file" class="form-control" name="documentation">
                                            </div>
                                        </div>
                                        
                                     </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>project description</label>
                                                <textarea rows="5" class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="submit" class="btn btn-info btn-fill pull-right" value="submit">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>

<?php include('footer.php')?>