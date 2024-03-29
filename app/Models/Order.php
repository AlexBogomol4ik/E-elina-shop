<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['status'];

    public function productPivot(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice(){
        $sum = 0;
            foreach ($this->productPivot as $product){
                $sum += $product->getPriceForCount();
            }
        return $sum;
    }

    public function saveOrder($name, $firsName, $secondName, $phone, $email)
    {
        if($this->status == 0){
            $this->name = $name;
            $this->firstName = $firsName;
            $this->secondName = $secondName;
            $this->phone =  $phone;
            $this->email = $email;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        }else{
            return false;
        }

    }
}
