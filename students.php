<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Students</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Students</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Grade Level</th>
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

                    $sql = "SELECT student_id, student_name, student_age, student_grade from student";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><a href="student_enroll_course.php?id=<?=$row["student_id"]?>" class="btn btn-primary btn-sm"><?=$row["student_id"]?></a></td>
                        <td><?=$row["student_name"]?></td>
                        <td><?=$row["student_age"]?></td>
                        <td><?=$row["student_grade"]?></td>
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
