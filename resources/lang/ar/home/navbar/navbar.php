<?php

$arabic = [
    "Lang" => "اختر اللغة",
    "Title"=>"Class Central • اعثر على أفضل الكورسات, من جميع المواقع",
    'Courses' => 'الكورسات',
    'The Report' => 'اخر تريندات',
    'Log In' => 'تسجيل الدخول',
    'Sign Up' => "إنشاء حساب",
    'Rankings'=>'التصنيفات',
    'Collections'=>'المجموعات',
    "Find your next course" => "أى كورس بتدور عليه, عندنا هتلاقيه",
    "Find the best courses, wherever they exist" => "ابحث عن كورساتك المفضلة, من جميع المواقع",
    'Computer Science' => "علوم الحاسب",
    'Health and Medicine' => "الطب والصحة",
    'Mathimatics' => "الرياضيات",
    "Business" => "الأعمال",
    "Humanities" => "",
    "Engineering" => "",
    "Science" => "",
    "Education & Teaching" => "",
    "Social Sciences" => "",
    "Art & Design" => "",
    "Data Sciences" => "",
    "Programming" => "",
    "Personal Development" => "",
    "Information Security" => "",
    "View All" => "مشاهدة الكل",
];
$file = fopen("C:\\Users\\mo3tz\\CentralCourcesTask\\resources\\lang\\en\\home\\navbar.php",'w');
$fileHindi = fopen("C:\\Users\\mo3tz\\CentralCourcesTask\\resources\\lang\\in\\home\\navbar.php",'w');
$arrEn=[];
$arrHindi=[];
foreach ($arabic as $key => $value) {
    # code...
    $arrEn += [$key => $key];
    $arrHindi += [$key => ""];
}
fwrite($file,json_encode($arrEn));
fwrite($fileHindi,json_encode($arrHindi));
fclose($file);
fclose($fileHindi);
// dd($arr);
return $arabic;
