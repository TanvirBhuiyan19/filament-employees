<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'address', 'zip_code', 'birth_date', 'date_hired', 
    'country_id', 'state_id', 'city_id', 'department_id'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    
    public function state(){
        return $this->belongsTo(State::class);
    }
    
    public function city(){
        return $this->belongsTo(City::class);
    }
    
    public function department(){
        return $this->belongsTo(Department::class);
    }

}
