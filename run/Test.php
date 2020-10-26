<?php
namespace run;

use AbstractFactory\FactoryProducer;
use Singleton\SingletonClass;
use Builder\MealBuilder;
use Prototype\ShapeCache;
use Adapter\Player\AudioPlayer;
use Bridge\Substance\Circle;
use Bridge\Abstracts\RedCircle;
use Bridge\Abstracts\GreenCircle;
use Filter\Person;
use Filter\Criteria\MaleCriteria;
use Filter\Criteria\FemaleCriteria;
use Filter\Criteria\SingleCriteria;
use Filter\Criteria\AndCriteria;
use Filter\Criteria\OrCriteria;
use Composite\Employee;
use Decorator\Decorator\SitDownDecorator;
use Decorator\Decorator\DrinkDecorator;
use Facade\ShapeFacade;
use Flyweight\Factory\ShapFactory;
use Proxy\ProxyImage;
use RespChain\ChainBuilder;
use RespChain\Chain\AbstractChain;
use Command\Invoker\Broker;
use Command\Client\Stock;
use Command\Cmd\BuyStock;
use Command\Cmd\SellStock;
use Interpreter\InterpretRule;
use Iterator\NameRepository;
use Mediator\User;
use Memento\Originator;
use Memento\CareTaker;
use Observe\Subject;
use Observe\BinaryObserver;
use Observe\OctalObserver;
use Observe\HexaObserver;
use State\Content;
use State\State\StartState;
use State\State\StopState;
use Nulls\CustomerFactory;
use Strategy\Context;
use Strategy\Strategy\OperationAdd;
use Strategy\Strategy\OperationSubtract;
use Strategy\Strategy\OperationMultiply;
use Visitor\Computer\Computer;
use Visitor\ComputerPartDisplayVisitor;
use InterceptFilter\FilterManager;
use InterceptFilter\Target;
use InterceptFilter\Filter\AuthenticationFilter;
use InterceptFilter\Filter\DebugFilter;
use InterceptFilter\Client;
use ServiceLocator\ServiceLocator;
use Event\EventDispatcher;
use Event\Event\TestEvent;
use Event\Event\Test1Event;

class Test
{

    /**
     * 抽象工厂
     */
    public function factory()
    {
        $shape = FactoryProducer::getFactory('Shape');
        $obj = $shape->getShape('Rectangle');
        $res = $obj->shape();
        var_dump($res);
        
        $obj = $shape->getShape('Square');
        $res = $obj->shape();
        var_dump($res);
        
        $color = FactoryProducer::getFactory('Color');
        $obj = $color->getColor('Red');
        $cres = $obj->color();
        var_dump($cres);
        $obj = $color->getColor('Bule');
        $cres = $obj->color();
        var_dump($cres);
    }

    /**
     * 单例
     */
    public function singleton()
    {
        $obj = SingletonClass::getInstance();
        
        var_dump($obj->getCount());
        var_dump($obj->getNum());
        $obj->incrNum();
        
        $obj1 = SingletonClass::getInstance();
        
        var_dump($obj1->getCount());
        var_dump($obj1->getNum());
        $obj1->incrNum();
        
        $obj2 = SingletonClass::getInstance();
        
        var_dump($obj2->getCount());
        var_dump($obj2->getNum());
        $obj2->incrNum();
    }

    /**
     * 建造器
     */
    public function builder()
    {
        $obj = new MealBuilder();
        
        $meal1 = $obj->preparVegMeal();
        $meal2 = $obj->preparChkMeal();
        $meal3 = $obj->preparBigMeal();
        
        var_dump('VegMeal');
        $price = $meal1->getPrice();
        $meal1->showItems();
        
        var_dump('ChkMeal');
        $price = $meal2->getPrice();
        $meal2->showItems();
        
        var_dump('BigMeal');
        $price = $meal3->getPrice();
        $meal3->showItems();
    }

    /**
     * 原型
     */
    public function prototype()
    {
        $obj = new ShapeCache();
        $obj->loadCache();
        
        // var_dump($obj->getCahce());
        
        $cricle = $obj->getShape('cricle');
        $cricle->getCloneCount();
        $cricle->draw();
        
        $cricle1 = clone $cricle;
        $cricle1->getCloneCount();
        $cricle->draw();
        
        $rectangle = $obj->getShape('renctangle');
        $rectangle->getCloneCount();
        $rectangle->draw();
        
        $squrae = $obj->getShape('squrae');
        $squrae->draw();
        $squrae->getCloneCount();
    }

    /**
     * 适配器
     */
    public function adapter()
    {
        $obj = new AudioPlayer();
        
        $obj->play('mp3', '1.mp3');
        $obj->play('mp4', '2.mp4');
        $obj->play('vlc', '3.vlc');
        $obj->play('wav', '4.wav');
    }

