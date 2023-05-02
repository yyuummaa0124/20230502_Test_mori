<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion'];


    public static function doSearch($searchName, $searchGender, $searchCreated1,  $searchCreated2, $searchEmail)
    {
        $query = self::query();
        if (!empty($searchName)) {
            $query->where('fullname', 'like binary', "%{$searchName}%");
        }
        if (!empty($searchGender)) {
            $query->where('gender','LIKE',"%{$searchGender}%");
        }
        if (!empty($searchCreated1) && !empty($searchCreated2)) {
            $query->whereBetween('created_at',[$searchCreated1,$searchCreated2]);
        }
        if (!empty($searchEmail)) {
            $query->where('email', 'like binary', "%{$searchEmail}%");
        }
        $results = $query->get();
        return $results;
    }
}
