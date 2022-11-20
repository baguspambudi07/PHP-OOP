<?php 
        //class
            class robot{

        //public, protected, private

        //property
                private $suara;
                public $berat;

        //konstruktor
                public function__construct($suara, $berat){
                   $this->suara = $suara;
                   $this->berat = $berat;
                }
        

        //metode set && metode get

                public function set_suara($suara){
                    $this->suara = $suara1;
                    return $this;
                }

                public function get_suara(){
                    return $this->suara;
                }

                public function set_berat($berat){
                    $this->berat = $berat;
                }

                public function get_berat(){
                    return $this->berat;
                }

        //magic methods
                public function__toString(){
                    echo 'ini adalah kelas';
                }


    }
    ?>