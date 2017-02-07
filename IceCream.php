<?php
  // This is the file for the parent class
  class IceCream {
    public $flavor;
    public $topping;
    public $syrup;
    public $container;

    public function __construct($flavor, $topping, $syrup, $container) {
      $this->flavor    = $flavor;
  	  $this->topping   = $topping;
	    $this->syrup     = $syrup;
	    $this->container = $container;
    }

  	public function characteristics() {
      echo "Why pick this ice cream?<br/>";
	    echo "Because...it is delicious.<br/>";
  	}

  	public function getFlavor() {
	    return $this->flavor;
  	}

  	public function getTopping() {
	    return $this->topping;
  	}

  	public function getSyrup() {
	    return $this->syrup;
  	}

    public function getContainer() {
      return $this->container;
    }

    public function diet() {
    }

    public function __toString() {
      $kind = "FLAVOR: " . $this->getFlavor() . "";
      $top = "This flavor is paired with the " . $this->getTopping() . " topping.";
      $liquid = "We will even pour some delicious " . $this->getSyrup() . " on it.";
      $cone = "You can choose a cup or cone. This week's cone special is " . $this->getContainer() . ".";
      return $kind . "<br>" . $top . "<br>" . $liquid . "<br>" . $cone . "<br>";
    }

    public function enjoy() {
      echo "Don't second-guess your decision!<br/>As long as you chose whatever your heart desires, you made the right choice!<br/>";
    }
  }
?>
