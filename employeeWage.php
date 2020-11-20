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
		switch($empCheck){
			case $fullTime:
				$empHrs=8;
				 break;
				 
			case $partTime:
				$empHrs=4;		    
				break;
				
			default:
			    $empHrs=0; 
		}
		  				
		$empwage=$ratePerHour*$empHrs;
		echo"\n employee daily Wages:". $empwage;
	  }
		  
   }
   $emp = new EmployeeWage();
	  $emp->calculateDailyWages();	  
?>	