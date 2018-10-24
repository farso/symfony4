<?php
    
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lucky/")
 */
class LuckyController
{
    /**
     * @Route("number/{max}")
     */
    public function number($max)
    {
        $number = random_int(0, $max);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("word/{len}")
     */
    public function word($len = 1)
    {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        
        $word = substr(implode($word), 0, $len);
        
        return new Response(
            '<html><body>Lucky word: '.$word.'</body></html>'
        );
    }
}
