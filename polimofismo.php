<?php
class Animal {

    public function Andar()
    {
        echo 'O animal andou';
    }

    public function Correu()
    {
        echo 'o animal correu';
    }


}

class Cavalo extends Animal {

    public function Andar()
    {
      $this->Correu ();
    }

}
$animal = new Cavalo();
$animal ->Andar ();


