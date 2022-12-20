<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    public function homepage()
    {
        #[Route('/')]


        return new Response('this is first page symfony');
    }
}
?>                                                            ?