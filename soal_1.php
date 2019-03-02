<?php 

        function biodata(){

                    $biodata = [
                        "name"          => "Khairul Bahri",
                        "address"       => "JL. Simpang Seruai,Medan labuhan",
                        "hobbies"       => ["Koding","Gaming","Futsal"],
                        "is_married"    => false,
                        "school"        => (object)[
                                            "highSchool" => "MAS YASPI Labuhan Deli",
                                            "university" => "Universitas Potensi Utama"
                        ],
                        "skills"        => (object)[
                                            "skill"              => "HTML, CSS, Javascript, PHP"
                        ]
                    ];
                    return $biodata;
            }
        echo json_encode(biodata());
