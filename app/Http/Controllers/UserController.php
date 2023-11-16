<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        /**
         * 1. posortuj użytkowników po urodzinach tzn po miesiącu i dniu (rok nie jest ważny)
         *  1.1 znajdź użytkowników którzy mają urodziny w tym tygodniu
         */

        /**
         *  2.
         * napisz zapytanie pobierające użytkowników z ich ostatnim loginem
         * zapytanie powinno być jak najbardziej zoptymalizowane 
         * ostatni login wyświetl w formacie "diffForHumans"
         * 
         */

        $users = User::get();

        return view('users.index', compact('users'));
    }
}
