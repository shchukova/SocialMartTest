<?php
/**
 * класс контроллер CAdviceController
 * отвечает за вывод совета
 */
class CAdviceController 
{
    /**
     * Отобразить страницу с советом
     **/
    public function indexAction()
    {
        //получили тип совета в зависимости от времени суток
        $type = AbstractAdvice::getType();
        //получили объект совета который наим нужен
        $adviceModel = AbstractAdvice::create($type);
        //загрузили конкретный совет
        $adviceStructure = $adviceModel->getAdvice();
        //отобразили совет
        $this->showAdvice($adviceStructure);
    }
    
    public function showAdvice(AdviceStructure $adviceStructure)
    {
        echo "time = " . $adviceStructure->getTime();
        echo "duration = " . $adviceStructure->getDuration();
        echo "action = " . $adviceStructure->getAction();
        echo "picture = " . $adviceStructure->getPicture();
    }
}