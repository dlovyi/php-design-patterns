<?php
namespace run;

class DoubleLink
{

    public function list()
    {
        $list = new \SplDoublyLinkedList();
        $list->push('a');
        $list->push('b');
        $list->push('c');
        $list->push('d');
        // 链表头部增加元素
        $list->unshift('top');
        // 删除链表头部元素
        $list->shift();
        $list->rewind(); // rewind操作用于把节点指针指向根节点
        echo 'curren node:' . $list->current() . "<br />"; // 获取当前节点
        $list->next(); // 指针指向下一个节点
        echo 'next node:' . $list->current() . "<br />";
        $list->next();
        $list->next();
        $list->prev(); // 指针指向上一个节点
        echo 'next node:' . $list->current() . "<br />";
        
        if ($list->current()) {
            echo 'current node is valid<br />';
        } else {
            echo 'current node is invalid<br />';
        }
        // 如果当前节点是有效节点，valid返回true
        if ($list->valid()) {
            echo "valid list<br />";
        } else {
            echo "invalid list <br />";
        }
        var_dump(array(
            'pop' => $list->pop(),
            'count' => $list->count(),
            'isEmpty' => $list->isEmpty(),
            'bottom' => $list->bottom(),
            'top' => $list->top()
        ));
        
        $list->setIteratorMode(\SplDoublyLinkedList::IT_MODE_FIFO);
        var_dump($list->getIteratorMode());
        for ($list->rewind(); $list->valid(); $list->next()) {
            echo $list->current() . PHP_EOL;
        }
        var_dump($a = $list->serialize());
        // print_r($list->unserialize($a));
        $list->offsetSet(0, 'new one');
        $list->offsetUnset(0);
        var_dump(array(
            'offsetExists' => $list->offsetExists(4),
            'offsetGet' => $list->offsetGet(0)
        ));
        var_dump($list);
    }

    public function stack()
    {
        // 堆栈，先进后出
        $stack = new \SplStack(); // 继承自SplDoublyLinkedList类
        $stack->push("a<br />");
        $stack->push("b<br />");
        $stack->push("c<br />");
        echo $stack->pop();
        echo $stack->pop();
        $stack->offsetSet(0, 'B'); // 堆栈的offset=0是Top所在的位置，offset=1是Top位置节点靠近bottom位置的相邻节点，以此类推
        $stack->rewind(); // 双向链表的rewind和堆栈的rewind相反，堆栈的rewind使得当前指针指向Top所在的位置，而双向链表调用之后指向bottom所在位置
        echo 'current:' . $stack->current() . '<br />';
        $stack->next(); // 堆栈的next操作使指针指向靠近bottom位置的下一个节点，而双向链表是靠近top的下一个节点
        echo 'current:' . $stack->current() . '<br />';
    }

    public function queue()
    {
        // 队列，先进先出
        $queue = new \SplQueue(); // 继承自SplDoublyLinkedList类
        $queue->enqueue("a<br />"); // 插入一个节点到队列里面的Top位置
        $queue->enqueue("b<br />");
        $queue->offsetSet(0, 'A'); // 堆栈的offset=0是Top所在的位置，offset=1是Top位置节点靠近bottom位置的相邻节点，以此类推
        echo $queue->dequeue();
        echo $queue->dequeue();
    }

    /**
     * 使用内置迭代器实现目录遍历
     */
    public function fileDirIterator()
    {
        // 实例化
        foreach (new RecursiveFileFilterIterator(ROOT_PATH) as $item) {
            echo $item . '<br/>';
        }
    }

    /**
     * SplFixedArray 实例化一个固定长度的数组
     */
    public function splFixedArray()
    {
        // Initialize the array with a fixed length
        $array = new \SplFixedArray(5);
        
        $array[1] = 2;
        $array[4] = "foo";
        
        var_dump($array[0]); // NULL
        var_dump($array[1]); // int(2)
        
        var_dump($array["4"]); // string(3) "foo"
                               
        // Increase the size of the array to 10
        $array->setSize(10);
        
        $array[9] = "asdf";
        
        // Shrink the array to a size of 2
        $array->setSize(2);
        
        // The following lines throw a RuntimeException: Index invalid or out of range
        try {
            var_dump($array["non-numeric"]);
        } catch (\RuntimeException $re) {
            echo "RuntimeException: " . $re->getMessage() . "<br/>";
        }
        
        try {
            var_dump($array[- 1]);
        } catch (\RuntimeException $re) {
            echo "RuntimeException: " . $re->getMessage() . "<br/>";
        }
        
        try {
            var_dump($array[5]);
        } catch (\RuntimeException $re) {
            echo "RuntimeException: " . $re->getMessage() . "<br/>";
        }
    }

    /**
     * 普通数组转化为splfixarray
     */
    public function splFixArray1()
    {
        $fa = \SplFixedArray::fromArray(array(
            1 => 1,
            0 => 2,
            3 => 3
        ));
        
        var_dump($fa);
        
        $fa = \SplFixedArray::fromArray(array(
            'a' => 1,
            'b' => 2,
            'c' => 3
        ), false);
        
        var_dump($fa);
        
        var_dump($_SERVER);
    }

    /**
     * 内存使用测试
     */
    public function splFixArray2()
    {
        echo "普通数组:<br/>";
        echo memory_get_usage() . "<br/>"; // display 627760
        $array = array_fill(0, 2048*25, 'a');
        echo memory_get_usage() . "<br/>"; // 824744, so 196984 for $array
        
        unset($array);
        echo "splfixArray数组:<br/>";
        echo memory_get_usage() . "<br/>"; // 627792
        $spl = \SplFixedArray::fromArray(array_fill(0, 2048*25, 'a'));
        echo memory_get_usage() . "<br/>"; // 644944, so just 17151 for $spl !!!
    }
    
}