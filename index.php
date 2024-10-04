<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <?php

    class Animals {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this-> weight = $weight;
        $this-> age = $age;
        $this-> color = $color;

    }

    public function getInfo() {
        return "Вес: {$this->weight} килограмм, Возраст: {$this->age} лет, Окраска: {$this->color}";
    }
}
class Lion extends Animals {
    private $dansan; 

    public function __construct($weight, $age, $color, $dansan) {
        parent::__construct($weight, $age, $color);
        $this->dansan = $dansan;
    }

    public function danon() {
        return "Лев фармит бабосики: {$this->dansan}";
    }

    public function getInfo() {
        return parent::getInfo() . ", Столько лвов фармят мафака: {$this->dansan}";
    }
}

class Rabbit extends Animals {
    private $est; 

    public function __construct($weight, $age, $color, $est) {
        parent::__construct($weight, $age, $color);
        $this->est = $est;
    }

    public function kushat() {
        return "Кролики убивают цыган: {$this->est} стариков";
    }

    public function getInfo() {
        return parent::getInfo() . ", Столько кроликов убили цыган: {$this->est} старых (пердящих)";
    }
}

class Wolf extends Animals {
    private $volchara; 

    public function __construct($weight, $age, $color, $volchara) {
        parent::__construct($weight, $age, $color);
        $this->volchara = $volchara;
    }

    public function sobaka() {
        return "Волчара неформал: {$this->volchara}";
    }

    public function getInfo() {
        return parent::getInfo() . ", Столько волков неформалы: {$this->volchara}";
    }
}$lion = new Lion(27, 15, 'Голубой', 10);
$rabbit = new Rabbit(123, 353, 'Черный', 12);
$wolf = new Wolf(99, 228, 'Фиолетовый', 'гавгав');
echo "Информация о льве: " . $lion->getInfo() . "\n";
echo $lion->danon() . "\n\n";
echo "Информация о кролике: " . $rabbit->getInfo() . "\n";
echo $rabbit->kushat() . "\n\n";
echo "Информация о волке: " . $wolf->getInfo() . "\n";
echo $wolf->sobaka() . "\n";
    ?>

</body>
</html>