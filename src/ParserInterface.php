<?php

namespace degit023\parser;

interface ParserInterface
{


    public function process(string $url, string $tag) : array;
}