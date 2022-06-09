<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationType extends Model
{
    use Uuids;
    use HasFactory;

    public function application_types()
    {
        return $this->hasMany(Application::class, 'type_id');
    }
}
