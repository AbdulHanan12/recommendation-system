<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMovie extends Model
{
    protected $table = 'company_movie';

    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
