<?php
/**
 * class AdviceDay
 * отвечает за дневной совет
 **/
class AdviceDay extends Advice
{
    protected $parser;
    
    public function __construct()
    {
        $this->parser = new ParserJson();
    }
    
    public function getAdvice()
    {
        $structure = new AdviceStructure();
        if ($item = $this->parser->getResult()) {
            $structure->setTime($item['time']);
            $structure->setAction($item['action']);
            $structure->setPicture($item['picture']);
            $structure->setDuraction($item['duration']);
        }
        return $structure;
    }
}