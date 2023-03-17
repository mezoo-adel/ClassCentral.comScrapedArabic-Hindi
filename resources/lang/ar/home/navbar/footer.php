<?php

$arabic = [
'Browse by subject'=>  "تصفح حسب الموضوع",
'Computer Science'=>  "علوم الكمبيوتر",
'Psychology'=>  "علم النفس",
'Cybersecurity'=>  "الأمن الإلكتروني",
'Health'=>  "صحة",
'Law'=>  "قانون",
'Accounting'=>  "محاسبة",
'Web Development'=>  "تطوير المواقع",
'Browse by provider'=>  "تصفح حسب المزود",
'Coursera'=>  "كورسيرا",
'edX'=>  "إيدكس",
'FutureLearn'=>  "FutureLearn",
'Udacity'=>  "يوداسيتي",
'Swayam'=>  "سويام",
'Udemy'=>  "يوديمى",
'LinkedIn Learning'=>  "لينكدإن للتعلم",
'Browse by university'=>  "تصفح حسب الجامعة",
'Browse by institution'=>  "تصفح حسب المؤسسة",
'Rankings'=>  "الترتيب",
'Best Online Courses of All Time'=>  "أفضل الدورات عبر الإنترنت في كل العصور",
'Best Online Courses of the Year'=>  "أفضل الدورات عبر الإنترنت لهذا العام",
'Most Popular Courses of All Time'=>  "الدورات الأكثر شهرة في كل العصور",
'Most Popular Courses of the Year'=>  "الدورات الأكثر شهرة في العام",
'250 Top FREE Coursera Courses of All Time'=> "250 من أفضل دورات كورسيرا المجانية على الإطلاق",
'100 Top FREE edX Courses of All Time'=> "100 من أفضل دورات edX المجانية في كل العصور",
'250 Top Udemy Courses of All Time'=> "250 من أفضل دورات Udemy في كل العصور",
`The "New Normal" that Wasn't`=> `"العادي الجديد" الذي لم يكن كذلك`,
'500+ Online Degrees in India'=> "500+ درجة عبر الإنترنت في الهند",
"Harvard's CS50 Free Certificate Guide"=>  "دليل شهادة CS50 المجانية من Harvard",
'How Open University Works'=>  "كيف تعمل الجامعة المفتوحة",
'Free Certificates & Courses'=>  "شهادات ودورات مجانية",
'700+ Free Google Certificates'=>  "أكثر من 700 شهادة مجانية من جوجل",
'Free LinkedIn Learning Certificates'=>  "شهادات التعلم المجانية من لينكدإن",
'1700 Free Coursera Courses'=>  "1700 دورة كورسيرا مجانية",
'175+ Free Writing Online Courses'=>  "175+ دورات مجانية للكتابة عبر الإنترنت",
'About Class Central'=>  "حول Class Central",
'Class Central aggregates courses from many providers to help you find the best courses on almost any subject, wherever they exist.'=>  "يقوم كلاس سنرال بتجميع الدورات التدريبية من العديد من مقدمي الخدمات لمساعدتك في العثور على أفضل الدورات التدريبية حول أي موضوع تقريبًا ، أينما وجدت.",
];
$file = fopen("C:\\Users\\mo3tz\\CentralCourcesTask\\resources\\lang\\en\\home\\footer.php",'w');
$fileHindi = fopen("C:\\Users\\mo3tz\\CentralCourcesTask\\resources\\lang\\in\\home\\footer.php",'w');
$arrEn=[];
$arrHindi=[];
foreach ($arabic as $key => $value) {
    # code...
    $arr += [$key => $key];
    $arrHindi += [$key => ""];
}
fwrite($file,json_encode($arr));
fwrite($fileHindi,json_encode($arrHindi));
fclose($file);
fclose($fileHindi);
// dd($arr);
return $arabic;
