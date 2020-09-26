<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function Index() {
        return view('pages.welcome');
    }

    public function About() {
        return view('pages.about');
    }

    public function Contact() {
        return view('pages.contact');
    }

    public function Register() {
        return view('pages.register');
    }

    public function Login() {
        return view('pages.login');
    }
}
?>