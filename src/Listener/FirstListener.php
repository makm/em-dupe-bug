<?php

namespace App\Listener;


use Doctrine\ORM\EntityManagerInterface;

class FirstListener
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        dump('create FirstListener');
        dump($entityManager);
    }
}