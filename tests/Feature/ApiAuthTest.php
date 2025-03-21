<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
Use Laravel\Sanctum\Sanctum;

class ApiAuthTest extends TestCase
{
   use RefreshDatabase;

   public function test_user_can_register_via_api():void{
       $response = $this->postJson('/api/auth/register', [
          'name' => 'Test Unit',
          'email' => 'testunit@mail.com',
          'password' => 'testpass',
          'password_confirmation' => 'testpass'
       ]);

       $response->assertStatus(201)
           ->assertJsonStructure(['user', 'token']);
   }

   public function test_user_can_login_via_api(){

       User::factory()->create([
          'email' => 'testunit@mail.com',
          'password'=> 'testpass'
       ]);

      $response = $this->postJson('api/auth/login', [
          'email' => 'testunit@mail.com',
          'password' => 'testpass'
      ]);
      $response->assertStatus(200)
          ->assertJsonStructure(['user', 'token']);
   }

    public function test_authenticated_user_can_access_test_endpoint(): void
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user, ['*']); // Simulira autentifikovanog korisnika

        $response = $this->getJson('/api/test');

        $response->assertStatus(200)
            ->assertJson(['message' => 'Authenticated']);
    }

    public function test_unauthenticated_user_cannot_access_test_endpoint() : void{
       $request = $this->getJson('api/test');
       $request->assertStatus(401);
    }

    public function test_user_can_logout_via_api(): void{
        $user = User::factory()->create();
        Sanctum::actingAs($user, ['*']); // Simulira autentifikovanog korisnika

        $response = $this->postJson('/api/auth/logout');

        $response->assertStatus(200)
            ->assertJson(['message' => 'Logged out']);
    }

    public function  test_non_admin_user_cannot_access_admin_dashboard(): void {
       $user = User::factory()->create();
       Sanctum::actingAs($user,['*']);
       $response = $this->getJson('api/admin/dashboard');
       $response->assertStatus(403);
    }

    public function  test_admin_user_can_access_admin_dashboard(): void {
        $admin = User::factory()->create(['role' => 'admin']);
        Sanctum::actingAs($admin,['*']);
        $response = $this->getJson('api/admin/dashboard');
        $response->assertStatus(200)
            ->assertJsonStructure();
    }


}
