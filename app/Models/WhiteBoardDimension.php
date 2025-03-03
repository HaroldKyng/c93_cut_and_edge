<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhiteBoardDimension extends Model
{


    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'white_board_id',
        'name',
        'price',
        'image',
        'description',
    ];

    protected $table = 'white_board_dimensions';
}
