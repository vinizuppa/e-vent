<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{

    const STATUS_PAGO = 'Pago';
    const STATUS_AGUARDANDO = 'Aguardando pagamento';
    const PAYMENT_PIX = 'Pix';
    const PAYMENT_MANUAL = 'Manual';
    const PAYMENT_NENHUM = 'Sem pagamento';

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'payment_type',
        'image_path',
        'image_name',
        'user_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
