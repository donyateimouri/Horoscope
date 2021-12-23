
<?php
    

    $GLOBALS['getHoroscope'] = array(
        array(
            "startdate" => "0121",
            "enddate" => "0218",
            "name" => "Aquarius",
           
        ),
        array(
            "startdate" => "0219",
            "enddate" => "0319",
            "name" => "Pisces",
        ),
        array(
            "startdate" => "0320",
            "enddate" => "0419",
            "name" => "Aries",
        ),
        array(
            "startdate" => "0420",
            "enddate" => "0520",
            "name" => "Taurus",
        ),
        array(
            "startdate" => "0521",
            "enddate" => "0620",
            "name" => "Gemini",
        ),
        array(
            "startdate" => "0621",
            "enddate" => "0721",
            "name" => "Cancer",
        ),
        array(
            "startdate" => "0722",
            "enddate" => "0822",
            "name" => "Leo",
        ),
        array(
            "startdate" => "0823",
            "enddate" => "0922",
            "name" => "Virgo",
        ),
        array(
            "startdate" => "0923",
            "enddate" => "1022",
            "name" => "Libra",
        ),
        array(
            "startdate" => "1023",
            "enddate" => "1121",
            "name" => "Scorpio",
        ),
        array(
            "startdate" => "1122",
            "enddate" => "1221",
            "name" => "Sagittarius",
        ),
        array(
            "startdate" => "1222",
            "enddate" => "1231",
            "name" => "Capricrn",
        )
    );

    
    
function find_horoscope($birth_date){

    foreach ($GLOBALS['getHoroscope'] as $starSign)  {

        if($birth_date >= $starSign['startdate'] && $birth_date <= $starSign['enddate']) {
            return $starSign;
        }
    };   
};
?>