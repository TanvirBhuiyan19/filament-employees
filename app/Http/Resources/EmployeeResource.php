<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'address' => $this->address,
            'countryId' => $this->country_id,
            'countryName' => $this->country->name,
            'stateId' => $this->state_id,
            'stateName' => $this->state->name,
            'cityId' => $this->city_id,
            'cityName' => $this->city->name,
            'departmentId' => $this->department_id,
            'departmentName' => $this->department->name,
            'zip_code' => $this->zip_code,
            'birthDate' => $this->birth_date,
            'dateHired' => $this->date_hired,
        ];
    }
}
