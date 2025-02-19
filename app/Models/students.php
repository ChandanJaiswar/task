<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class students extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['student_name', 'class_teacher_id', 'class', 'admission_date', 'yearly_fees'];

    public function teacher()
    {
        return $this->belongsTo(teachers::class, 'class_teacher_id');
    }
}
