<?php

// interface Car{
//     public function color();
    
//     public function engine();

//     public function model();
// }

// class LatestCar implements Car{

//     public function color(){
//         echo 'Red';
//     }

//     public function engine(){
//         echo '4000CC';
//     }

//     public function model(){
//         echo 'MT2024';
//     }

//     public function testDrive(){
//         echo 'This is for test drive!';
//     }
// }

// $latestCar = new LatestCar();
// $latestCar->model();

trait message1{
    public function sendMessage(){
        echo 'Sender';
    }
}

trait message2{
    public function receiveMessage(){
        echo 'Receiver';
    }
}

class CreateMessagingApp{

    use message1, message2;

    public function userApp(){
        $this->sendMessage();
        $this->receiveMessage();
    }
}

$messageApp = new CreateMessagingApp();
$messageApp->userApp();
?>