<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $a1=array("Dog","Dog","Cat","abo","abo","abo");
        $a2=array("Pluto","Fido","Missy","Missy","Fido");

        array_multisort($a1,$a2);
        print_r($a1);
        print_r($a2);
    }
}
