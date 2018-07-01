<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Rescisao;

/**
 * Class RescisaoTransformer.
 *
 * @package namespace App\Transformers;
 */
class RescisaoTransformer extends TransformerAbstract
{
    /**
     * Transform the Rescisao entity.
     *
     * @param \App\Entities\Rescisao $model
     *
     * @return array
     */
    public function transform(Rescisao $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
