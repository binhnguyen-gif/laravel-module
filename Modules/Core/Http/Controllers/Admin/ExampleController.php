<?php


namespace Modules\Core\Http\Controllers\Admin;


use Illuminate\Routing\Controller;

class ExampleController extends Controller
{
    public function icons(){
        return view("core::admin.example.icon");
    }
}
