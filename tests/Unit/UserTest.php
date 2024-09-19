<?php

namespace Test\Unit;

use App\Models\User;
use App\Models\Company;
use Tests\TestCase; 
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_user_has_many_companies()
    {
        $user = User::factory()->create();
        $company = Company::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->companies);
        $this->assertTrue($user->companies->contains($company));
    }
}
