<?php
use App\CustomHelper\TranslateHelper;
$arabic = [

    "browse by" => '',
    "subject" => '',
    "university" => '',
    "Learn more" => '',
    "Best Cources Guide " => '',
    "Deals and Discounts" => '',
];

TranslateHelper::transFileGenerator("body.php", "body.php", $arabic);

return $arabic;
