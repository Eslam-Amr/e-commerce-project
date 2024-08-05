<?php

namespace App\Entities;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class HomeRepo.
 *
 * @package namespace App\Entities;
 */
class HomeRepo extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    public function getProductPaginatedForHomePage(){
        return Product::inRandomOrder()->where('admin-acceptance',1)->where('hide',0)->take(10)->get();

    }

}
