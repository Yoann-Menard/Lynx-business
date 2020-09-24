<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function Index() {
        return view('pages.welcome');
    }

    public function About() {
        $first = 'Yoann';
        $last = 'Menard';

        $fullname = $first . " " . $last;
        $email = 'yoann.menard@epitech.eu';

        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function Contact() {
        return view('pages.contact');
    }
}
?>