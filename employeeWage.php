<?php
class EmployeeWage
 {
      public function __construct()
	  {
		echo "\n Welcome to Employee Wage Computation Program \n";
	  }

	  public function calculateMonthlyWages(){
		 $emp_Working_Hrs = 0 ;
		 $emp_Working_Days = 0 ;
		 $totalEmpWage = 0 ;
		 $max_Working_Days=20;
		 $max_Working_Hours=100;

		$fullTime=1;
		$partTime=2;
		$ratePerHour=20;

		while( $emp_Working_Days < $max_Working_Days && $emp_Working_Hrs <= $max_Working_Hours ){		
			$emp_Working_Days++;
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
		$emp_Working_Hrs=$emp_Working_Hrs+$empHrs;
	}
			$totalEmpWage=$ratePerHour*$emp_Working_Hrs;
		echo"\n employee Monthly Wages:". $totalEmpWage;		  		  
   }

   function employeewages(){
   if (($h = fopen("employeeData.csv", "r")) !== FALSE) 
   {
	 // Convert each line into the local $data variable
	 while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
	 {		
		   var_dump($data);
	 }
	
	 // Close the file
	 fclose($h);
   }

}
}
  $emp = new EmployeeWage();
  $emp->calculateMonthlyWages();
  $emp->employeewages();	  
?>	