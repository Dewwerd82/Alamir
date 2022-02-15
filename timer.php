<?php

include_once './counter.php';

function timer1 ()
    { 
        $startTime = time(); // получаем текущее время

        $count = $_SESSION["count"];

        $startRed = $_SESSION['startRed'];
                
        $startGreen = $_SESSION['startGreen'];
                
        $redRed = $_SESSION['redRed'];
                
        $redGreen = $_SESSION['redGreen'];
                
        $greenGreen = $_SESSION['greenGreen'];  
        
        $greenRed = $_SESSION['greenRed'];

        $endTime = $startTime + $count; // получаем кол. секунд

        $n = 1; //количество циклов

        $fishka = new Kletka($redRed, $redGreen, $greenRed, $greenGreen, $startGreen, $startRed);

        // цикл длится заданное количество раз
        while($startTime != $endTime) { 


            $sum = $fishka->addKletka(); 
            

            $startTime++;
            
            echo '
                      <tr>
                        <th scope="row">'; echo $n++; echo '</th>
                        

                        <td>'; echo $fishka->startRed; echo '</td>
                        <td>'; echo $fishka->startGreen; echo '</td>
                        
                    </tr>
                    ';

        }
        
    }



?>