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
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('for use symfony we must undrestand this cours this is 
        the best ansewr for question "%s"',$slug));
        
    }

}
?>                                                            