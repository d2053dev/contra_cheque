<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Funcionario;

/**
 * Class FuncionarioTransformer.
 *
 * @package namespace App\Transformers;
 */
class FuncionarioTransformer extends TransformerAbstract
{
    /**
     * Transform the Funcionario entity.
     *
     * @param \App\Entities\Funcionario $model
     *
     * @return array
     */
    public function transform(Funcionario $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
