<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    public function has_one_company()
    {
        $this->belongsTo(Company::class);
    }
}
