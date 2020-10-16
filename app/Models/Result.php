<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Result extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'results';
    use Sortable;

    protected $fillable = [ 'no_of_question', 'user_id'];

    public $sortable = ['no_of_question', 'user_id','name','detail'];
    public function name()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function detail() {
        return $this->hasOne(App\Models\User::class);
    }
}
