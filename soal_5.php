<?php

    $jumlahOrang =12 ;

        function countHandshake($jumlahOrang){
            $totalJabat = 0;
            for($i = 0; $i < $jumlahOrang; $i++){
                for($j = 1; $j < $jumlahOrang; $j++){
                    $totalJabat += 1;
                }
            }
            return $totalJabat/2;
        }
        echo countHandshake($jumlahOrang);