    /**
     * 桥接
     */
    public function bridge()
    {
        $obj = new Circle(new RedCircle());
        $obj->draw(2, 1, 3);
        
        $obj = new Circle(new GreenCircle());
        $obj->draw(2, 1, 3);
    }

    /**
     * 过滤
     */
    public function filter()
    {
        $person[] = new Person("Robert", 20, "Male", "Single");
        $person[] = new Person("John", 23, "Male", "Married");
        $person[] = new Person("Laura", 28, "Female", "Married");
        $person[] = new Person("Diana", 18, "Female", "Single");
        $person[] = new Person("Mike", 29, "Male", "Single");
        $person[] = new Person("Bobby", 22, "Male", "Single");
        $person[] = new Person("Mikek", 27, "Male", "Single");
        
        $male = new MaleCriteria();
        $female = new FemaleCriteria();
        $single = new SingleCriteria();
        $and = new AndCriteria($male, $single);
        $or = new OrCriteria($female, $single);
        
        var_dump('Male');
        $male->filterCriteria($person);
        $list = $male->showResList();
        var_dump($list);
        
        var_dump('Female');
        $female->filterCriteria($person);
        $list = $female->showResList();
        var_dump($list);
        
        var_dump('Single');
        $single->filterCriteria($person);
        $list = $single->showResList();
        var_dump($list);
        
        var_dump('Male and Single');
        $and->filterCriteria($person);
        $list = $and->showResList();
        var_dump($list);
        
        var_dump('Female Or Single');
        $or->filterCriteria($person);
        $list = $or->showResList();
        var_dump($list);
    }

    /**
     * 组合
     */
    public function composite()
    {
        $ceo = new Employee("John", "CEO", 30000);
        
        $headSales = new Employee("Robert", "Head Sales", 20000);
        $headMarketing = new Employee("Michel", "Head Marketing", 20000);
        
        $clerk1 = new Employee("Laura", "Marketing", 10000);
        $clerk2 = new Employee("Bob", "Marketing", 10000);
        
        $salesExecutive1 = new Employee("Richard", "Sales", 10000);
        $salesExecutive2 = new Employee("Rob", "Sales", 10000);
        
        $saleLast1 = new Employee("Tom", "Sales", 10000);
        $saleLast2 = new Employee("Tonny", "Sales", 10000);
        
        $ceo->add($headSales);
        $ceo->add($headMarketing);
        
        $headMarketing->add($clerk1);
        $headMarketing->add($clerk2);
        
        $headSales->add($salesExecutive1);
        $headSales->add($salesExecutive2);
        
        $salesExecutive1->add($saleLast1);
        $salesExecutive2->add($saleLast2);
        
        // $ceo->show();
        $tree = $ceo->treeStruct();
        die(json_encode($tree));
    }

    /**
     * 装饰模式
     */
    public function decorator()
    {
        $obj = new \Decorator\Component\Person();
        $st = new SitDownDecorator($obj);
        $drk = new DrinkDecorator($st);
        $drk->operation();
        
        var_dump($drk->getTime());
    }

    /**
     * 外观模式
     */
    public function facade()
    {
        $obj = new ShapeFacade();
        $obj->shapeMaker();
        
        $obj->drawCircle();
        $obj->drawRectangle();
        $obj->drawSquare();
    }

    /**
     * 享元模式
     */
    public function flyweight()
    {
        $circle = ShapFactory::getCircle('red');
        $circle->draw();
        $circle = ShapFactory::getCircle('red');
        $circle->draw();
        $circle = ShapFactory::getCircle('red');
        $circle->draw();
        
        $circle = ShapFactory::getCircle('blue');
        $circle->draw();
        
        $circle = ShapFactory::getCircle('blue');
        $circle->draw();
        $circle = ShapFactory::getCircle('red');
        $circle->draw();
        $circle = ShapFactory::getCircle('yellow');
        $circle->draw();
    }

    /**
     * 代理模式
     */
    public function proxy()
    {
        $obj = new ProxyImage('1111.jpg');
        
        $obj->display();
    }

    /**
     * 责任链模式
     */
    public function chain()
    {
        $obj = ChainBuilder::getChain();
        
        $obj->logMessage(AbstractChain::INFO, "This is Info Message");
        $obj->logMessage(AbstractChain::DEBUG, "This is Info Message");
        $obj->logMessage(AbstractChain::ERROR, "This is Info Message");
    }

    /**
     * 命令模式
     */
    public function command()
    {
        $stock1 = new Stock('Proudct1', 10);
        $stock2 = new Stock('Proudct2', 10);
        
        $buy = new BuyStock($stock1);
        $sell = new SellStock($stock2);
        
        $obj = new Broker();
        
        $obj->takeOrder($buy);
        $obj->takeOrder($sell);
        
        $obj->placeOrder();
    }

