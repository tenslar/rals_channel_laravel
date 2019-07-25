<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        return view('hello');
    }

    public function postHello(Request $request)
    {
        $name = $request->get('name');
        $temp_name = $request->get('temp_name');

        $repository = new CategoryRepository();
        $repository->save(['name' => $name, 'temp_name' => $temp_name]);
        return view('post_hello', ['name' => $name, 'temp_name' => $temp_name]);
    }
}
