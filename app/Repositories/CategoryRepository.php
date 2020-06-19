<?php


namespace App\Repositories;


use App\Category;

class CategoryRepository extends BaseRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->all();
    }

    public function findById($id)
    {
        return $this->category->findOrFail($id);
    }

}
