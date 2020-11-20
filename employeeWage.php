<?php
class EmployeeWage
 {
      public function __construct()
	  {
		echo "\n Welcome to Employee Wage Computation Program \n";
	  }

	  public function checkAttendance(){
		$empCheck= rand(0,1);
		$ratePerHour=20;
		if($empCheck==1)
		{
			echo"\n employee is present";
			$empHrs=8;		  
		}
  
		else
		{
		  echo"\n employee is absent";
		  $empHrs=0;		    
		}
		$empwage=$ratePerHour*$empHrs;
		echo"\n employee daily Wages:". $empwage;
	  }
		  
   }
   $emp = new EmployeeWage();
	  $emp->checkattendance();	  
?>	