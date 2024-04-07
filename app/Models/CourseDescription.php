<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDescription extends Model
{
    use HasFactory;
    # set the table name
    protected $table = 'course_description'; 
}
