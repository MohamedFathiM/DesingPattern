<?php

use DesignPattern\Behavioral\ChainOfResponsibility\Exceptions\NoUserLoyaltyException;
use DesignPattern\Behavioral\ChainOfResponsibility\Exceptions\ProductAvailabilityException;
use DesignPattern\Behavioral\ChainOfResponsibility\Exceptions\ProductShipmentException;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers\LoyaltyHandler;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers\OrderServiceHandler;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers\ProductAvailabilityServiceHandler;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Handlers\ShipmentAvailabilityServiceHandler;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Order;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\Product;
use DesignPattern\Behavioral\ChainOfResponsibility\Order\User;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\MobileForm;
use DesignPattern\Creational\AbstractFactory\FormAbstractFactory\WebForm;
use DesignPattern\Creational\Singleton\AppSettings;
use DesignPattern\Structural\Adapter\SMSAdapter\Adapters\ABCSMSClientAdapter;
use DesignPattern\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager;
use DesignPattern\Structural\Adapter\SMSAdapter\Messages\SMSMessage;
use DesignPattern\Structural\Adapter\SMSAdapter\MonkeySMSClient;
use DesignPattern\Structural\Bridge\Grades\Grade1Report;
use DesignPattern\Structural\Bridge\Reports\HtmlReport;
use DesignPattern\Structural\Bridge\Reports\XmlReport;
use DesignPattern\Structural\Composite\DTOs\DataModelDTO\AddressDto;
use DesignPattern\Structural\Composite\DTOs\DataModelDTO\OrderDto;
use DesignPattern\Structural\Composite\DTOs\DataModelDTO\OrderOwnerDto;
use DesignPattern\Structural\Composite\DTOs\DataModelDTO\PurchaseBill;
use DesignPattern\Structural\Flyweight\GameBoard\GameBoard;
use DesignPattern\Structural\Flyweight\GameBoard\GameTileBorder;
use DesignPattern\Structural\Flyweight\GameBoard\GameTileColor;
use DesignPattern\Structural\Flyweight\GameBoard\GameTileFactory;
use DesignPattern\Structural\Flyweight\GameBoard\GameTileLevel;
use DesignPattern\Structural\Proxy\RouterInterface\Clients\Application1;
use DesignPattern\Structural\Proxy\RouterInterface\Clients\Application2;
use DesignPattern\Structural\Proxy\RouterInterface\RouterFactory;
use DesignPattern\Structural\Proxy\RouterInterface\RouterProxy;

require_once '../vendor/autoload.php';

$mohamed = new \DesignPattern\OOP\PHP\Polymorphism\Employee(
    "Mohamed",
    28,
    new \DesignPattern\OOP\PHP\Polymorphism\Salary(
        1500,
        0,
        0,
        0,
        0,
        0
    )
);

$microwave = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Microwave(90, 'DE1', 30);
//var_dump($mohamed->getName());
//var_dump($mohamed->getAge());

if ($microwave->turnOn()) {
    //    var_dump($microwave->deFreeze());
    $microwave->turnOff();
}

$bmw = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\BMW(
    120,
    2,
    "FRONT",
    "BLACK"
);

$mercedes = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Mercedes(
    320,
    2,
    'BACK',
    'White'
);

$order1 = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Order('Cairo', 'Alex', 120);
$order2 = new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\Order('Suhag', 'Aswan', 300);

//var_dump($order1->deliverOrder($bmw));
//var_dump($order2->deliverOrder($mercedes));

// Encapsulation
$bmw->installDashboard(new \DesignPattern\OOP\PHP\AbstractionVSEncapsulation\CarDashboard(5, 9, 100));
//var_dump($bmw->getCarDashboard());

$ahmed = new \DesignPattern\OOP\PHP\Polymorphism\Employee(
    'Ahmed',
    30,
    new \DesignPattern\OOP\PHP\Polymorphism\OrganizationSalary(
        4500,
        0.2,
        2,
        30,
        65,
        20,
        0.1
    )
);

//var_dump($ahmed->getSalary()->calculateSalary());
//var_dump($ahmed->getSalary()->calculateSalary(0.1));

