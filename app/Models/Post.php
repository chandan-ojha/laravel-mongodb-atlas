<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'blog_posts';
    protected $table = 'posts';
    protected $guarded = [];

}
