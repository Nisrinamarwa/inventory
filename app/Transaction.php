<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Alfa6661\AutoNumber\AutoNumberTrait;
class Transaction extends Model
{
    use AutoNumberTrait;

        protected $table = 'transactions';
        protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_transaksi' => [
                'format' => function() {
                    return 'TRANS/'.date('Ymd').'/?';
                }, 'length' => 5]
            ];
    }

    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    } 
}
