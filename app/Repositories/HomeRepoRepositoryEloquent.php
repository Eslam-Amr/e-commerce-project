<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\HomeRepoRepository;
use App\Entities\HomeRepo;
use App\Validators\HomeRepoValidator;

/**
 * Class HomeRepoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class HomeRepoRepositoryEloquent extends BaseRepository implements HomeRepoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return HomeRepo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
