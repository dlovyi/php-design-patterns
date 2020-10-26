<?php
namespace AbstractFactory\Factory;

abstract class AbstractFactory
{
	abstract public function getShape($shape='');

	abstract public function getColor($color='');
}
