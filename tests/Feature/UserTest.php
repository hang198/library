<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testAdminLoginSuccess()
    {
        $userAdmin = $this->getNewAdmin();
        $userAdmin->save();

        $data = [
            'email' => $userAdmin->email,
            'password' => $userAdmin->password
        ];

        $response = $this->post('/login', $data);
        $response->assertStatus(302);

        $response = $this->get('/admin');
        $response->assertStatus(302);
    }

    public function testUserLoginWithNoData()
    {
        $data = [
            'email' => '',
            'password' => ''
        ];

        $response = $this->post('/login', $data);
        $response->assertStatus(302);

        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSeeText('The password field is required.');
    }

    public function testAdminViewListUser()
    {
        $user = $this->loginIsAdmin();

        $response = $this->get('/admin/users');
        $response->assertStatus(200);
        $response->assertSeeText('List Users');
    }

    public function testAdminEditUser()
    {
        $admin = $this->loginIsAdmin();

        $user = $this->getNewSecondAdmin();
        $user->save();

        $data = [
            'name' => 'ssadasd',
            'email' => 'phan@gmail.com',
            'phone' => '098726364',
            'address' => 'HP'
        ];

        $response = $this->post("/admin/users/$user->id/update", $data);
        $response->assertStatus(302);

        $response = $this->get('/admin/users');
        $response->assertStatus(200);
        $response->assertSeeText('');

    }
}
