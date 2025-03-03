<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhiteBoard extends Model
{


    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];

    protected $table = 'white_boards';
}
