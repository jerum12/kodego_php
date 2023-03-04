<?php

class A {
    public function showBattery(){
        echo "Battery is 10%";
    }
}

trait B {
    public function showPower(){
        echo "Power is 5%";
    }
}

trait C {
    public function showIcon(){
        echo "Power is 5%";
    }
}

class D extends A {
  use B,C;
  
}

$obj_d = new D();
echo $obj_d->showBattery();
echo $obj_d->showPower();
echo $obj_d->showIcon();
?>