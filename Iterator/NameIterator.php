<?php
namespace Iterator;

use Iterator\Interfaces\Iterator;

class NameIterator implements Iterator
{

    protected $index = 0;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * 判断是否还有下一个元素
     *
     * {@inheritdoc}
     *
     * @see \Iterator\Interfaces\Iterator::hasNext()
     */
    public function hasNext()
    {
        $length = 1;
        if (is_array($this->data)) {
            $length = count($this->data);
        }
        
        if (is_string($this->data)) {
            $length = strlen($this->data);
        }
        if ($length > $this->index) {
            return true;
        }
        return false;
    }

    /**
     * 获取下一个元素
     * 
     * {@inheritdoc}
     *
     * @see \Iterator\Interfaces\Iterator::next()
     */
    public function next()
    {
        if ($this->hasNext() && isset($this->data[$this->index])) {
            $data = $this->data[$this->index];
            $this->index ++;
            return $data;
        }
        return null;
    }

    public function scan()
    {
        while (! empty($this->hasNext())) {
            var_dump($this->next());
        }
    }
}