<?php
/**
 * класс-контроллер CAdviceController
 * отвечает за вывод совета
 **/
class CAdviceController 
{
    /**
     * ���������� �������� � �������
     **/
    public function indexAction()
    {
        //определим тип совета
        $type = AbstractAdvice::getType();
        //созданим объет класс нужного совета
        $adviceModel = AbstractAdvice::create($type);
        //получим конкретный совет
        $adviceStructure = $adviceModel->getAdvice();
        //отобразим совет
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