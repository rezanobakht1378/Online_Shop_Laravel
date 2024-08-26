<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = [
        "name",
        "description",
        "price",
        "quantity"
    ];
    public function image()
    {
        return $this->getMedia()->count() > 0 ? $this->getMedia()[0]->getUrl() : asset('img/noImage.png');
    }
}
