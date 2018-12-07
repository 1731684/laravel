<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'proj';
    /**
     * The primary key
     *
     * @var string
     */
    protected $primaryKey = 'projno';

   /* public function employees()
    {
        return $this->hasMany('App\Models\Employee\Employee','deptno');
    }
*/
}
