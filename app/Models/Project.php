<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'project_category_id',
        'photo_id',
        'title',
        'slug',
        'body',
        'meta_title',
        'meta_description',
        'image_featured2',
        'img_gal1',
        'img_gal2',
        'img_gal3',
        'img_gal4',
        'img_gal5',
        'img_gal6',
        'img_gal7',
        'img_gal8',
        'img_gal9',
        'img_gal10',
        'img_gal11',
        'img_gal12',
        'img_gal13',
        'img_gal14',
        'img_gal15',
        'img_gal16',
        'img_gal17',
        'img_gal18',
        'img_gal19',
        'img_gal20',

        'date',
        'client',
        'button_text',
        'button_link',
        'review',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function project_category()
    {
        return $this->belongsTo('App\Models\ProjectCategory');
    }

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