$khaled = new \DesignPattern\OOP\PHP\Relationship\Association\Teacher\ScienceTeacher("Khaled");
$ahmedTeacher = new \DesignPattern\OOP\PHP\Relationship\Association\Teacher\ScienceTeacher("Ahmed");

//var_dump($khaled->sayWelcome(new \DesignPattern\OOP\PHP\Relationship\Association\Printer\PlainTextPrinter()));

$ali = new \DesignPattern\OOP\PHP\Relationship\Association\Student("Ali");
$ali->assignTempTeacher($khaled);
//var_dump("Ali is assigned to {$khaled->getName()} " . "And his score is : " . $khaled->evaluateStudentHomeWork($ali));
$ali->assignTempTeacher($ahmedTeacher);
//var_dump("Ali is assigned to {$ahmedTeacher->getName()} " . "And his score is : " . $ahmedTeacher->evaluateStudentHomeWork($ali));


// Aggregation
$dev1 = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Developer("Mohamed");
$dev2 = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Developer("Ahmed");
$dev3 = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Developer("Ali");

$project = new \DesignPattern\OOP\PHP\Relationship\Aggregation\Project(
    "project-x",
    new DateTime('now'),
    [$dev1, $dev2, $dev3]
);
$project->setDeadLineTo(new DateInterval('P1M'));

//var_dump($project->showProjectInfo());

// Composition (strong relationship)
$room1 = new \DesignPattern\OOP\PHP\Relationship\Composition\Room('White', 120);
$room2 = new \DesignPattern\OOP\PHP\Relationship\Composition\Room('Green', 150);
$room3 = new \DesignPattern\OOP\PHP\Relationship\Composition\Room('Black', 160);

$house = new \DesignPattern\OOP\PHP\Relationship\Composition\House([$room1, $room2, $room3]);


# Summary of Relationships Types
/**
 * Association
 * Aggregation (Has_a) Project Has A Developer
 * Composition (part_of) Room part of House
 *
 * Inheritance - Generalization (is_a) - Manager is an employee
 *
 */


// Factory Method
$systemDialog = new \DesignPattern\Creational\FactoryMethod\Dialog\SystemDialog();
//var_dump($systemDialog->render());
$uiDialog = new \DesignPattern\Creational\FactoryMethod\Dialog\UiDialog();
//var_dump($uiDialog->render());


// builder
$director = new \DesignPattern\Creational\Builder\Director(new \DesignPattern\Creational\Builder\Builder\Builders\BuilderCs());
$director->changeBuilder(new \DesignPattern\Creational\Builder\Builder\Builders\BuilderFull());
$computer = $director->makeComputer();
//var_dump($computer);

// prototype
$prototypeMohamedEmployee = new \DesignPattern\Creational\Prototype\EmployeePrototype(
    new \DesignPattern\Creational\Prototype\EmployeeData\ProfileData(
        'Mohamed',
        30,
        new \DesignPattern\Creational\Prototype\EmployeeData\Address(
            150.025,
            120.5,
            'Alazher',
            'Damietta',
            'Egypt',
            1,
            1254545
        ),
        '021545454',
        '020101554646',
        'mohamed@slack.net'
    ),
    new \DesignPattern\Creational\Prototype\EmployeeData\Salary(1200, 0.02, 100),
    new \DesignPattern\Creational\Prototype\EmployeeData\Privileges\Privileges([
        new \DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types\ServerProjectPrivilege(),
        new \DesignPattern\Creational\Prototype\EmployeeData\Privileges\Types\NetworkProjectPrivilege()
    ])
);

$ahmedSampleFromPrototype = clone $prototypeMohamedEmployee;
//var_dump($ahmedSampleFromPrototype);

// Abstract factory
$client = new FormAbstractFactory\GuiClient(new WebForm\WebFormFactory());
//var_dump($client->createForm());
$client->setFactory(new MobileForm\MobileFormFactory());
//var_dump($client->createForm());

// singleton
$settings = AppSettings::getInstance();
//var_dump($settings::getConfig('Database'));

// Adapter
$message = new SMSMessage('Welcome To our Club', '015455445454');
$message2 = new SMSMessage('Please, Join Our Community', '455454545454');
$message3 = new SMSMessage('Your Account has been activated', '554412');
$message4 = new SMSMessage('Thank you for join us', '0155233');

