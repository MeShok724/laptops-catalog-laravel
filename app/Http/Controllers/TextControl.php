<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TextControl extends Controller
{
    public function index()
    {
        return view('textInput');
    }

    public function process(Request $request)
    {
        $text = $request->input('text');

        // Найти и выделить целые числа синим цветом
        $text = preg_replace('/\b\d+\b/', '<span style="color: blue;">$0</span>', $text);

        // Найти и выделить email адреса красным цветом
        $text = preg_replace('/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/', '<span style="color: red;">$0</span>', $text);

        // Найти и выделить URL
        $text = preg_replace('/\b(https?:\/\/\S+)\b/', '<a href="$1" style="color: red;">$1</a>', $text);

        return view('textOutput', ['processedText' => $text]);
    }
}
