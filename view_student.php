<?php
require_once 'vendor/autoload.php';
use App\classes\student;
$message='';

$queryResult= Student::getAllStudentInfo();

//while ($student=mysqli_fetch_assoc($queryResult)) {
//    echo '<pre>';
//    print_r($student);
//}



?>
<hr/>
<a href="add_students.php">Add Student</a>
<a href="view_student.php">View Student</a>
<h1 style="color: aqua"><?php echo $message; ?> </h1>
<hr/>
<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Price</th>
        <th>Action</th>

    </tr>

    <?php while ($student=mysqli_fetch_assoc($queryResult)) {

        ?>

    <tr>
        <th> <?php echo $student['id'] ?></th>

        <th> <?php echo $student['name'] ?></th>
        <th> <?php echo $student['email'] ?></th>
        <th> <?php echo $student['mobile'] ?></th>
        <th> <?php echo $student['price'] ?></th>
        <td>
            <a href="edit-student.php?id=<?php echo $student['id']?>">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>