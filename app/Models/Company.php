<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company'; // Explicitly set the correct table name
    protected $fillable = ['name', 'address', 'email', 'website'];
}
