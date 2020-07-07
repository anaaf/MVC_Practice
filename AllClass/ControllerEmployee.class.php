<?php

class ControllerEmployee extends ModelEmployee{

//Using Insert method to insert information  for an employee by giving the details in the parameter
  public function InsertEmployee($firstname,$lastname,$gender,$hiredData,$salary)
  {
    $this->Insert($firstname,$lastname,$gender,$hiredData,$salary);
  }
//===================================================================================================================================================================
//Using delete method to delete row  for an employee by giving an employee ID in the parameter
public function delete($EmployID)
{
 $this->DeleteEmployee($EmployID);
}

//===================================================================================================================================================================

//Using Update method to update row  for an employee by giving the new  details in the parameter
public function UpdateEmploy($firstname,$lastname,$gender,$hiredData,$salary,$EmployeeId)
{
 $this->EmployeeUpdate($firstname,$lastname,$gender,$hiredData,$salary,$EmployeeId);
}

}


 ?>
