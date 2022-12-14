<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstrap.php"); ?>
    <link rel="stylesheet" href="main.css">
    <title>Homework 3</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <h1>Homework 3</h1>
        <br>
        <h2>Instructors</h2>
        <p>
            On the instructors page you can view each instructor ID, first name, last name, and office. Lastly, you can
            view which courses a given instructor teaches by clicking the "Courses" button. This is where the POST
            variable is used.
        </p>
        <br>
        <h2>Courses</h2>
        <p>
            On the courses page you can view each course ID, subject, course number, and course title.
        </p>
        <br>
        <h2>Students</h2>
        <p>
            The students page consists of the student ID, name, age, and grade level. When clicking on a student's ID,
            you will be able to view which courses that student is enrolled in. This is where a hyperlink is used to
            filter data.
        </p>
        <br>
        <h2>Enrollment</h2>
        <p>
            The enrollment page shows a a students enrollment in a certain course. You can view enrollment ID, student
            name, and course title.
        </p>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>
