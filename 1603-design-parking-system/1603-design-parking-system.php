class ParkingSystem {
    private $big = 0;
    private $medium = 0;
    private $small = 0;
    function __construct($big, $medium, $small) {
        $this->big = $big;
        $this->medium = $medium;
        $this->small = $small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        if ($carType === 1) 
            if ($this->big === 0) return false;
            else $this->big--;
        else if ($carType === 2) 
            if ($this->medium === 0) return false;
            else $this->medium--;
        else if ($carType === 3) 
            if ($this->small === 0) return false;
            else $this->small--;
        return true;
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */