<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Enrollment</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Enrollment</h1>
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <th>Enrollment ID</th>
                    <th>Student Name</th>
                    <th>Course Title</th>
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

                    $sql = "SELECT enroll_id, student_name, course_title from student s join enroll e on s.student_id = e.student_id join course c on e.course_id = c.course_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?=$row["enroll_id"]?></td>
                    <td><?=$row["student_name"]?></td>
                    <td><?=$row["course_title"]?></td>
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
