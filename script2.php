<?php
class count
{
public $x;
public $a;
public $b;
public $c;

function __construct($x, $a, $b, $c)
{
$this->x = $x;
$this->a = $a;
$this->b = $b;
$this->c = $c;
}

function countx()
{
$x =$this->x;
if($x <= 3)
{
echo (intval($x)**2 - 3 * intval($x) + 9) ;
echo "<br>";
}
else
{
echo $x**3 + 6 + "<br>";
}
}
function county()
{
    $a =$this->a;
    $b=$this->b;
    $c=$this->c;
echo (intval($a) * intval($b) + intval($c)) ;
echo "<br>";
}
}
$x = $_POST["x"];
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$y = new count($x, $a, $b, $c);
$y->countx();
$y->county();

?>