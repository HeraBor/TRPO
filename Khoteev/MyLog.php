<?php namespace Khoteev;

use core\LogAbstract;
use core\LogInterface;

Class MyLog extends LogAbstract implements LogInterface{
    public function _log (String $str){
        $this->log[]=$str;
    }
    public static function log (string $str){
        self::Instance() ->_log ($str);
    }
    public function _write(){
        $log = '';        
        foreach($this->log as $el){
            $log .= $el."\n";
        }
        echo $log;
        $d = new \DateTime();
        $file = "./Log/". $d->format('d-m-Y\TH_i_s_u').".log";
        if (!is_dir('./Log/')) {
            mkdir("./Log/");
        }
        file_put_contents($file,$log);
    }
    public static function write (){
        MyLog::Instance()->_write();
    }
}
?>
