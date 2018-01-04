<?php
require_once 'vendor/autoload.php';
use App\classes\student;


$id =$_GET['id'];
$queryResult = student::getStudentInfoById($id);
$student = mysqli_fetch_assoc($queryResult);
//echo '<pre>';
//print_r($student);
//







//$message='';
//
//if (isset($_POST['btn'])){
//    $message=student::saveStudentInfo($_POST);
//}
?>
<hr/>
<a href="add_students.php">Add Student</a>
<a href="view_student.php">View Student</a>


<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" value=" <?php echo $student['name']; ?>"></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value=" <?php echo $student['email']; ?>"></td>
        </tr>

        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile" value="<?php echo $student['mobile']; ?>"></td>
        </tr>

        <tr>
            <th>Price</th>
            <td><input type="number" name="price" value="<?php echo $student['price']; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
