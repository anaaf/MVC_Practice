<?php

class ViewEmployee extends ModelEmployee{

// View Method to list of all the Employee's
public function viewEmploy(){
$result = $this->view();
  }
//===================================================================================================================================================================

//View Method to display any one employee by giving the employeeID and employeeFirstname in the parameter
  public function showEmployee($EmployID,$EmployFirstName)
  {
    $result= $this->viewEmployee($EmployID,$EmployFirstName);
  }

}
 ?>
