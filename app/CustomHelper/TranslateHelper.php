<?php
namespace App\CustomHelper;

class TranslateHelper
{
    public static function transFileGenerator(String $EnFileName, String $InFileName, array $array)
    {

        $EnFileName = fopen("C:\\Users\\mo3tz\\CentralCourcesTask\\resources\\lang\\en\\home\\" . $EnFileName . ".php", 'w');
        $InFileName = fopen("C:\\Users\\mo3tz\\CentralCourcesTask\\resources\\lang\\in\\home\\" . $InFileName . ".php", 'w');
        $arrEn = [];
        $arrHindi = [];
        foreach ($array as $key => $value) {
            # code...
            $arrEn += [$key => $key];
            $arrHindi += [$key => ""];
        }
        fwrite($EnFileName, json_encode($arrEn));
        fwrite($InFileName, json_encode($arrHindi));
        fclose($EnFileName);
        fclose($InFileName);
    }
}
