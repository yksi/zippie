<?php

namespace Yksi\Zippie\Adapter;

interface AdapterInterface
{
    public function open(): AdapterInterface;
    public function addFolder(): AdapterInterface;
    public function addFile(): AdapterInterface;
    public function addGlob(): AdapterInterface;
    public function setPassword(): AdapterInterface;
}