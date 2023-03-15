<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    use HasFactory;
    protected $table = 'interview';
    protected $fillable = ['id', 'del_flag', 'intervew_id', 'member_id', 'evaluation','created_by', 'modified_by', 'created_at', 'updated_at'];

}
