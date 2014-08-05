<?php 

/**
*
*  Dummy shopping cart
*
*/
class Cart {

	function __construct() {
		$this->amount = rand(1,50);
	}

		/**
		*
		* Shopping cart checkout
		*
		* @author Omed Habib <omed@appdynamics.com>
		*/
        public function checkout($amount) {

        	// A random slow call...
			if ($amount % 10 == 0)
				sleep(12);

        	return $amount;
        }
}

?> 