$client = new MonkeySMSClient([
    $message, $message2, $message3
]);

$client->addMessage($message4);

$client->filterNumbers();
//$client->send();
//var_dump($client->getDeliveryStatus());

$client2 = new ABCSMSClientAdapter([
    $message,
    $message2,
    $message3,
    $message4
], new ABCSMSManager\SMSManager());

//$client2->send();
//var_dump($client2->getDeliveryStatus());


// Bridge

$reportTool = new Grade1Report(
    new HtmlReport()
);
//echo $reportTool->showReport();
$reportTool->setReport(new XmlReport());
//echo $reportTool->showReport();


// Facade

//try {
//    $converter = new \DesignPattern\Structural\Facade\FileConverter\FileConverterFacade('audioLecture.avi');
//    $converter->convert();
//} catch (CorruptedFileException $e) {
//    echo $e->getMessage() . "\n";
//}


// Decorator
$isSmsEnabled = true;
$isWhatsappEnabled = false;

$notifier = new \DesignPattern\Structural\Decorator\EmailNotifier('mohamedkdr66@yahoo.com');

if ($isSmsEnabled) {
    $notifier = new \DesignPattern\Structural\Decorator\Decorators\SmsNotifierDecorator('0100200300', $notifier);
}

if ($isWhatsappEnabled) {
    $notifier = new \DesignPattern\Structural\Decorator\Decorators\WhatsappNotifierDecorator('0100200300', $notifier);
}

// $notifier->notify();


// Proxy
$acl = ['APP_1', 'APP_3', 'APP_4'];
$app1 = new Application1(new DateTime('now'));
$app2 = new Application2();

$router = new RouterProxy(RouterFactory::createRouter(), $app2, $acl);

// if ($router->resolve('http://www.abc.com')) {
//     $router->stream();
// }


// Composite
$address1 = new AddressDto('Alazher 1', 211221, 'Damietta');
$address2 = new AddressDto('Alazher 2 ', 454545, 'Egypt');
$address3 = new AddressDto('Alazher 3 ', 454545, 'Minia');

$mohamed = new OrderOwnerDto('Mohamed', $address1);
$ahmed = new OrderOwnerDto('Ahmed', $address2);
$ali = new OrderOwnerDto('Ali', $address3);

$order1 = new OrderDto($mohamed, new DateTime('now'), 1200, 2);
$order2 = new OrderDto($ahmed, new DateTime('now'), 1200, 2);
$order3 = new OrderDto($ali, new DateTime('now'), 1300, 5);

$purchaseBill = new PurchaseBill([$order1, $order2, $order3]);

//var_dump($purchaseBill->render());


// flyWeight
$board = new GameBoard();
$borderTile1 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    'small',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTile2 = new GameTileBorder(
    'black',
    'thick',
    GameTileColor::TILE_COLOR_BROWN,
    'small',
    GameTileLevel::TILE_LEVEL_EXPERT
);
$borderTile3 = new GameTileBorder(
    'black',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    'medium',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTile4 = new GameTileBorder( // same number 1
    'black',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    'small',
    GameTileLevel::TILE_LEVEL_BEGINNER
);

$board->addTile($borderTile1);
$board->addTile($borderTile2);
$board->addTile($borderTile3);
$board->addTile($borderTile4);

// echo $board . "\n";
// var_dump(GameTileFactory::getTiles());


// Behavioral Design Patterns
// Chain of Responsibility
$user = new User('USR-101', 'Mohamed Fathi');
$product = new Product('PRD-101', 'Laptop', 7);
$order = new Order($user, $product, new \DateTime('2019-08-10'));

$loyaltyService = new LoyaltyHandler();
$loyaltyService->setNextHandler(new ProductAvailabilityServiceHandler())
    ->setNextHandler(new ShipmentAvailabilityServiceHandler)
    ->setNextHandler(new OrderServiceHandler);

try {
    $loyaltyService->handle($order);
} catch (NoUserLoyaltyException $e) {
    echo $e->getMessage() . "\n";
} catch (ProductAvailabilityException $e) {
    echo $e->getMessage() . "\n";
} catch (ProductShipmentException $e) {
    echo $e->getMessage() . "\n";
}
