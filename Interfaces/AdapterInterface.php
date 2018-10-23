<?php
namespace payment\Interfaces;

interface AdapterInterface
{
    public function pay($total);
}