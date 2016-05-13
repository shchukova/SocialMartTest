<?php
/**
 * ����� ���������� CAdviceController
 * �������� �� ����� ������
 */
class CAdviceController 
{
    /**
     * ���������� �������� � �������
     **/
    public function indexAction()
    {
        //�������� ��� ������ � ����������� �� ������� �����
        $type = AbstractAdvice::getType();
        //�������� ������ ������ ������� ���� �����
        $adviceModel = AbstractAdvice::create($type);
        //��������� ���������� �����
        $adviceStructure = $adviceModel->getAdvice();
        //���������� �����
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