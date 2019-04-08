<?php

require_once 'Unit.php';
require_once 'Soldier.php';
require_once 'Elf.php';

$elf = new Elf();
echo $elf;

$elf->walk('right');
$elf->walk('right');
$elf->walk('top');
$elf->walk('right');

echo '<br>';
echo $elf;

$elf->walk('left');
$elf->walk('left');
$elf->walk('left');
$elf->walk('left');

echo '<br>';
echo $elf;

echo '<br>';
echo $elf->attack();
