<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Hash;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DefaultConstants;
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    public function loginIsAdmin()
    {
        $user = new User();
        $user->name = $this->defaultAdminName;
        $user->email = $this->defaultAdminUserName;
        $user->phone = $this->defaultAdminPhone;
        $user->password = Hash::make($this->defaultAdminPassword);
        $user->role = $this->defaultAdminRole;
        $user->save();
        return $user;
    }


    public function getNewAdmin()
    {
        $user = new User();
        $user->name = $this->defaultAdminName;
        $user->email = $this->defaultAdminUserName;
        $user->phone = $this->defaultAdminPhone;
        $user->password = Hash::make($this->defaultAdminPassword);
        $user->role = $this->defaultAdminRole;
        return $user;
    }

    public function getNewSecondAdmin()
    {
        $user = new User();
        $user->name = $this->secondAdminName;
        $user->email = $this->secondAdminUserName;
        $user->phone = $this->secondAdminPhone;
        $user->password = Hash::make($this->defaultAdminPassword);
        $user->role = $this->secondAdminRole;
        return $user;
    }
}
