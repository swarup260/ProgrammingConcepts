<?php 

require_once('./vendor/autoload.php');

$loop = React\EventLoop\Factory::create();

$loop->addTimer(0.3, function () {
    echo 'world!' ;
});

$loop->addTimer(0.4, function () {
    echo 'hello '. PHP_EOL;
});

/*  
    var_dump(
        get_class_methods($loop)
    );

array(13) {
  [0]=>
  string(11) "__construct"
  [1]=>
  string(13) "addReadStream"
  [2]=>
  string(14) "addWriteStream"
  [3]=>
  string(16) "removeReadStream"
  [4]=>
  string(17) "removeWriteStream"
  [5]=>
  string(8) "addTimer"
  [6]=>
  string(16) "addPeriodicTimer"
  [7]=>
  string(11) "cancelTimer"
  [8]=>
  string(10) "futureTick"
  [9]=>
  string(9) "addSignal"
  [10]=>
  string(12) "removeSignal"
  [11]=>
  string(3) "run"
  [12]=>
  string(4) "stop"
}
*/

$loop->run();

