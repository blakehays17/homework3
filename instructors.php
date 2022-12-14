<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Instructors</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Instructors</h1>
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <th>Instructor ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Office</th>
                    <th>Courses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "blakehay_s";
                    $password = "wiZ#HZ^1]CAV";
                    $dbname = "blakehay_sdb";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT instructor_firstname, instructor_id, instructor_lastname, instructor_office from instructor";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?=$row["instructor_id"]?></td>
                    <td><?=$row["instructor_firstname"]?></td>
                    <td><?=$row["instructor_lastname"]?></td>
                    <td><?=$row["instructor_office"]?></td>
                    <td>
                        <form method="post" action="instructor_teach_course.php">
                            <input type="hidden" name="id" value="<?=$row["instructor_id"]?>" />
                            <input type="submit" class="btn btn-success btn-sm" value="Courses" />
                        </form>
                    </td>
                </tr>
                <?php
                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
