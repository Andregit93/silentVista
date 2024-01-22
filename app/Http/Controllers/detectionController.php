<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detectionController extends Controller
{
    public function runPythonScript()
    {
        return exec('python D:/LaravelApp/LaraBlog/DetectionApp/classifier.py');
        // atau menggunakan shell_exec() jika diperlukan
        // shell_exec('python /path/to/your/python/script.py');
    }
}
