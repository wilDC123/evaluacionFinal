<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'ci', 'email', 'phone', 'birth_date', 
                            'address', 'city', 'country', 'position_id', 'department_id', 'hire_date', 'salary', 'gender'];

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
