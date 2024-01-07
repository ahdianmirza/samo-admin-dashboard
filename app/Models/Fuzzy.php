<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuzzy extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('created_at', 'like', '%'.$search.'%');
        });

        if ($filters['prediksi'] ?? false) {
            $query->when($filters['prediksi'] === 'buruk', function ($query) {
                return $query->where('nilaiPrediksi', '<', 0.5);
            })
            ->when($filters['prediksi'] === 'sedang', function ($query) {
                return $query->where('nilaiPrediksi', '=', 0.5);
            })
            ->when($filters['prediksi'] === 'baik', function ($query) {
                return $query->where('nilaiPrediksi', '>', 0.5);
            });
        }
    }
}