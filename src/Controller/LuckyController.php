<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(EntityManagerInterface $entityManager)
    {
        dump('number action invoke');
        dump($entityManager);

        return new Response(
            '<html><body>hello</body></html>'
        );
    }
}