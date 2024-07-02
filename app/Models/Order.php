<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'tracking_number',
        'user_id',
        'name',
        'email',
        'no_hp',
        'address1',
        'city',
        'province',
        'subtotal',
        'status',
        'payment_status',
        'snap_token',
        'courier',
        'cost_delivery'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->tracking_number = self::generateUniqueTrackingNumber();
        });
    }

    public static function generateUniqueTrackingNumber()
    {
        do {
            $tracking_number = 'TRX-' . strtoupper(Str::random(8));
        } while (self::where('tracking_number', $tracking_number)->exists());

        return $tracking_number;
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
