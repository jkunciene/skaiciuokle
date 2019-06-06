<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );

    mysqli_set_charset($prisijungimas, 'utf8mb4');

    if( !$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungimas();

        function createQuestion($vardas, $email, $question){
        $vardas_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $vardas );
        $question_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $question );
        $mano_sql_tekstas = "INSERT INTO questions
                                    VALUES('', '$vardas_apdorotas', '$email', '$question_apdorotas', NOW());
                            ";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {
             echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
        } else {
        }
    }

    function getAtsakymai($nr) {
        $mano_sql_tekstas = "SELECT * FROM atsakymai
                            WHERE klausimoNumeris='$nr'
                            ";
        $rezultatai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);
             return $rezultatai;
        }

    
    function getQuestions($kiekis = 99999) {
        $mano_sql_tekstas = "SELECT * FROM questions

                                      LIMIT $kiekis
                            ";
        $rezult = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);

                if ( $rezult ) {
             return $rezult;
        } else {
            return NULL; //
        }
    }
