<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
  
    function tasks() {
        return Tasks::with('categoryModel')->paginate(10);
    }

}
