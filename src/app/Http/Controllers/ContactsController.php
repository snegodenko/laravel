<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ContactsController extends Controller
{
    public function view()
    {

        return view('contacts.index');
    }
}
