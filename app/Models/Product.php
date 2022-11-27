<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'description', 'firstImage', 'secondImage', 'thirdImage', 'fourthImage', 'fivethImage', 'category_id', 'price', 'hit', 'new', 'salary', 'salaryPrice'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {

        if($this->isSalary()){
            if (!is_null($this->pivot)) {
                return $this->pivot->count * $this->salaryPrice;
            }
        }else{
            if (!is_null($this->pivot)) {
                return $this->pivot->count * $this->price;
            }
        }


        return $this->price;
    }

    public function setNewAttribute($value){
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setHitAttribute($value){
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }


    public function setSalaryAttribute($value){
        $this->attributes['salary'] = $value === 'on' ? 1 : 0;
    }


    public function getSalaryPrice(){

        if (!is_null($this->salaryPrice)) {

            $salaryResult =  $this->salaryPrice / ($this->price / 100);
            $salaryResult = 100 - $salaryResult;

            return floor($salaryResult);
        }
        return $this->price;
    }

    public function isHit()
    {
        return $this->hit === 1;
    }

    public function isNew()
    {
        return $this->new === 1;
    }

    public function isSalary()
    {
        return $this->salary === 1;
    }
}
