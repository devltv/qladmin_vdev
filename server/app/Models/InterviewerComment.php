<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewerComment extends Model
{
    use HasFactory;
    protected $table = 'interview';
    protected $fillable = ['id', 'del_flag', 'interviewer_id', 'comment', 'rating', 'created_at', 'updated_at'];
}
