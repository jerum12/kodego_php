<?php 

class BaseObject {

    protected $date;
    private $transaction_name;

    private $tran_type;

    final public function test2(){
        echo "Testing";
    }

    public function __construct(){
        echo "Initializing";

    }
    public function message(){
        echo "This is a message from the BaseObject";
    }

    protected function test(){
        echo "This is a test message from the BaseObject";
    }
    
    
    public function set_date($date){
        $this->date = $date;
    }

    public function get_date(){
        return $this->date;
    }

    public function set_tran_type($date){

    }

    public function get_tran_type(){
        
    }
}


class LoadHandOffFile extends BaseObject{

    private $loaded_by;
    private $file_name;
    private $transaction_status;

    public function message(){
        echo "{$this->date} This is a message from the LoadHandOffFile";
    }

}

class TransactionLogging extends BaseObject{

    private $remarks;
    private $transaction_status;

    public function message(){
        echo "{$this->date} " . $this->test() ."This is a message from the TransactionLogging";
    }

}

$mangoObj = new TransactionLogging();
echo $mangoObj->set_date('March 4, 2023');
echo $mangoObj->get_date();
$mangoObj->message();

?>