<?php

namespace App\classes;
class student
{

    private function dbConnection()
   {
       $hostName = 'localhost';
       $userName = 'root';
       $password = '';
       $dbName = 'student';
       $link = mysqli_connect($hostName, $userName, $password, $dbName);
       return $link;
   }


    public function saveStudentInfo($data)
{


    $sql = "INSERT INTO students (name,email,mobile,price) VALUES ('$data[name]', '$data[email]','$data[mobile]','$data[price]')";
    if (mysqli_query(student::dbConnection(), $sql)) {
        $message = 'Info saved successfully!!!!!';
        return $message;
    } else {
        die ('Query problem' . mysqli_error(student::dbConnection()));
    }
}
public function getAllStudentInfo(){
//    student::dbConnection()= mysqli_connect('localhost', 'root', '', 'student');
    $sql="SELECT * FROM students";
    if(mysqli_query(Student::dbConnection(),$sql)){
        $queryResult= mysqli_query(Student::dbConnection(),$sql);
        return $queryResult;
    echo '<pre>';
    print_r($queryResult);
    }
    else  {
        die ('Query problem' . mysqli_error(student::dbConnection()));
    }
    }

    public function getStudentInfoById($id) {
    $sql = "SELECT * FROM students WHERE id ='$id'";
    if(mysqli_query(student::dbConnection(), $sql)){
        $queryResult = mysqli_query(student::dbConnection(), $sql);

        return $queryResult;
    }else{
        die ('Query problems' .mysqli_error(student::dbConnection()));
    }
    }


}