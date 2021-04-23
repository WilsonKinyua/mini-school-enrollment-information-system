<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllParent extends Model
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use Auditable;
    use HasFactory;

    public const GUARDIAN_SELECT = [
        'Mother'            => 'Mother',
        'Father'            => 'Father',
        'Sponsor'           => 'Sponsor',
        'Relative'          => 'Relative',
        'None of the above' => 'None of the above',
    ];

    public $table = 'all_parents';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'guardian',
        'first_name',
        'surname',
        'occupation',
        'id_number',
        'p_o_box',
        'town',
        'town_code',
        'phone_no',
        'landline',
        'guardian_email',
        'description',
        'student_id',
        'created_by_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function boot()
    {
        parent::boot();
        AllParent::observe(new \App\Observers\AllParentActionObserver());
    }

    public function student()
    {
        return $this->belongsTo(AllStudent::class, 'student_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
