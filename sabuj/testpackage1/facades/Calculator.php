<?php
namespace Sabuj\Testpackage1\Facades;

use Illuminate\Support\Facades\Facade;

Class Calculator extends Facade{


    protected static function getFacadeAccessor(){
        return 'testpackage1';
    }

 public function index(){
     return redirect('/calculator_page');
 }

}