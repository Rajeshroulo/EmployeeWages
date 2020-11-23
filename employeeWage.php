<?php

/**
 * @description 
 * @class
 * @function
 */
class EmployeeWage
{
	 var $emp_working_hrs = 0;
	 var $emp_working_days = 0;
	 var $total_emp_wage = 0;
		
	public function __construct($emp_working_hrs,$emp_working_days)
	{
		echo "\n Welcome to Employee Wage Computation Program \n";
	}

	public function calculateMonthlyWages()
	{
		$max_working_days = 20;
		$max_working_hours = 100;

		$fullTime = 1;
		$partTime = 2;
		$ratePerHour = 20;

		while ($this->emp_working_days < $max_working_days && $this->emp_working_hrs <= $max_working_hours) {
			$this->emp_working_days++;
			$empCheck = rand(0, 2);

			switch ($empCheck) {
				case $fullTime:
					$emp_hrs = 8;
					break;

				case $partTime:
					$emp_hrs = 4;
					break;

				default:
					$emp_hrs = 0;
			}
			$this->emp_working_hrs = $this->emp_working_hrs + $emp_hrs;
		}
		$totalEmpWage = $ratePerHour * $this->emp_working_hrs;
		echo "\n employee Monthly Wages:" . $totalEmpWage . "\n";
	}
	
	function writeEmployeeWageOutput()
	{
		   		$file = "employeeData.csv";
				$csv = file_get_contents($file);
				// takes a string of CSV data and returns a JSON representing an array of objects (one object per row)
				$array = array_map("str_getcsv", explode("\n", $csv));
				$fp = fopen('employeeDetails.json', 'w');
				fwrite($fp, json_encode($array));
				fclose($fp);
	}


	function readEmployeeData()
	{
		if (($h = fopen("employeeData.csv", "r")) !== FALSE) {
			// Convert each line into the local $data variable
			// The items of the array are comma separated
			while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
				
    			// Read the data from a single line
  			}

			// Close the file
			fclose($h);
		}
	}
}
$emp = new EmployeeWage($emp_working_hrs,$emp_working_days);
$emp->calculateMonthlyWages();
$emp->writeEmployeeWageOutput();
?>