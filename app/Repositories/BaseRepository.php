<?php


namespace App\Repositories;


class BaseRepository
{
    public function save($obj)
    {
        $obj->save();
    }
    public function delete($obj)
    {
        $obj->delete();
    }
    public function restore($obj)
    {
        $obj->restore();
    }
}
