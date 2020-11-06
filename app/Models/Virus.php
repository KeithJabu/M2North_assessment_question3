<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virus extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'Country',
            'Total_cases',
            'New_cases',
            'Total_deaths',
            'New_deaths',
            'Total_Recovered',
    ]; 
    
     protected $dates = [
        'created_at', 
        'updated_at'
    ]; 
    
    public function user(){
        return $this->belongsTo('App\Models\User'); 
    }
}
