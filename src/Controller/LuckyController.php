<?php
    
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/lucky/")
 */
class LuckyController extends AbstractController
{
    /**
     * @Route("number/{max}")
     */
    public function number($max)
    {
        $number = random_int(0, $max);
        
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("word/{len}")
     */
    public function word($len = 1)
    {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        
        $word = substr(implode($word), 0, $len);
        
        return $this->render('lucky/word.html.twig', [
                    'word' => $word,
        ]);
    }
}
