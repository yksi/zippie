<?php

namespace Yksi\Zippie;

use Yksi\Zippie\Adapter\ZipArchive;

class Zippie
{
    protected static $adapter = ZipArchive::class;

    public function config(string $adapter)
    {

    }
}