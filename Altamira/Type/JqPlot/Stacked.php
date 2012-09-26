<?php

namespace Malwarebytes\AltamiraBundle\Altamira\Type\JqPlot;

class Stacked extends \Malwarebytes\AltamiraBundle\Altamira\Type\TypeAbstract
{
    
    protected $options = array(   'stackSeries'     => true,
                                  'seriesDefaults'  => array( 'fill'       => true, 
                                                              'showMarker' => false, 
                                                              'shadow'     => false
                                                             )
                                       );

}

?>