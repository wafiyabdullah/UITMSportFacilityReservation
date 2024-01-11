<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{   
    public function facility()
    {
        return $this->belongsTo(Facility::class, 'facility_id');
    }

    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }
    
    use HasFactory;
}
