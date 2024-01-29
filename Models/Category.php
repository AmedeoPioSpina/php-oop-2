<?php 
    class Category {
        public $name;
        public $specie;
        public $articleTypology;
        public $iconCategoryUrl;

        public function __construct(string $_name, string $_specie, string $_articleTypology, string $_iconCategoryUrl)
        {
            $this->name = $_name;
            $this->specie = $_specie;
            $this->articleTypology = $_articleTypology;
            $this->iconCategoryUrl = $_iconCategoryUrl;
        }
    }
?>