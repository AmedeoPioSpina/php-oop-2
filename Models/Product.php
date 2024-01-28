<?php 
    require_once __DIR__ . '/Category.php';

    class Product extends Category {
        public $title;
        // public $price;
        // public $imgUrl;

        public function __construct($name, $_title )
        {
            parent::__construct($name, $_title);
            $this->title = $_title;
            // $this->title = $_productInfo[1];
            // $this->price = $_productInfo[2];
            // $this->imgUrl = $_productInfo[0];
        }
    };
?>