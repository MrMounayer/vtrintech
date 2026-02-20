<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;

class Vitrine extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $guarded = [];

    protected $casts = [
        'links' => 'array',
        'settings' => 'array',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('hero')->singleFile(); 
        $this->addMediaCollection('background')->singleFile(); 
        $this->addMediaCollection('carousel'); 

    }


}
