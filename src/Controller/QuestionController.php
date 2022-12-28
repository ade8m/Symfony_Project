<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class QuestionController
{
        /**
        * @Route("/" )
        */
    
    
    public function homepage()
    {
        
        return new Response('this is first page symfony');
    }

     /**
     * @Route("/questions/How to use symfony")
     */
    public function show()
    {
        return new Response('for use symfony we must undrestand this cours');
        
    }

}
?>                                                            ?