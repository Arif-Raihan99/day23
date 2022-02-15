<?php


namespace App\classes;


class StudentInfo
{
    protected $name, $email, $phone, $value, $result, $imgName, $imgDirectory, $imgFile ;

    public function __construct($data=null, $file=null)
    {
        if ($data){
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->phone = $data['phone'];
            $this->value = $data;
        }
        if ($file){
            $this->imgFile = $file['image'];
        }
    }

    public function info(){
//        $this->imgName = time().$this->imgFile['name'];
//        $this->imgDirectory = 'assets/img/upload/'.$this->imgName;
//        move_uploaded_file($this->imgFile['tmp_name'], $this->imgDirectory);
//        echo "success";

        $db = 'db.txt';
        $file = fopen($db, 'a');
        fwrite($file, 'Arif Raihan');
//        fwrite(fopen('db.txt', 'a'), 'Arif Raihan');
        fclose($file);
        echo 'success';
     }


//    public function info(){
//        $this->imgName = $_FILES['image']['name'];
//        $this->imgDirectory = 'assets/img/upload/'.$this->imgName;
//        move_uploaded_file($_FILES['image']['tmp_name'], $this->imgDirectory);
//     }
}