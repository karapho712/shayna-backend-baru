<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;

class Transactions extends Model
{
    use SoftDeletes;
    use RoutesWithFakeIds;

    protected $fillable = [
        'uuid', 'name', 'email', 'number_hp', 'address', 'transaction_total', 'transaction_status'
    ];

    protected $hidden =[

    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
