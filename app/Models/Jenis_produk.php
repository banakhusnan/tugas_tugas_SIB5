<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_produk extends Model
{
    use HasFactory;

    protected $table = 'jenis_produk';
    protected $fillable = ['nama'];

    /**
     * Get all of the produk for the Jenis_produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
