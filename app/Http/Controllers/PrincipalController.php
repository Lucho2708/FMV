<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view ('website.home');
    }

    public function quienes()
    {
        return view ('website.quienesomos');
    }


    public function grupo()
    {
        return view ('website.grupo');
    }

    public function proyectos()
    {
        return view ('website.proyectos');
    }

    public function servicio()
    {
        return view ('website.servicio');
    }

    public function contacto()
    {
        return view ('website.contactenos');
    }

    public function login()
    {
        return view ('auth.login');
    }

}