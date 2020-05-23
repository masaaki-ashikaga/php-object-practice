<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

//インターフェース
interface ProductInterface{
    //変数  関数
    // public function echoProduct(){
    //     echo '親クラスです。';
    // }
    
    public function getProduct();
}

//インターフェース
interface NewsInterface{
    //変数  関数
    // public function echoProduct(){
    //     echo '親クラスです。';
    // }

    public function getNews();
}

//具象クラス、親クラス / 基底クラス / スーパークラス
class BaseProduct{
    //変数  関数
    public function echoProduct(){
        echo '親クラスです。';
    }

    //オーバーライド（上書き） /子クラスの方が優先される。
    public function getProduct(){
        echo '親の関数です。';
    }
}

//子クラス
class Product implements ProductInterface, NewsInterface{
    //アクセス修飾子： 
    //privete（クラス内だけ）
    //protected（自分と継承したクラスのみ）
    //public（公開）

    //変数
    private $product = [];

    //関数
    function __construct($product){
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    public function getNews(){
        echo 'ニュースです。';
    }
    
    //staticと付けることで静的に関数を使うことができる
    public static function getStaticProduct($str){
        echo $str;
    }
}

    $instance = new Product('テスト');

    // var_dump($instance);

    $instance->getProduct();
    echo '<br>';

    //親クラスのメソッド
    // $instance->echoProduct();
    // echo '<br>';
    
    $instance->addProduct('追加分');
    echo '<br>';

    $instance->getProduct();
    echo '<br>';

    $instance->getNews();
    echo '<br>';

    //静的(static) クラス名::関数名
    Product::getStaticProduct('静的');
    echo '<br>';
    



?>