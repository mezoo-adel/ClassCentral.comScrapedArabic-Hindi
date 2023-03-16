<?php

$arabic = [
    "Lang" => "اختر اللغة",
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
$arr=[];
foreach ($arabic as $key => $value) {
    # code...
    $arr += [$key => $key];
}
fwrite($file,json_encode($arr));
fclose($file);
// dd($arr);
return $arabic;
