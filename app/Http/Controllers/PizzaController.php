<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    public function index(){
        $contex= Pizza::all();
        return view('pizzas.index', [
            'pizzas' => $contex,
            'name' => request('name'),
            'age' => request('age'),
        ]);
    }   
    public function shoW($id){

        $pizza= Pizza::findOrFail($id);

        return view('pizzas.show', [
            'pizza' => $pizza
        ]);
    }   
    public function create(){
        return view('pizzas.create');
    }   
    public function store(){

        $pizza= new Pizza();

        $pizza -> name = request('name');
        $pizza -> type = request('type');
        $pizza -> base = request('base');
        $pizza -> toppings = request('toppings');

        $pizza -> save();

        return redirect('/') -> with('msg', 'Your order was succesfully recieved!');
    }
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        
        return redirect('/pizzas');
    }
    public function clogout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
