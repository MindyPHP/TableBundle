<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 22/06/16
 * Time: 10:12
 */

namespace Mindy\QueryBuilder\Tests;

use Mindy\QueryBuilder\Mysql\Adapter;

class MysqlQueryBuilderTest extends DummyQueryBuilderTest
{
    public function getAdapter()
    {
        return new Adapter;
    }
}