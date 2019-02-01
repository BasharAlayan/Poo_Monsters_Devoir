<?php

    function getMonster($MonsterId){
        $pdo=new PDO("mysql:dbname=monsters;host=localhost","root","");
        $requet = $pdo->prepare("SELECT * from monster WHERE id='$MonsterId'");
        $requet->execute();
        $rows = $requet->fetchAll();
        foreach ($rows as $row) {
            $id=$row['id'];
            $name=$row['name'];
            $strength=$row['Strength'];
            $life=$row['Life'];
            $type=$row['Type'];
            return array('id' => $id,'name' => $name, 'strength' => $strength,'life' =>$life,'type' => $type); 
        }  
        
        
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

    function DeleteMonster(array $monster){
        $pdo=new PDO("mysql:dbname=monsters;host=localhost","root","");
        //$Delete_Monster=$_POST['Delete_Monster'];
        $Delete_Monster=$monster['id'];
        $sql="DELETE FROM monster WHERE id=$Delete_Monster";
        $requet = $pdo->prepare($sql);
        $execute=$requet->execute();
    }

    function getAllMonsters(){
        $pdo=new PDO("mysql:dbname=monsters;host=localhost","root","");
        $requet = $pdo->prepare("SELECT * from monster"); 
        $requet->execute();
        $rows=$requet->fetchAll();
        $i=0;
        $array=array();
        foreach ($rows as $row) {
            $id=$row['id'];
            $name=$row['name'];
            $strength=$row['Strength'];
            $life=$row['Life'];
            $type=$row['Type'];
        $array[$i]=array('id' =>$id,'name' => $name, 'strength' => $strength,'life' =>$life,'type' => $type);  
        $i=$i+1;  
        }  
        return $array; 
    } 