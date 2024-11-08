<?php

namespace App;

enum StockEnum : string
{
    case INSTOCK = 'In stock';
    case OUTOFSTOCK = 'Out of stock';
}
