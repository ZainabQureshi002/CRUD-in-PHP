<?php
$insert = false;
$update = false;
$delete = false;
$servername = 'localhost';
$username = 'root';
$password = "";
$database = 'notes';

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
}

// Process the form submission
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM dbnotes WHERE sno = $sno";
    $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form is for editing or inserting a new note
    if (isset($_POST['snoEdit']) && !empty($_POST['snoEdit'])) {
        // Update the record
        $sno = $_POST['snoEdit'];
        $title = $_POST['TitleEdit'];
        $description = $_POST['DescEdit'];

        $sql = "UPDATE `dbnotes` SET `title` = '$title', `description` = '$description', `tstamp` = current_timestamp() WHERE `sno` = $sno";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Your note has been updated successfully.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        } else {
            echo "The record was not updated successfully: " . mysqli_error($conn);
        }
    } else {
        // Insert the record
        $title = $_POST['Title'];
        $description = $_POST['Desc'];

        $sql = "INSERT INTO `dbnotes` (`title`, `description`, `tstamp`) VALUES ('$title', '$description', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully: " . mysqli_error($conn);
        }
    }
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <title>PHP CRUD</title>
</head>

<body>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/CRUD/index.php" method="POST">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-3">
                            <label for="TitleEdit" class="form-label">Note Title</label>
                            <input type="text" class="form-control" id="TitleEdit" name="TitleEdit" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="DescEdit" class="form-label">Note Description</label>
                            <textarea class="form-control" id="DescEdit" name="DescEdit" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Insert Confirmation Alert -->
    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your note has been inserted successfully.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
    }
    ?>

    <!-- Add Note Form -->
    <div class="container my-4">
        <h2>Add a Note</h2>
        <form action="/CRUD/index.php" method="POST">
            <div class="mb-3">
                <label for="Title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="Title" name="Title" required>
            </div>
            <div class="form-group mb-3">
                <label for="Desc" class="form-label">Note Description</label>
                <textarea class="form-control" id="Desc" name="Desc" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <!-- Display Notes Table -->
    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Timestamp</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `dbnotes`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sno++;
                        echo "<tr>
                            <td scope='row'>$sno</td>
                            <td>{$row['title']}</td>
                            <td>{$row['description']}</td>
                            <td>{$row['tstamp']}</td>
                            <td>
                                <button class='edit btn btn-sm btn-primary' id='{$row['sno']}' data-bs-toggle='modal' data-bs-target='#editModal'>Edit</button>
                                <button class='delete btn btn-sm btn-danger' id='{$row['sno']}'>Delete</button>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        const edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                debugger
                // const tr = e.target.closest("tr");
                // const title = tr.getElementsByTagName("td")[1].innerText;
                // const description = tr.getElementsByTagName("td")[2].innerText;

                // document.getElementById('TitleEdit').value = title;
                // document.getElementById('DescEdit').value = description;
                // document.getElementById('snoEdit').value = e.target.id;

                $('#editModal').modal('toggle');
            });
        });

        const deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                const sno = e.target.id; // Assuming each delete button has a unique ID like the record's serial number (sno)

                if (confirm("Are you sure you want to delete this note?")) {
                    // Proceed with deletion
                    console.log("yes");
                    window.location = `/CRUD/index.php?delete=${sno}`;  // Redirect to PHP script to handle deletion
                }
                else{
                    console.log("No")
                }
            });
        });

    </script>
</body>

</html>
