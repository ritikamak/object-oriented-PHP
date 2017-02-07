<?php
  // This is the file for the child class; will extend IceCream.php
  class WeeklySpecial extends IceCream {
    public $apparel;
    public $discount;

    public function __construct($flavor, $topping, $syrup, $container, $apparel, $discount) {
      $this->flavor		= $flavor;
      $this->topping	= $topping;
      $this->syrup		= $syrup;
      $this->container	= $container;
      $this->apparel 	= $apparel;
      $this->discount	= $discount;
	}

    public function characteristics() {
      parent::characteristics();
      echo "Because...You will get a free $this->apparel.<br/>";
      echo "Because...You will get $this->discount off this order.<br/>";
    }

    public function getApparel() {
      return $this->apparel;
    }

    public function getDiscount() {
      return $this->discount;
    }

    public function diet() {
      if(($this->getTopping() == "thanksgiving turkey chunks") || ($this->getTopping() == "spicy salmon sushi roll")) {
        echo "(This option is non-vegetarian.)<br/>";
      }
    }
  }
?>
