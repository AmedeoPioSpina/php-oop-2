<?php 
    class Product {
        public $imgUrl;
        public $title;
        public $prize;
        public $categoryIcon;

        public function __construct(array $_productInfo)
        {
            $this->imgUrl = $_productInfo[0];
            $this->title = $_productInfo[1];
            $this->prize = $_productInfo[2];
            $this->categoryIcon = $_productInfo[3];
        }
    };
?>