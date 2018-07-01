<?php

namespace App\Presenters;

use App\Transformers\RescisaoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class RescisaoPresenter.
 *
 * @package namespace App\Presenters;
 */
class RescisaoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new RescisaoTransformer();
    }
}