    /**
     * 解释器模式
     */
    public function interpreter()
    {
        $isMale = InterpretRule::getMaleExpression();
        $isMarriedWoman = InterpretRule::getMarriedWomanExpression();
        
        var_dump("John1 is male? " . $isMale->interpret("John1"));
        var_dump("Julie is a married women?" . $isMarriedWoman->interpret("Married Julie"));
        
        $china = InterpretRule::getWords();
        
        var_dump($china->interpret(" Great  Country China is at "));
    }

    /**
     * 迭代器
     */
    public function iterator()
    {
        $obj = new NameRepository();
        $iterator = $obj->getIterator();
        $iterator->scan();
        
        $obj = new NameRepository('Great  Country China is at ');
        $iterator = $obj->getIterator();
        $iterator->scan();
    }

    /**
     * 中介模式
     */
    public function mediator()
    {
        $obj1 = new User("Robert");
        $obj2 = new User("John");
        
        $obj1->sendMessage("Hi! John!");
        $obj2->sendMessage("Hello! Robert!");
    }

    /**
     * 备忘录
     */
    public function memento()
    {
        $originator = new Originator();
        $careTaker = new CareTaker();
        
        $originator->setState("State #1");
        $originator->setState("State #2");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #3");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #4");
        
        var_dump("Current State: " . $originator->getState());
        $originator->getStateFromMemento($careTaker->get(0));
        var_dump("First saved State: " . $originator->getState());
        $originator->getStateFromMemento($careTaker->get(1));
        var_dump("Second saved State: " . $originator->getState());
    }

    /**
     * 观察者
     */
    public function observe()
    {
        $subject = new Subject();
        new BinaryObserver($subject);
        new OctalObserver($subject);
        new HexaObserver($subject);
        
        $subject->setState(1);
        $subject->setState(2);
        $subject->setState(3);
    }

    /**
     * 状态模式
     */
    public function state()
    {
        $obj = new Content();
        
        $start = new StartState();
        $start->doAction($obj);
        $obj->getState();
        
        $stop = new StopState();
        $stop->doAction($obj);
        $obj->getState();
    }

    /**
     * 空对象
     */
    public function nulls()
    {
        $customer1 = CustomerFactory::getCustomer("Rob");
        $customer2 = CustomerFactory::getCustomer("Bob");
        $customer3 = CustomerFactory::getCustomer("Julie");
        $customer4 = CustomerFactory::getCustomer("Laura");
        
        var_dump("Customers");
        var_dump($customer1->getName());
        var_dump($customer2->getName());
        var_dump($customer3->getName());
        var_dump($customer4->getName());
    }

    /**
     * 策略模式
     */
    public function strategy()
    {
        $context = new Context(new OperationAdd());
        var_dump("10 + 5 = " . $context->executeStrategy(10, 5));
        
        $context = new Context(new OperationSubtract());
        var_dump("10 - 5 = " . $context->executeStrategy(10, 5));
        
        $context = new Context(new OperationMultiply());
        var_dump("10 * 5 = " . $context->executeStrategy(10, 5));
    }

    /**
     * 访问者模式
     */
    public function visitor()
    {
        $computer = new Computer();
        $visitor = new ComputerPartDisplayVisitor();
        $computer->accept($visitor);
    }

    /**
     * 拦截过滤器
     */
    public function interceptFilter()
    {
        $target = new Target();
        $fManage = new FilterManager($target);
        $fManage->setFilter(new AuthenticationFilter());
        $fManage->setFilter(new DebugFilter());
        
        $client = new Client();
        $client->setFilterManager($fManage);
        $client->sendRequest("HOME");
    }

    /**
     * 服务定位模式
     */
    public function serviceLocator()
    {
        // TODO:第一次获取
        $service1 = ServiceLocator::getService('SERVICES1');
        $service1->execute();
        
        $service2 = ServiceLocator::getService('Service2');
        $service2->execute();
        
        // TODO:第二次获取
        $service1 = ServiceLocator::getService('SERVICES1');
        $service1->execute();
        
        $service2 = ServiceLocator::getService('Service2');
        $service2->execute();
    }

    /**
     * 事件监听实现
     */
    public function event()
    {
        $dispatcher = new EventDispatcher();
        
        $dispatcher->dispatch(new TestEvent($this));
        
        $dispatcher->dispatch(new Test1Event($this));
    }

    public function funcTest()
    {
        $filename = ROOT_PATH . '/Dispacher.php';
        $content = file_get_contents($filename);
        $res =token_get_all($content);
        
        var_dump($res);
    }
}