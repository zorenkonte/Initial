<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $primaryKey = 'supplierID';

    protected $guarded = [];

    public $timestamps = false;

    public function suppliers(){
        return $this->belongsToMany(Supplier::class);
    }
}
