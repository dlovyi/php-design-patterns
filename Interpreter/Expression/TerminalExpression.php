<?php
namespace Interpreter\Expression;

use Interpreter\Interfaces\Expression;

class TerminalExpression implements Expression
{

    public $express;

    public $next;

    public $ret;

    public function __construct($keyword = '', Expression $next = null)
    {
        $this->express = $keyword;
        $this->next = $next;
    }

    public function interpret($express = '')
    {
        $exp = $this->express;
        if (preg_match('/' . $exp . '/i', $express)) {
            $this->ret .= $this->express.' ';
        }
        
        if (! empty($this->next)) {
            $this->ret .= $this->next->interpret($express).' ';
        }
        return $this->ret;
    }
}