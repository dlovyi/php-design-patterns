<?php
namespace Psr\Container;

/**
 * 容器的接口类，提供了获取容器中对象的方法。
 */
interface ContainerInterface
{

    /**
     * 在容器中查找并返回实体标识符对应的对象。
     *
     * @param string $id
     *            查找的实体标识符字符串。
     *            
     * @throws NotFoundExceptionInterface 容器中没有实体标识符对应对象时抛出的异常。
     * @throws ContainerExceptionInterface 查找对象过程中发生了其他错误时抛出的异常。
     *        
     * @return mixed 查找到的对象。
     */
    public function get($id);

    /**
     * 如果容器内有标识符对应的内容时，返回 true 。
     * 否则，返回 false。
     *
     * 调用 `has($id)` 方法返回 true，并不意味调用 `get($id)` 不会抛出异常。
     * 而只意味着 `get($id)` 方法不会抛出 `NotFoundExceptionInterface` 实现类的异常。
     *
     * @param string $id
     *            查找的实体标识符字符串。
     *            
     * @return bool
     */
    public function has($id);
}