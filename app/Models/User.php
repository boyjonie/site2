<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{ 
    public $timestamps = false;
protected $table = 'student';
protected $primaryKey = 'id';
// column sa table
protected $fillable = [
'firstname', 'middlename', 'lastname'
];
}
