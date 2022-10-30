@extends('layouts.layout')

@section('content')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="text-gray-900 dark:text-white">Order a new pizza!!</a></div>
                            </div>
                        </div>
                    </div>
                            <form action="/pizzas" method="POST">
                                @csrf
                                <label for="name">Your Name :</label>
                                <input type="text" id= "name" name="name" Required>
                                <label for="type">Choose pizza type:</label>
                                <select name="type" id="type">
                                    <option value="Margherita">Margherita</option>
                                    <option value="Hawaiin">Hawaiin</option>
                                    <option value="Veg-Supreme">Veg-Supreme</option>
                                    <option value="Volcano">Volcano</option>
                                </select>
                                <label for="base">Choose pizza base:</label>
                                <select name="base" id="base">
                                    <option value="Cheesy crust">Cheesy crust</option>
                                    <option value="Garlic Crust">Garlic Crust</option>
                                    <option value="Thin & crispy">Thin & crispy</option>
                                    <option value="Thick greasy">Thick greasy</option>
                                </select><br>
                                <label>Extra Toppings: </label><br>
                                <input type="checkbox" name="toppings[]" value= "mushrooms">Mushrooms</br>
                                <input type="checkbox" name="toppings[]" value= "peppers">peppers</br>
                                <input type="checkbox" name="toppings[]" value= "Garlic">Garlic</br>
                                <input type="checkbox" name="toppings[]" value= "Olives">Olives</br>
                                <fieldset></fieldset>
                                <input type="Submit" value= "Place Order">
                            </form>
                    <div style="text-align: right; padding-right: 20px; padding-bottom: 10px;"><a title="back" href="{{route('welcome')}}" class="text-gray-900 dark:text-white"><i class="fa-solid fa-rotate-left"></i></a></div>
                </div>
            </div>
        </div>
    </body>
@endsection