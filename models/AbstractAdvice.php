<?php
/**
 * класс AbstractAdvice
 **/
class AbstractAdvice
{
    static final $DAY = 0;
    static final $NIGHT = 1;
    
    /**
     * ссылка на AbstactParser
     * @var parser
     */
    protected $parser = null;
    
    
    /**
     * фабричный метод, созданим экземпляр нужного класса, в зависимости от типа
     * @param integer $type
     * @return AdviceDay|AdviceNight
     */
    public static function create($type)
    {
        switch ($type) {
            case self::$DAY:
                return new AdviceDay();
            case self::$NIGHT:
                return new AdviceNight();
        }
        
    }
    
    /**
     * получить тип совета, который нужен.
     * до 19 - дневной
     * после 19 - ночной
     */
    public static function getType()
    {
        /** TODO реализовать получение типа
        $result = $condition == 'day' ? self::$DAY : self::$NIGHT;
        return $result;
        **/
    }

    
    /**
     * получить совет
     */
    public function getAdvice() 
    {
        return new AdviceStructure();
    }
}