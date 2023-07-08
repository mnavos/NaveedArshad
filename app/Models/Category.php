<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',

    ];

    // public function setSlugAttribute(){


    //         $this->attributes['slug'] = Str::slug($this->name , "-", );

    // }

    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value, '-');
        $originalSlug = $slug;
        $count = 1;

        while ($this->slugExists($slug)) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        $this->attributes['slug'] = $slug;
    }

    /**
     * Check if a slug already exists in the database.
     *
     * @param  string  $slug
     * @return bool
     */
    protected function slugExists($slug)
    {
        return static::where('slug', $slug)
            ->where('id', '!=', $this->id ?? null)
            ->exists();
    }
}
