<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ExampleTrait;
class TraitController extends Controller
{
    use ExampleTrait;
    public function traitmethods(){
        $this->print();
        $this->anotherMethod();
    }
}
