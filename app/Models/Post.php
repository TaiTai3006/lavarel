<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use Commentable;
    use HasFactory;
    use Sluggable;
    protected $fillable = ['title','slug','description','image_path','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sluggable():array
    {
        return[
            'slug'=>[
                'source' => 'title'
            ]
            ];
    }
}
