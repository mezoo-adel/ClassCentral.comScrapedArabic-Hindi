<?php
$arabic = [
"Subjects" => "المواد",
"Monthly Course Reports" => "تقارير الدورات الشهرية",
];

use App\CustomHelper\TranslateHelper;
TranslateHelper::transFileGenerator("subjects", "subjects", $arabic);
return $arabic;
