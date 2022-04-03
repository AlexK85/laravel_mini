<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{

    // метод получает все записи из телефонного справочника 
    public function index()
    {
        $users = Phonebook::all();
        //dd($users); // выводит коллекцию из 100 записей
        return view('home', compact('users')); // подключаем вид 'home' и при помощи compact('users') передаём users
    }
}
