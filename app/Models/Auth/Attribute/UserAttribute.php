<?php

namespace App\Models\Auth\Attribute;

use App\Models\Hr\Employee\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

trait UserAttribute
{

    /*Get full name attribute*/
    public function getFullnameAttribute()
    {
        $return = $this->username;
        if(isset($this->employee_id))
        {
            $return = $this->employee->fullname;
        }
        return $return;
    }


    public function getCreatedAtFormattedAttribute()
    {
        return  Carbon::parse($this->created_at)->format('d-M-Y');
    }

    public function getLastLoginFormattedAttribute()
    {
        return  Carbon::parse($this->last_login)->format('d-M-Y');
    }



    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isactive == true;
    }

    /**
     * @return bool
     */
    public function isConfirmed()
    {
        return $this->confirmed == 1;
    }

    /*Check if can manage project*/
    public function checkIspm($project)
    {
        $team = $project->teams()->where('user_id', $this->id)->first();
        if($team){
            if ($team->pivot->ispm == 1 || $team->pivot->can_manage_project == 1) {
                return true;
            }
        }

        return false;
    }

    /* Active status label*/
    public function getActiveStatusLabelAttribute()
    {
        if ($this->isactive == 1) {
            return "<span class='badge badge-pill badge-success' data-toggle='tooltip' data-html='true' title='" . trans('label.active') . "'>" . trans('label.active') . "</span>";
        } else {
            return "<span class='badge badge-pill badge-warning' data-toggle='tooltip' data-html='true' title='" . trans('label.inactive') . "'>" . trans('label.inactive') . "</span>";
        }
    }

    /*Get Roles of the users*/

    public function getRoleLabelAttribute() {
        $roles = [];
        if ($this->roles()->count() > 0) {
            foreach ($this->roles as $role) {
                array_push($roles, $role->name);
            }
            return implode(", ", $roles);
        } else {
            return '<span class="tag tag-danger">'. trans('label.none') . '</span>';
        }
    }

    /*Workflow resource name*/
    public function getResourceNameAttribute()
    {
        return $this->username;
    }

    /*Auditable name for audit*/
    public function getAuditableNameAttribute()
    {
        return  $this->username;
    }

    /*employee name*/
    public function getEmployeeNameAttribute()
    {
        if ($this->employee_id)
        {
            return  $this->employee->fullname;

        }else
        {
            return '' ;
        }
    }


    /*Get station*/
    public function getStationAttribute()
    {
        $station = null;

        if($this->employee_id){

            $check = $this->employee->stations()->count();

            if($check > 0){
                $station = $this->employee->stations()->first();
            }
        }

        return $station;
    }



    public function getStationIdAttribute()
    {
        $station = $this->getStationAttribute();
        $station_id = null;
        if($station)
        {
            $station_id = $station->id;
        }

        return $station_id;
    }


    public function allStations()
    {
        return $this->employee->allStations();
    }

    /*Station in use*/
    public function getStationInUseAttribute()
    {
        return isset($this->employee->stations) ? $this->employee->stations()->first() : null;
    }

    /*station in use id*/
    public function getStationInUseIdAttribute()
    {
        return ($this->getStationInUseAttribute()) ? $this->getStationInUseAttribute()->id : null;
    }
}
