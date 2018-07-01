<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RescisaoRepository;
use App\Entities\Rescisao;
use App\Validators\RescisaoValidator;

/**
 * Class RescisaoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RescisaoRepositoryEloquent extends BaseRepository implements RescisaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Rescisao::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RescisaoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
