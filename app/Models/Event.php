<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'event_date',
        'event_time',
        'images',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'images' => 'array', // Cast the 'images' column as an array
    ];
    protected $appends = ['image_urls'];

    /**
     * Accessor to get full image URLs.
     *
     * @return array
     */
    public function getImageUrlsAttribute()
    {
        $imageUrls = [];
        foreach ($this->images as $imagePath) {
            $imageUrls[] = url($imagePath); // Make sure the URL is correct
        }

        return $imageUrls;
    }
}
