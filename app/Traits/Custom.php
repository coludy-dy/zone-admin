<?php

namespace App\Traits;

trait Custom
{
    private function productStatus()
    {
        return [
            'available' => 'Available',
            'out_of_stock' => 'Out of Stock'
        ];
    }

    private function orderStatus()
    {
        return [
            'pending' => 'Pending',
            'complete' => 'Complete'
        ];
    }
     private function color()
    {
        return [
            'White' => 'White',
            'Black' => 'Black',
            'Blue' => 'Blue',
            'Blue' => 'Blue',
            'Blue' => 'Blue',
        ];
    }

    private function ram()
    {
        return [
            '4GB' => '4GB',
            '6GB' => '6GB',
            '8GB' => '8GB',
            '12GB' => '12GB'

        ];
    }
    
    private function storage()
    {
        return [
            '128GB' => '128GB',
            '256GB' => '256GB',
            '512GB' => '512GB'

        ];
    }
}
