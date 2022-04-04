<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{

    // метод получает все записи из телефонного справочника 
    public function index()
    {

        // $users = Phonebook::all();

        //$users = Phonebook::orderBy('name')->get(); //сортировка в алффвитном пордке 
        $users = Phonebook::orderBy('name')->paginate(10); //сортировка в алффвитном пордке 

        //dd($users); // выводит коллекцию из 100 записей
        return view('home', compact('users')); // подключаем вид 'home' и при помощи compact('users') передаём users

    }


    // создадим ЭКШН / метод для search
    // нам нужно получить данные из массива GET 
    public function search(Request $request)  // из данного объекта Request мы можем получать параметры
    {
        $s = $request->s;  // так же только если на нативном PHP $s = $_GET['s'];
        // dd($s);

        // далее выберем пользователей
        // where('name') это поиск по полю name
        $users = Phonebook::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);

        return view('home', compact('users'));
    }
}
