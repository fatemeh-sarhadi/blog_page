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
// delete projects
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_project_id"])) {
    $projectId = $_POST["delete_project_id"];
    
    $sql = "DELETE FROM projects WHERE id = $projectId";

    if ($conn->query($sql) === TRUE) {
        echo "Project deleted successfully";
    } else {
        echo "Error deleting project: " . $conn->error;
    }
}


// edit project
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_project_id"])) {
    $projectId = $_POST["edit_project_id"];
    $newProjectName = $_POST["new_project_name"];
    $newProjectDescription = $_POST["new_project_description"];
  // Query برای به‌روزرسانی اطلاعات پروژه
  $sql = "UPDATE projects SET name='$newProjectName', description='$newProjectDescription' WHERE id=$projectId";

  if ($conn->query($sql) === TRUE) {
      echo "Project edited successfully";
  } else {
      echo "Error editing project: " . $conn->error;
  }
}

$conn->close();
?>












<?php

if ($conn->connect_error) {
    die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectName = $_POST['projectName'];
    $projectDescription = $_POST['projectDescription'];
    $stmt = $conn->prepare("INSERT INTO projects (project_name, project_description) VALUES (?, ?)");
    $stmt->bind_param("ss", $projectName, $projectDescription);

    if ($stmt->execute()) {
        echo "پروژه با موفقیت اضافه شد.";
    } else {
        echo "خطا در اضافه کردن پروژه: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
<?php 
include './include/footer.php';
?>