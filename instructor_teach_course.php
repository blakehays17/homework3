<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Instructor's Courses</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Instructor's Courses</h1>
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Course Subject</th>
                    <th>Course Number</th>
                    <th>Course Title</th>
                    <th>Instructor</th>
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
                    $instid = $_POST['id'];
                    $sql = "SELECT course_id, course_subject, course_number, course_title, instructor_lastname from instructor i join course c on i.instructor_id = c.instructor_id where c.instructor_id=".$instid;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?=$row["course_id"]?></td>
                    <td><?=$row["course_subject"]?></td>
                    <td><?=$row["course_number"]?></td>
                    <td><?=$row["course_title"]?></td>
                    <td><?=$row["instructor_lastname"]?></td>
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
