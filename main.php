
<?php

include 'File/FilesUpload.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document </title>
  </head>
  <body>
    <?php
    //View

//-> Executing View All  method
$viewAll= new ViewEmployee();
$viewAll->viewEmploy();

//-> Executing View   method for a particular employee
$view1= new ViewEmployee();
$view1->showEmployee(7,"Zeeshan");

      ///Controller

// -> Executing Insert  method
$insert1= new ControllerEmployee();
$insert1->InsertEmployee("Ahmed","Khan","Male","2020-01-12",55000);

$insert2= new ControllerEmployee();
$insert2->InsertEmployee("Zeeshan","Ali","Male","2019-11-13",76000);

$insert3=new ControllerEmployee();
$insert3->InsertEmployee("Hammad","Arif","Male","2019-11-12",66000);


//-> Executing Delete method
$delete=new ControllerEmployee();
$delete->delete(8);


//-> Executing Update method
$update2= new ControllerEmployee();
$update2->UpdateEmploy("Hammad","Arif","Male","2019-11-12",66000,5);



     ?>

  </body>
</html>
