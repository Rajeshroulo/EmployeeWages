<?php
class EmployeeWage
 {
      public function __construct()
	  {
		echo "\n Welcome to Employee Wage Computation Program \n";
	  }

	  public function checkAttendance(){
		$empCheck= rand(0,1);
		if($empCheck==1)
		{
			echo"\n employee is present";		  
		}
  
		else
		{
		  echo"\n employee is absent";		    
		}
	  }
		  
   }
   $emp = new EmployeeWage();
	  $emp->checkattendance();	  
?>	