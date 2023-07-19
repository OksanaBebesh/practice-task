//tiger, elephant, rhino, fox, snow leopard, snow rabbit

$elephant = new Elephant('Teddy');
echo $elephant;

$fox = new Fox('Kate');
$tiger = new Tiger('Black');
$rabbit = new SnowRabbit('Minni');
$snowLeopard = new SnowLeopard('Bars');
$rhino = new Rhino('Green');

$zooWarshaw = new Zoo('Warshaw Zoo');
$zooWarshaw->setItemCollection($tiger);
$zooWarshaw->setItemCollection($rabbit);
$zooWarshaw->setItemCollection($rhino);
echo ($zooWarshaw);
$zooWarshaw->printZoo($zooWarshaw->getItemCollection());

$zooLodz = new Zoo('Lodz Zoo');
$zooLodz->setItemCollection($elephant);
$zooLodz->setItemCollection($rabbit);
$zooLodz->setItemCollection($snowLeopard);
echo ($zooLodz);
$zooLodz->printZoo($zooLodz->getItemCollection());