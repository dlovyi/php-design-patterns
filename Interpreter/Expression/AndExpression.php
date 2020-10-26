<?php
namespace Interpreter\Expression;

use Interpreter\Interfaces\Expression;

class AndExpression implements Expression
{

    public $exp1;

    public $exp2;

    public function __construct(Expression $exp1, Expression $exp2)
    {
        $this->exp1 = $exp1;
        $this->exp2 = $exp2;
    }

    public function interpret($express = '')
    {
        $exp1 = $this->exp1->express;
        $exp2 = $this->exp2->express;
        if (preg_match('/' . $exp1 . '/i', $express) && preg_match('/' . $exp2 . '/i', $express)) {
            return true;
        }
        return false;
    }
}