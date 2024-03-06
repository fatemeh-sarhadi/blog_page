<?php 
include './include/header.php';
?>

<div class="container dashboard p-5">
    <h1>Project Management</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Project 1</td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Project 2</td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>

    <button class="btn btn-success" data-toggle="modal" data-target="#addProjectModal">Add Project</button>

    <!-- Add Project Modal -->
    <div class="modal" id="addProjectModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Project</h4>
                </div>
                <div class="modal-body text-dark">
                    <form>
                        <div class="form-group">
                            <label for="projectName" class="text-dark p-2">Project Name</label>
                            <input type="text" class="form-control" id="projectName">
                        </div>
                        <div class="form-group">
                            <label for="projectDescription" class="text-dark p-2">Project Description</label>
                            <textarea class="form-control" id="projectDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="projectThumbnail text-dark" class="text-dark">Thumbnail</label>
                            <input type="file" class="form-control-file" id="projectThumbnail" class="p-2">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add Project</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php 
include './include/footer.php';
?>