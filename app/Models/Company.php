<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies'; // Explicitly set the correct table name
    protected $fillable = ['name', 'address', 'email', 'website','user_id'];

    public function user(){
        $this-> belongsTo(User::class);
    }
}
