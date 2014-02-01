<?php

namespace agallou\Departements\Tests\Units;

use atoum;
use agallou\Departements\Collection as TestedClass;

class Collection extends atoum
{
    public function testGetLabel()
    {
        $collection = new TestedClass();
        $this
          ->string($collection->getLabel(29))
            ->isEqualTo('Finistère')
          ->string($collection['29'])
            ->isEqualTo('Finistère')
          ->exception(function () use ($collection) {
              $collection->getLabel(1);
          })
            ->isInstanceOf('\InvalidArgumentException')
            ->hasMessage('Code "1" invalid')
        ;


    }

    public function testGetAll()
    {
        $collection = new TestedClass();
        $this
          ->array($all = $collection->getAll())
            ->string($all['29'])
              ->isEqualTo('Finistère')
        ;

    }
}
