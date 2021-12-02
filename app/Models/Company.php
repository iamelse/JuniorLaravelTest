<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function has_many_employees()
    {
        $this->hasMany(Employee::class);
    }
}
