<?php

namespace GetRight\Slider\Repositories;

use GetRight\Slider\Models\Slide;

/**
 * Class ServiceRepository
 * @package GetRight\Services\Repositories
 * @author getRight
 */
class SliderRepository{

    /**
     * @var $model
     */
    protected $model;

    /**
     * ServiceRepository constructor.
     */
    public function __construct(Slide $model) {
        $this->model = $model;
    }

    /**
     * Get all slides.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Create model.
     *
     * @param array $data
     * @return \GetRight\Slider\Models\Slide
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
