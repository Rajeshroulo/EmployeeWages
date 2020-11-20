<?php
class EmployeeWage
 {
      public function __construct()
	  {
		echo "\n Welcome to Employee Wage Computation Program \n";
	  }

	  public function calculateMonthlyWages(){
		 $totalEmpHrs = 0 ;
		 $totalEmpWage = 0 ;
		 $empWorkingDays=20;
		$fullTime=1;
		$partTime=2;
		$ratePerHour=20;

		for($day=0;$day<$empWorkingDays;$day++){

		$empCheck= rand(0,2);

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
		$totalEmpHrs=$totalEmpHrs+$empHrs;
	}
			$totalEmpWage=$ratePerHour*$totalEmpHrs;
		echo"\n employee Monthly Wages:". $totalEmpWage;		  		  
   }
}
   $emp = new EmployeeWage();
	  $emp->calculateMonthlyWages();
  	  
?>	