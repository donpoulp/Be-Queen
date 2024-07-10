<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function displaySingleOrder(string $id): string
    {
        return 'commande numéro ' . $id;
    }

    public function displayOrderList()
    {
        return 'Liste de commandes';
    }
}
