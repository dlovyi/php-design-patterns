<?php
namespace Interpreter;

use Interpreter\Expression\TerminalExpression;
use Interpreter\Expression\OrExpression;
use Interpreter\Expression\AndExpression;

class InterpretRule
{

    // 规则：Robert 和 John 是男性
    public static function getMaleExpression()
    {
        $robert = new TerminalExpression("Robert");
        $john = new TerminalExpression("John");
        return new OrExpression($robert, $john);
    }

    // 规则：Julie 是一个已婚的女性
    public static function getMarriedWomanExpression()
    {
        $julie = new TerminalExpression("Julie");
        $married = new TerminalExpression("Married");
        return new AndExpression($julie, $married);
    }

    public static function getWords()
    {
        $country = new TerminalExpression('Country');
        $great = new TerminalExpression('Great', $country);
        $china = new TerminalExpression('China',$great);
        
        return $china;
    }
}