<?php
    require __DIR__ . '/monterpooex.php';

    function getMonsters(){
        $monster1=new Monster();
        $monster1->set_name("Domovoï");
        $monster1->set_strength(30);
        $monster1->set_life(300);
        $monster1->set_type("Water");

        $monster2=new Monster();
        $monster2->set_name("Wendigos");
        $monster2->set_strength(100);
        $monster2->set_life(500);
        $monster2->set_type("Earth");

        $monster3=new Monster();
        $monster3->set_name("Thunderbird");
        $monster3->set_strength(400);
        $monster3->set_life(500);
        $monster3->set_type("Air");

        $monster4=new Monster();
        $monster4->set_name("Sirrush");
        $monster4->set_strength(250);
        $monster4->set_life(1500);
        $monster4->set_type("Fire");
        $monsters=[$monster1,$monster2,$monster3,$monster4];
        $i=0;
        $array=array();
        foreach ($monsters as $monster)
        { 
            $name=$monster->get_name();  
            $strength=$monster->get_strength();
            $life=$monster->get_life();  
            $type=$monster->get_type();
            $array[$i]=array('name'=>$name,'strength'=>$strength,'life'=>$life,'type'=>$type);
            $i=$i+1;
        }
        return $array;
    }

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
} 