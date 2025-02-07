<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $table = "orderlines";
    protected $fillable = ["linea", "cantidad", "nombre", "precio", "order_id"];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    use HasFactory;
    /**
     * Get the order that owns the OrderLine
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
