<?php

class User
{
    protected $phone;

    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
        //$this->phone = new Phone(); //ここでインスタンス化するんじゃなくてclass外でする。
    }

    public function UserCallPhone()
    {
        $this->phone->call();
    }

}

class Phone
{
    public function call()
    {
        echo 'プルプル...';
    }
}

$phone = new Phone();  //インスタンス化はclass外で
$user = new User($phone);  //Phoneクラスのインスタンス引数を渡す


$user->UserCallPhone();  //UserクラスからPhoneクラスを取り出し。
$phone->call();  //Phoneクラスから直接取り出し。
