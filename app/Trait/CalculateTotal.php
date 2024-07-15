<?php

namespace App\Trait;

trait CalculateTotal
{
    public function calculateTotalFromProductArray($productArray)
    {
        $totalPriceAfterDiscount=0;

        foreach($productArray as $product){
$totalPriceAfterDiscount+=(((1- ($product->discount/100))*$product->price) * $product->pivot->quantity);
        }
return $totalPriceAfterDiscount;
    }
}
