<?php
namespace Filter\Criteria;

use Filter\interfaces\Criteria;

class OrCriteria implements Criteria
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
        $list1 = $this->criteria->filterCriteria($params);
        
        $list2 = $this->otherCriteria->filterCriteria($params);
        
        $this->list = array_merge($list1, $list2);
        
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