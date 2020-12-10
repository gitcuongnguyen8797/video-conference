<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function pageFAQ() {
        return view('faq');
    }
}
