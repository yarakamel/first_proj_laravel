<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphan extends Model
{
    //
    use HasFactory;
    protected $table="orphans";
    protected $fillable = ['id_no', 'full_name'];

}
