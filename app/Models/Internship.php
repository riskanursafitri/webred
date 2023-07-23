<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Internship extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'instansi',
        'phone_number',
        'file',
    ];

    public static function index()
    {
        return Internship::all();
    }

    public static function store(Request $request)
    {
        Internship::create($request->all());
    }
}
