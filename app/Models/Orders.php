<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $primaryKey = 'OrderID';

    protected $fillable = [
        'VendorName',
        'PQNo',
        'PQDate',
        'PINo',
        'PIDate',
        'APValue',
        'APDate',
        'CINo',
        'CIValue',
        'CIDate',
        'BLNo',
        'BLDate',
        'ETA',
        'BPValue',
        'BPDate'
    ];

    protected $casts = [
        'PQDate' => 'date',
        'PIDate' => 'date',
        'APDate' => 'date',
        'CIDate' => 'date',
        'BLDate' => 'date',
        'ETA' => 'date',
        'BPDate' => 'date',
        'APValue' => 'decimal:2',
        'CIValue' => 'decimal:2',
        'BPValue' => 'decimal:2',
    ];
}
