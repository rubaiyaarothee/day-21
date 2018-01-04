<?php
require_once 'vendor/autoload.php';
use App\classes\student;
$message='';

if (isset($_POST['btn'])){
 $message=student::saveStudentInfo($_POST);
}
?>
<hr/>
<a href="add_students.php">Add Student</a>
<a href="view_student.php">View Student</a>


<h1 style="color: aqua"><?php echo $message; ?> </h1>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" value="<?php echo $student['name'];?>"></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>

        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile"></td>
        </tr>

        <tr>
            <th>Price</th>
            <td><input type="number" name="price"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
