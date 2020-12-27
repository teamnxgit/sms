<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class);
    }
    public function count_students(){
        return $this->students()->count();
    }
}
