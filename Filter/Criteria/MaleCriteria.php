<?php
namespace Filter\Criteria;

use Filter\interfaces\Criteria;

class MaleCriteria implements Criteria
{

    private $list = [];

    public function filterCriteria($params)
    {
        $this->list = [];
        if (! empty($params)) {
            foreach ($params as $k => $v) {
                if (strtolower($v->getGender())== "male") {
                    $this->list[] = $v;
                }
            }
        }
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