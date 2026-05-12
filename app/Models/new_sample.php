<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class new_sample extends Model
{
    //
    protected $table = 'new_samples';

    protected $fillable = ['sample_name', 'sample_occupation', 'sample_nickname'];
}
