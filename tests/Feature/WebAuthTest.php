<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class WebAuthTest extends TestCase
{
   use RefreshDatabase;

   public function test_user_can_register_via_web(): void{
       $response = $this->post('/register', [
           'name' => 'Test Unit',
           'email' => 'testunit@mail.com',
           'password' => 'testpass',
           'password_confirmation' => 'testpass'
       ]);

       $response->assertRedirect('/home');
       $this->assertDatabaseHas('users', ['email' => 'testunit@mail.com']);
   }

   public function test_user_can_login_via_web(): void{
       $user = User::factory()->create([
           'email' => 'testunit@mail.com',
           'password' => 'testpass',
       ]);
       $response=$this->post('/login',[
           'email' => 'testunit@mail.com',
           'password' => 'testpass',
       ]);

       $response->assertRedirect('/home');
       $this->assertAuthenticated();
   }

   public function test_authenticated_user_can_access_home_page(): void{
       $user = User::factory()->create();
       $response=$this->actingAs($user)->get('/home');
       $response->assertStatus(200);
   }

   public function test_unauthenticated_user_cannot_access_home_page(): void{
       $response = $this->get('/home');
       $response->assertRedirect('/login');
   }

   public function test_user_can_logout_via_web(): void{
       $user = User::factory()->create();
       $response = $this->actingAs($user)->post('/logout');

       $response->assertRedirect('/');
       $this->assertGuest();
   }

   public function test_non_admin_cannot_access_admin_dashboard(): void{
       $user = User::factory()->create(['role' => 'client']);
       Sanctum::actingAs($user, ['*']);

       $response = $this->getJson('/api/admin/dashboard');

       $response->assertStatus(403);
   }


    public function test_admin_can_access_admin_dashboard(): void{
        $admin = User::factory()->create(['role' => 'admin']);
        Sanctum::actingAs($admin, ['*']);

        $response = $this->getJson('/api/admin/dashboard');

        $response->assertStatus(200);
    }

    public function test_user_can_reset_password(): void{

        \Illuminate\Support\Facades\Notification::fake();

       $user = User::factory()->create();

       $this->post('/forgot-password', ['email' => $user->email]);

        $token = null;
        \Illuminate\Support\Facades\Notification::assertSentTo(
            $user,
            \Illuminate\Auth\Notifications\ResetPassword::class,
            function ($notification) use (&$token) {
                $token = $notification->token;
                return true;
            }
        );

        $response = $this->post('/reset-password', [
            'token' => $token,
            'email' => $user->email,
            'password' => 'newpassword123',
            'password_confirmation' => 'newpassword123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/login');

        // Proveri da li korisnik može da se uloguje sa novom lozinkom
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'newpassword123',
        ]);
        $this->assertAuthenticated();

    }


}
