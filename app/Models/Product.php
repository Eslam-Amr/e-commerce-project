<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;

use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasSlug, HasFactory;
    protected $fillable = ['price', 'image', 'discount', 'stock', 'color', 'name', 'size', 'description', 'additonal_information', 'seller_id', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function seller()
    {
        // return $this->hasOne(User::class,'id','seller_id');
        // if ($this->belongsTo(Seller::class) == null)
        //     return $this->belongsTo(Admin::class,'seller_id');
        // else
        return $this->belongsTo(Seller::class);
        // return $this->belongsTo(User::class,'seller_id','id','one-to-many');
    }
    public function admin()
    {
        // return $this->hasOne(User::class,'id','seller_id');
        return $this->belongsTo(Admin::class,'seller_id');

        // return $this->belongsTo(User::class,'seller_id','id','one-to-many');
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
