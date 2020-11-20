<?php
class EmployeeWage
 {
      public function __construct()
	  {
		echo "\n Welcome to Employee Wage Computation Program \n";
	  }

	  public function calculateDailyWages(){
		$empCheck= rand(0,2);
		$fullTime=1;
		$partTime=2;
		$ratePerHour=20;
		if($empCheck==$fullTime)
		{
			$empHrs=8;		  
		}
  
		elseif($empCheck==$partTime)
		{
		  $empHrs=4;		    
		}
		else
		{
			$empHrs=0;
		}
		$empwage=$ratePerHour*$empHrs;
		echo"\n employee daily Wages:". $empwage;
	  }
		  
   }
   $emp = new EmployeeWage();
	  $emp->calculateDailyWages();	  
?>	