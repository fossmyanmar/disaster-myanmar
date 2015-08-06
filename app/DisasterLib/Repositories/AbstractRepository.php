<?php 

namespace Disaster\DisasterLib\Repositories;

/**
 * Abstract Repository
 * @author Naing Win
 */
abstract class AbstractRepository
{
    protected $model;

    public function __construct(\Model $model)
    {
        $this->model = $model;
    }

    public function getAll($sort_field = 'id', $sort_type = 'asc')
    {
        return $this->model->orderBy($sort_field, $sort_type)->get();
    }

    public function getPaginated($limit = 20)
    {
        return $this->model->latest('id')->paginate($limit);
    }

     public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $model = $this->getById($id);
        $model->fill($data);
        return $model->push();
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function getCount()
    {
        return $this->model->count();
    }
}