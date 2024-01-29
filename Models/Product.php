<?php 
    require_once __DIR__ . '/Category.php';

    class Product extends Category {
        public $title;
        public $price;
        public $imgUrl;

        public function __construct(string $_name, string $_specie, string $_articleTypology, string $_iconCategoryUrl, $_title, float $_price, string $_imgUrl )
        {
            parent::__construct($_name, $_specie, $_articleTypology, $_iconCategoryUrl);
            $this->title = $_title;
            $this->price = $_price;
            $this->imgUrl = $_imgUrl;
        }
    };
?>