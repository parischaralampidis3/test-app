<?php

namespace App\Repositories;

interface CompanyRepositoryInterface
{
    public function index();
    
    public function show();

    public function create();

    public function update();

    public function delete();
}
