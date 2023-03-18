<?php
use App\CustomHelper\TranslateHelper;
$arabic = [
    "Search 100,000 courses…" => 'ابحث فى اكثر من 100.000 كورس',
    "Popular courses" => "كورسات شائعة",
    "subject" => 'المواد',
    "university" => 'الجامعات',
    "Learn more" => 'تعلم المزيد',
    "Sustainability" => 'التنمية البشرية',
    "Best Courses Guides" => 'دليل أفضل الكورسات',
    "Deals and Discounts" => 'العروض والتخفيضات',
    "Free Certificates" => 'شهادات مجانية',
    "Best of All Time" => 'الأفضل على الإطلاق',
    "1200+ Universities" => 'اكثر من 1200 جامعة',
    "80 Providers" => 'اكثر من 80 ممول',
    "1000+ Institutions" => 'اكثر من 1000 مؤسسة',
    "Browse universities" => 'تصفح الجامعات',
    "Browse institutions" => 'تصفح المؤسسات ',
    "Browse providers" => 'تصفح المساهمين ',
    "Browse collections" => 'تصفح المجموعات ',
    "RECENT ARTICLES" => 'احدث المقالات',
    "View rankings" => 'عرض الترتيب',
    "Rankings" => 'الترتيب',
    "Tens of thousands of reviews written by Class Central users help you pick the best course."=>"تساعدك عشرات الآلاف من المراجعات التي كتبها مستخدمو كلاس سنترال في اختيار أفضل مسار."
];

TranslateHelper::transFileGenerator("body", "body", $arabic);

return $arabic;
