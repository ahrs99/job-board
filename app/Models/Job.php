<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_posts';
    public static array $experience =  ['entry', 'intermediate', 'senior'];
    public static array $categories =  ['IT', 'Finance', 'Sales', 'Marketing'];

    use HasFactory;
}
