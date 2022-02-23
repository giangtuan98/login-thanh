<?php

namespace App\Repositories;

abstract class RepositoryAbstract implements RepositoryInterface
{

    protected $model;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function with(array $withModel = [''])
    {
        $model = $this->with($withModel);

        return $model;
    }

    public function store(array $data)
    {
        return $this->model::create($data);
    }

    public function insert(array $data)
    {
        return $this->model::insert($data);
    }

    public function update(mixed $id, array $data)
    {
        return $this->model::findOrFail($id)->update($data);
    }

    public function destroy(mixed $ids)
    {
        $this->model::destroy($ids);
    }

    public function exist(mixed $id): bool
    {
        return !empty($this->find($id));
    }

    public function updateOrCreate($condition, $data)
    {
        return $this->model->updateOrCreate($condition, $data);
    }

    public function findByField(mixed $field, mixed $value)
    {
        return $this->model->where($field, $value);
    }

    public function findByFields(array $conditions)
    {
        return $this->model->where($conditions);
    }

    public function delete(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }

    public function find(mixed $id)
    {
        return $this->model::find($id);
    }

    public function findOrFail(mixed $id)
    {
        return $this->findOrFail($id);
    }

    public function firstOrCreate(array $data)
    {
        return $this->model->firstOrCreate($data);
    }

    public function upsert(array $data, array $keys, array $fields)
    {
        return $this->model->upsert($data, $keys, $fields);
    }
}
