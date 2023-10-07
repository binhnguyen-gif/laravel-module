<?php /** @noinspection ALL */

namespace Modules\Core\Entities;

use DateTimeInterface;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Core\Traits\HasPermission;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Admin extends Authenticatable implements HasMedia
{
    use InteractsWithMedia, HasPermission;
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'username',
        'is_admin',
        'is_active',
        'password'
    ];
    protected $casts = [
        'is_admin'  =>  'boolean',
        'is_active' =>  'boolean'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $appends = [
        'role_id'
    ];

    public function getRoleId(){
        if (!empty($this->roles()->role_id)){
            return $this->roles()->role_id;
        }
        return null;
    }

}
