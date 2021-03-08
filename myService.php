<?php

use Sevice/studentDeclare.php;

//$conn = mysqli_connect('localhost','root','root','tblService');

//$student_name = $_REQUEST['student_name'];

class myservice{


     public function DisplayStudentDetails(){     
        $sql = "SELECT student_name,student_course,year_join FROM tblService";
        try{
            $studentDetails = $this->executeQueryForList($sql);

        }catch(\Exception $e){
            return false;           
        }
        return $studentDetails;
    }


     public function InsertStudentDetails($studentDeclare){   

         $sql = "INSERT INTO tblService(student_name,student_course,year_join)VALUES ($studentDeclare->name,$student->course,$student->year_join)";
        try{
            return $this->executeQuery($sql);


        }catch(\Exception $e ){
            return false;
        }

    }

    public function UpdateStudentDetails($studentDeclare){
        
        $sql = "UPDATE tblService SET student_name = '$studentDeclare->name',student_course='$studentDeclare->course',year_join='$studentDeclare->year_join' WHERE student_id='$studentDeclare->id'";
        try{
           return this->executeQuery($sql);

         }catch(\Exception $e){
            return false;
        }
    }
    

    

    public function deleteStudentDetails($studentDeclare)
    {
        $sql = "DELETE FROM tblService WHERE student_id=$studentDeclare->id";
        try {
            return $this->executeQuery($sql);
        } catch (\Exception $e) {

            return false;
        }
    }



}



?>