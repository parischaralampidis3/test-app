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

        $this->assertDatabaseHas('company', [
            'id' => $company->id,
            'name' => $company->name,
            'address' => $company->address,
            'email' => $company->email,
            'website' => $company->website
        ]);
    }
    /**
     * @test
     * A basic unit test example.
     */

    public function company_can_be_created()
    {

        $company = [
            'name' => 'Test Company Name',
            'email' => 'test@example.com',
            'address' => '123 test  street',
            'website' => 'http://example.com',
            'id' => 1
        ];

        $company = Company::factory()->create();

        $this->assertDatabaseHas('company', [
            'id' => $company->id,
            'name' => $company->name,
            'address' => $company->address,
            'email' => $company->email,
            'website' => $company->website
        ]);


        $this->assertNotNull($company->id);
    }
    /**
     * @test
     * A basic unit test example.
     */
    public function company_can_be_updated()
    {
        $companyData = Company::factory()->create([
            'name' => 'Test Company Name',
            'email' => 'test@example.com',
            'address' => '123 test  street',
            'website' => 'http://example.com',
        ]);

        $updatedCompanyData = [
            'name' => 'Test Company Name 1',
            'email' => 'test2@example.com',
            'address' => '124 address street',
            'website' => 'http://www.example1.com',
            'id' => 1
        ];

        $companyData->update($updatedCompanyData);

        $this->assertDatabaseHas('company', [
            'name' => 'Test Company Name 1',
            'email' => 'test2@example.com',
            'address' => '124 address street',
            'website' => 'http://www.example1.com',
            'id' => $companyData->id
        ]);
    }
}
