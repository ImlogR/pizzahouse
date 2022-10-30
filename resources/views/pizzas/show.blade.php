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
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="text-gray-900 dark:text-white">Served for/as:</a>
                                </div>
                            </div>
                                    <div class="wrapper pizza-details">
                                        <h1>Order for {{ $pizza -> name }}</h1>
                                        <p class="type">Type - {{ $pizza->type }}</p>
                                        <p class="base">Base - {{ $pizza -> base }}</p>
                                        @if($pizza->toppings != 0)
                                            <p class="base">Toppings:</p>
                                            <ul>
                                                @foreach($pizza-> toppings as $topping)
                                                    <li>{{$topping}}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>No extra toppings required!</p>
                                        @endif
                                        <form action="{{route('pizzas.destroy', $pizza-> id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button>Complete Order!</button>
                                        </form>
                                    </div>
                                <style>
                                    button{
                                        width: 100%;
                                        background: transparent;
                                        border: 1px solid #fff;
                                        margin: 35px 0 10px;
                                        height: 32px;
                                        font-size: 12px;
                                        border-radius: 20px;
                                        padding: 0 10px;
                                        box-sizing: border-box;
                                        outline: none;
                                        color: orange;
                                        cursor: pointer;
                                    }
                                </style>
                    </div>
                </div>
                <div style="text-align: right; padding-right: 20px; padding-bottom: 10px;"><a title="return home" href="{{route('pizzas.index')}}" class="text-gray-900 dark:text-white"><i class="fa-solid fa-rotate-left"></i></a></div>
                </div>
            </div>
        </div>
    </body>
@endsection
