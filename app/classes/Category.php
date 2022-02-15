<?php


namespace App\classes;


class Category
{
    public function index(){
        return [
          0 => [
              'id'   => 1,
              'name' => 'Home'
          ],
          1 => [
              'id'   => 2,
              'name' => 'File Upload'
          ],
          2 => [
              'id'   => 3,
              'name' => 'File Write'
          ]
        ];
    }
}