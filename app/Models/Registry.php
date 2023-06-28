<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'detail',
        'amount',
        'registry_date',
        'user_loader',
        'type_id',
        'user_id'
    ];
    public function types(){
        return $this->belongsTo(Type::class, 'type_id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeByBetweenDate($query, $dateFrom, $dateTo)
    {
        if (!empty($dateFrom) && !empty($dateTo)) {
            $query->whereBetween('registry_date', [$dateFrom, $dateTo]);
        }
    }

    public static function getMostRepeatedUser($date_now){
        $mostRepeatedUser = self::select('user_id')
        ->with('users')
        ->whereDate('registry_date', $date_now)
        ->groupBy('user_id')
        ->orderByRaw('COUNT(*) DESC')
        ->first();

        return $mostRepeatedUser->users->first_name. ' ' . $mostRepeatedUser->users->last_name;
    }

}
