<?php namespace Editllc\LaravelMontage;

use Illuminate\Support\Facades\Facade;

class LaravelMontageFacade extends Facade {

    protected static function getFacadeAccessor() { return 'montage'; }

}
