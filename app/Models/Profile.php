<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

// Laravel has a feature called model factories that allows you to build
//fake data for your models. It is very useful for testing and seeding fakedata into your database to see your code in action before any real user data comes in
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title',
        'linkUrl',
        'description',
        'profileImage'
    ];

}
