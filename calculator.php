 <?php
 
 // Refactoring
 public class Calculator 
 {
 
	public function plus ($a, $b){
		return $a + $b
	}
	
	
	
	
	public function Minus($Zahl1, $zahl2)
	{
		return $Zahl1-$zahl2; // Calculates $Zahl1-$zahl2
	}

	public static function SubTract ($a, $b){
		return Minus($a, $b);
	}
	
	
	
	public function squareRoot($a)
	{
		return sqrt($a);
	}

	
	/**
	 * Berechnet eine division:
	 * @param int $value Divisor
	 * @param int $value2 Divident
	 * @return double
	 */
	public static function Calculate($value, $value2)
	{
		$result = $value / $value2;
		return $result;
	}
	
	
	/** multiplies two values */
	private function multiply_values($number1, $number2){
		$result=$number1*$number2;
		return $result;
	}
	
	
	/**
	 * Needed until 2013-03-01 for backwards compatibility
	 */
	private function output($line) {
		echo $line;
	}
	
}