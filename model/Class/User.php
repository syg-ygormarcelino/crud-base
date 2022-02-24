<?php

namespace Class;

require '../model/Db/Database.php';

use Db\Database;
use \PDO;

class User{

    public $id;
    public $username;
    public $email;
    public $password;
    public $datetime;

    public function store(){

        $database = new Database('users');

        $this->id = $database->insert([
            'username' => $this->username,
            'email'    => $this->email,
            'password' => $this->password,
            'datetime' => $this->datetime
        ]);

        return true;

    }

    public function edit(){
        return (new Database('users'))->update('id = '.$this->id,[
            'username'  => $this->username,
            'email    ' => $this->email,
            'password'  => $this->password,
            'datetime'  => $this->datetime
        ]);
    }

    public function destroy(){
        return (new Database('users'))->delete('id = '.$this->id);
    }

    public static function list($where = null, $order = null, $limit = null){
        return (new Database('users'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function search($id){
        return (new Database('users'))->select('id = '.$id)
                                  ->fetchObject(self::class);
    }

}