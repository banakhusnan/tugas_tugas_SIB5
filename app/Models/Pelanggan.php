<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'kartu';
    protected $fillable = ['kode', 'nama', 'jk', 'tmp_lahir', 'email', 'kartu_id'];

    /**
     * Get the kartu that owns the Pelanggan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function kartu()
    {
        return $this->hasOne(Kartu::class);
    }
}
