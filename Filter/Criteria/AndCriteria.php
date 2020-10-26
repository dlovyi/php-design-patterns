<?php
namespace Filter\Criteria;

use Filter\interfaces\Criteria;

class AndCriteria implements Criteria
{

    protected $criteria = null;

    protected $otherCriteria = null;

    private $list = [];

    public function __construct(Criteria $criteria, Criteria $other)
    {
        $this->criteria = $criteria;
        $this->otherCriteria = $other;
    }

    public function filterCriteria($params)
    {
        $list = $this->criteria->filterCriteria($params);
        
        $this->list = $this->otherCriteria->filterCriteria($list);
        
        return $this->list;
    }

    public function showResList()
    {
        $res = [];
        if (! empty($this->list)) {
            
            foreach ($this->list as $k => $v) {
                $str = '';
                $str .= "Person->name:" . $v->getName() . ',';
                $str .= "Person->age:" . $v->getAge() . ',';
                $str .= "Person->gender:" . $v->getGender() . ',';
                $str .= "Person->mStatus:" . $v->getMaritalstatus();
                
                $res[] = $str;
            }
        }
        return $res;
    }
}