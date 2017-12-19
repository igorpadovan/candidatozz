<?php

# app/Models/Candidate.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Candidate extends Model
{
    protected $fillable = ['name', 'phone', 'state', 'city'];
}