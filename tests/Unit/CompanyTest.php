<?php

namespace Test\Unit;
use App\Models\Company;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;



class CompanyTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * @test
     * A basic unit test example.
     */
    public function company_data_exist(): void
    {
        $company = Company::factory()->create();

        $this->assertDatabaseHas('companies',[
            'id' => $company -> id,
            'name' => $company -> name,
            'address' => $company -> address,
            'email' => $company -> email,
            'website' => $company -> website
        ]);
    }
}
