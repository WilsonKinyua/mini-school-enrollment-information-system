<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AllStudent extends Model implements HasMedia
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use InteractsWithMedia;
    use Auditable;
    use HasFactory;

    public const COUNTRY_SELECT = [
        'KE' => 'Kenya',
    ];

    public const COUNTY_SELECT = [
        'Nyeri' => 'Nyeri',
    ];

    public const DISABLED_SELECT = [
        'Yes' => 'Yes',
        'No'  => 'No',
    ];

    public const GENDER_SELECT = [
        'Male'   => 'Male',
        'Female' => 'Female',
        'Others' => 'Others',
    ];

    public const RELIGION_SELECT = [
        'Christian'  => 'Christian',
        'Buthist'    => 'Buthist',
        'Muslim'     => 'Muslim',
        'Protestant' => 'Protestant',
        'Others'     => 'Others',
    ];

    public $table = 'all_students';

    protected $dates = [
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'result_slip',
        'birth_certificate',
        'passport_photo',
        'any_other_documents',
    ];

    protected $fillable = [
        'surname',
        'name',
        'p_o_box',
        'town',
        'town_code',
        'phone_no',
        'email',
        'village',
        'county',
        'country',
        'date_of_birth',
        'religion',
        'gender',
        'kcpe_grade',
        'kcpe_total_marks',
        'disabled',
        'description',
        'admission_number',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    public static function boot()
    {
        parent::boot();
        AllStudent::observe(new \App\Observers\AllStudentActionObserver());
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function studentAllParents()
    {
        return $this->hasMany(AllParent::class, 'student_id', 'id');
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getResultSlipAttribute()
    {
        return $this->getMedia('result_slip')->last();
    }

    public function getBirthCertificateAttribute()
    {
        return $this->getMedia('birth_certificate')->last();
    }

    public function getPassportPhotoAttribute()
    {
        $file = $this->getMedia('passport_photo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getAnyOtherDocumentsAttribute()
    {
        return $this->getMedia('any_other_documents');
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
