<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Courses</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Courses</h1>
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Course Subject</th>
                    <th>Course Number</th>
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

                    $sql = "SELECT course_id, course_subject, course_number, course_title from course";
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
