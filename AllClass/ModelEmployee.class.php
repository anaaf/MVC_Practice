<?php
// model class is extended to the dataBase connectivity class for the handling db interactions
   // Extends to the DataConnect class for the connectivity of the DataBase
class ModelEmployee extends DataConnect{
//Using protected method so only extended classes can access this method (view Method)
                                          // View All
protected function view(){
  $sql="SELECT * from employeeinfo";
  $display = $this->connect()->query($sql);
  while($row= $display->fetch())
{
  echo "Employee ID : "." ". $row['Employee_ID']."<br>"."Full name : " ." ". $row['EmployFirstName']."<br>"."Last name : " ." ". $row['EmployLastName']. "<br>";
echo "Gender : "." ". $row['Gender']."<br>"."Hired Date : " ." ". $row['HiredDate']."<br>"."Salary : " ." ". $row['Salary']."<br>"."<br>";
}
}
//===================================================================================================================================================================
                                                        // View an Employee
//Using prepare statement to find a particular employee to view his/her information
public function viewEmployee($EmployID,$EmployFirstName){
  $sql="SELECT *FROM employeeinfo where Employee_ID = ? AND EmployFirstName= ? ";
  $statement=$this->connect()->prepare($sql);
  $statement->execute([$EmployID,$EmployFirstName]);
  $name = $statement->fetchAll();

//using foreach loop to display all the employee details
  foreach($name as $data){
    echo "Employee ID : "." ". $data['Employee_ID']."<br>"."Full name : " ." ". $data['EmployFirstName']."<br>"."Last name : " ." ". $data['EmployLastName']. "<br>"."Gender : "." ". $data['Gender']."<br>"."Hired Date : " ." ". $data['HiredDate']."<br>"."Salary : " ." ". $data['Salary']."<br>";
  }
}
//===================================================================================================================================================================

                                                  // Insert an Employee

protected function Insert($firstname,$lastname,$gender,$hiredData,$salary){
  $sql="INSERT INTO employeeinfo (EmployFirstName,EmployLastName,Gender,HiredDate,Salary) VALUES ('$firstname','$lastname','$gender','$hiredData','$salary');";
  $insert = $this->connect()->query($sql);
  if($insert == TRUE){
    echo "Record Inserted Successfully";
    }
  else{
    echo "Not Inserted";
  }
}

//===================================================================================================================================================================

                                                      // Update an Employee
//updating employee details for an employee whose ID is given in parameter along with the updating columns
protected function EmployeeUpdate($firstname,$lastname,$gender,$hiredData,$salary,$EmployeeId){
  $sql = "UPDATE employeeinfo SET  EmployFirstName='$firstname' ,  EmployLastName='$lastname', Gender='$gender' , HiredDate='$hiredData' , Salary='$salary' where Employee_ID='$EmployeeId';";
  $update = $this->connect()->query($sql);


  if($update == TRUE){
     echo "Record Updated Successfully";
    }
  else{
    echo "Not Updated";
  }
}
//===================================================================================================================================================================
                                                            //Delete an Employee
protected function DeleteEmployee($EmployID){
$sql= "DELETE FROM employeeinfo where Employee_ID = $EmployID ;";
$delete=$this->connect()->query($sql);
if($delete == TRUE){
  ECHO "Record deleted Successfully";
  }
else{
  echo "Not deleted";
}
}
//===================================================================================================================================================================
}
 ?>
