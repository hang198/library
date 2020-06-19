<?php


namespace Tests;


use App\Http\Controllers\RoleConstant;

trait DefaultConstants
{
    public $defaultAdminId = 1;
    public $defaultAdminUserName = "admin@gmail.com";
    public $defaultAdminName = "Admin";
    public $defaultAdminPhone = "098676352";
    public $defaultAdminPassword = "admin";
    public $defaultAdminRole = RoleConstant::ADMIN;

    public $secondAdminUserName = "admin2@gmail.com";
    public $secondAdminName = "Admin2";
    public $secondAdminPhone = "092676352";
    public $secondAdminPassword = "admin2";
    public $secondAdminRole = RoleConstant::ADMIN;
}
