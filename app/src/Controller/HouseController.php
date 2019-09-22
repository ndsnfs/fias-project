<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HouseController extends AbstractController
{
    public function list()
    {
        return ['this is a house list'];
    }
}
