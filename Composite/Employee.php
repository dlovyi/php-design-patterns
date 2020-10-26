<?php
namespace Composite;

class Employee
{

    private $name;

    private $depart;

    private $salary;

    /**
     * �����Ĳ㼶
     *
     * @var integer
     */
    private $level = 0;

    private $subordinates = [];

    public function __construct($name, $depart, $salary)
    {
        $this->name = $name;
        $this->depart = $depart;
        $this->salary = $salary;
    }

    public function add(Employee $emp)
    {
        $key = $emp->getName();
        $emp->addLevel($this->level);
        $this->subordinates[$key] = $emp;
    }

    public function remove(Employee $emp)
    {
        $key = $emp->getName();
        unset($this->subordinates[$key]);
    }

    public function addLevel($num)
    {
        $this->level = $num + 1;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSub()
    {
        return $this->subordinates;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * ��ӡ���г�Ա��Ϣ
     */
    public function show()
    {
        echo $this . "<br/>";
        
        if (! empty($this->subordinates)) {
            foreach ($this->subordinates as $k => $v) {
                $v->show();
            }
        }
    }

    /**
     * ��ȡ������Ա�����νṹ��Ϣ
     * 
     * @return number
     */
    public function treeStruct()
    {
        $data['level'] = $this->level;
        $data['name'] = $this->name;
        $data['depart'] = $this->depart;
        $data['salary'] = $this->salary;
        
        if (! empty($this->subordinates)) {
            foreach ($this->subordinates as $k => $v) {
                $data['child'][] = $v->treeStruct();
            }
        }
        return $data;
    }

    public function __toString()
    {
        return "Level:" . $this->level . ",Name:" . $this->name . ",Depart:" . $this->depart . ",Salary:" . $this->salary;
    }
}