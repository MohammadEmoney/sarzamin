<?php

namespace Database\Seeders;

use App\Enums\EnumLayoutReleaseType;
use App\Models\Layout;
use App\Models\LayoutGroup;
use App\Traits\MediaTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class LayoutTableSeeder extends Seeder
{
    use MediaTrait;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('layouts')->truncate();
        DB::table('layout_groups')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $mainMenu = $this->mainMenu();
        $mainMenuEn = $this->mainMenuEn();
        $mainMenuAr = $this->mainMenuAr();
        $footerMenu = $this->footerMenu();
        $footerMenuEn = $this->footerMenuEn();
        $footerMenuAr = $this->footerMenuAr();
        $mainSlider = $this->mainSlider();
        $mainSliderEn = $this->mainSliderEn();
        $mainSliderAr = $this->mainSliderAr();
        $homeAbout = $this->homeAbout();
        $homeAboutEn = $this->homeAboutEn();
        $homeAboutAr = $this->homeAboutAr();
        $mainCTA = $this->mainCTA();
        $mainCTAEn = $this->mainCTAEn();
        $mainCTAAr = $this->mainCTAAr();
        $services = $this->services();
        $servicesEn = $this->servicesEn();
        $servicesAr = $this->servicesAr();
        $mainNews = $this->mainNews();
        $mainNewsEn = $this->mainNewsEn();
        $mainNewsAr = $this->mainNewsAr();
        $socialMedia = $this->socialMedia();
        $socialMediaEn = $this->socialMediaEn();
        $socialMediaAr = $this->socialMediaAr();
        $mainBenefits = $this->mainBenefits();
        $mainBenefitsEn = $this->mainBenefitsEn();
        $mainBenefitsAr = $this->mainBenefitsAr();
        // $mainContent = $this->mainContent();
        // $footer = $this->mainFooter();

        $groups = [
            [
                "title" => "منو اصلی",
                "active" => 1,
                "count_list" => null,
                "layouts" => $mainMenu,
                "tag" => "main-menu",
                'lang' => 'fa', 
            ],
            [
                "title" => "Main Menu",
                "active" => 1,
                "count_list" => null,
                "layouts" => $mainMenuEn,
                "tag" => "main-menu",
                'lang' => 'en', 
            ],
            [
                "title" => "Main Menu",
                "active" => 1,
                "count_list" => null,
                "layouts" => $mainMenuAr,
                "tag" => "main-menu",
                'lang' => 'ar', 
            ],
            [
                "title" => "منو فوتر",
                "active" => 1,
                "count_list" => null,
                "layouts" => $footerMenu,
                "tag" => "footer-menu",
                'lang' => 'fa', 
            ],
            [
                "title" => "Footer Menu",
                "active" => 1,
                "count_list" => null,
                "layouts" => $footerMenuEn,
                "tag" => "footer-menu",
                'lang' => 'en', 
            ],
            [
                "title" => "Footer Menu",
                "active" => 1,
                "count_list" => null,
                "layouts" => $footerMenuAr,
                "tag" => "footer-menu",
                'lang' => 'ar', 
            ],
            [
                "title" => "اسلایدر اصلی",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainSlider,
                "tag" => 'main-slider',
                'lang' => 'fa',
            ],
            [
                "title" => "Main Slider",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainSliderEn,
                "tag" => 'main-slider',
                'lang' => 'en',
            ],
            [
                "title" => "المنزلق الرئيسي",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainSliderAr,
                "tag" => 'main-slider',
                'lang' => 'ar',
            ],
            [
                "title" => "درباره ما",
                "active" => 1,
                "count_list" => 0,
                "layouts" => $homeAbout,
                "tag" => 'main-about',
                'lang' => 'fa',
                'description' => '<p>کودکان امروز، مدیران و مهندسین خلاق فردا</p>',
            ],
            [
                "title" => "About Us",
                "active" => 1,
                "count_list" => 0,
                "layouts" => $homeAboutEn,
                "tag" => 'main-about',
                'lang' => 'en',
                'description' => '<p>Today\'s children, tomorrow\'s managers and creative engineers</p>',
            ],
            [
                "title" => "معلومات عنا",
                "active" => 1,
                "count_list" => 0,
                "layouts" => $homeAboutAr,
                "tag" => 'main-about',
                'lang' => 'ar',
                'description' => '<p>کودکان اليوم، مدیران و مهندسین أخلاق فردا</p>',
            ],
            [
                "title" => "اقدام به عمل",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainCTA,
                "tag" => 'main-cta',
                'lang' => 'fa',
            ],
            [
                "title" => "Call To Action",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainCTAEn,
                "tag" => 'main-cta',
                'lang' => 'en',
            ],
            [
                "title" => "دعوة للعمل",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainCTAAr,
                "tag" => 'main-cta',
                'lang' => 'ar',
            ],
            [
                "title" => "خدمات ما",
                "active" => 1,
                "count_list" => 6,
                "layouts" => $services,
                "tag" => 'services',
                'lang' => 'fa',
                'description' => '<p>طیف وسیعی از خدمات ما را که برای توانمندسازی فرزندتان با مهارت‌ها و دانش‌های ارزشمند طراحی شده‌اند، کاوش کنید.</p>',
            ],
            [
                "title" => "Our Services",
                "active" => 1,
                "count_list" => 6,
                "layouts" => $servicesEn,
                "tag" => 'services',
                'lang' => 'en',
                'description' => '<p>Explore our range of services designed to empower your child with valuable skills and knowledge.</p>',
            ],
            [
                "title" => "خدماتنا",
                "active" => 1,
                "count_list" => 6,
                "layouts" => $servicesAr,
                "tag" => 'services',
                'lang' => 'ar',
                'description' => '<p>استكشف مجموعتنا من الخدمات المصممة لتمكين طفلك وتزويده بالمهارات والمعرفة القيمة.</p>',
            ],
            [
                "title" => "اخبار صفحه اصلی",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainNews,
                "tag" => 'main-news',
                'lang' => 'fa',
            ],
            [
                "title" => "Main Page news",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainNewsEn,
                "tag" => 'main-news',
                'lang' => 'en',
            ],
            [
                "title" => "أخبار الصفحة الرئيسية",
                "active" => 1,
                "count_list" => 3,
                "layouts" => $mainNewsAr,
                "tag" => 'main-news',
                'lang' => 'ar',
            ],
            [
                "title" => "شبکه های اجتماعی",
                "active" => 1,
                "count_list" => 5,
                "layouts" => $socialMedia,
                "tag" => 'social-media',
                'lang' => 'fa',
            ],
            [
                "title" => "Social Media",
                "active" => 1,
                "count_list" => 5,
                "layouts" => $socialMediaEn,
                "tag" => 'social-media',
                'lang' => 'en',
            ],
            [
                "title" => "وسائل التواصل الاجتماعي",
                "active" => 1,
                "count_list" => 5,
                "layouts" => $socialMediaAr,
                "tag" => 'social-media',
                'lang' => 'ar',
            ],
            [
                "title" => "آموزش رباتیک",
                "description" => "<p>با ارائه مهارت‌های ضروری، توانمندسازی دختران در STEM، آماده‌سازی آنها برای فرصت‌های شغلی سودآور و ارائه یک تجربه یادگیری جذاب و سرگرم‌کننده، قدرت تحول‌آفرین آموزش رباتیک را در شکل‌دهی به آینده کودکان کشف کنید. کشف کنید که چگونه دوره های رباتیک فقط در مورد ساخت ربات نیست، بلکه در مورد ایجاد ذهن های جوان با اعتماد به نفس، خلاق و نوآور آماده برای مقابله با چالش های فردا است.</p>",
                "active" => 1,
                "count_list" => 5,
                "layouts" => $mainBenefits,
                "tag" => 'main-benefit',
                'lang' => 'fa',
            ],
            [
                "title" => "Robotics Education",
                "description" => "<p>Explore the transformative power of robotics education in shaping the future of children by providing them with essential skills, empowering girls in STEM, preparing them for lucrative career opportunities, and offering an engaging and fun learning experience. Discover how robotics courses are not just about building robots, but about building confident, creative, and innovative young minds ready to tackle the challenges of tomorrow.</p>",
                "active" => 1,
                "count_list" => 5,
                "layouts" => $mainBenefitsEn,
                "tag" => 'main-benefit',
                'lang' => 'en',
            ],
            [
                "title" => "تعليم الروبوتات",
                "description" => "<p>اكتشف القوة التحويلية لتعليم الروبوتات في تشكيل مستقبل الأطفال من خلال تزويدهم بالمهارات الأساسية، وتمكين الفتيات في العلوم والتكنولوجيا والهندسة والرياضيات، وإعدادهم لفرص وظيفية مربحة، وتقديم تجربة تعليمية جذابة وممتعة. اكتشف كيف أن دورات الروبوتات لا تتعلق فقط ببناء الروبوتات، بل أيضًا ببناء عقول شابة واثقة ومبدعة ومبتكرة ومستعدة لمواجهة تحديات الغد.</p>",
                "active" => 1,
                "count_list" => 5,
                "layouts" => $mainBenefitsAr,
                "tag" => 'main-benefit',
                'lang' => 'ar',
            ],
        ];

        foreach ($groups as $group) {
            $lg = LayoutGroup::create([
                "title" => $group["title"],
                "is_active" => 1,
                "tag" => $group["tag"] ?? "",
                "lang" => $group["lang"] ?? "",
                "count_list" => $group["count_list"],
                'description' => $group['description'] ?? "",
            ]);
            $this->createLayoutWithSubLayouts($group['layouts'], $lg);
        }
    }

    /**
     * @return array[]
     */
    public function mainMenu()
    {
        return [
            [
                'title' => "صفحه اصلی",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "دوره های آموزشی",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/pages/courses-fa'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "فروشگاه",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/pages/shop-fa'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "اخبار",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/news'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "مقالات",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/articles'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "درباره ما",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/about-us'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "تماس با ما",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/contact-us'],
                'tag' => 'main-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function mainMenuEn()
    {
        return [
            [
                'title' => "Home",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Courses",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/pages/courses'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Portfolios",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/pages/portfolios'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Shop",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/pages/shop'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "News",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/news'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "About Us",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/about-us'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Contact Us",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/contact-us'],
                'tag' => 'main-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function mainMenuAr()
    {
        return [
            [
                'title' => "الصفحة الرئيسية",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar'],
                'tag' => 'main-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "الدورات",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/pages/courses-ar'],
                'tag' => 'main-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "محل",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/pages/shop-ar'],
                'tag' => 'main-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "أخبار",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/news'],
                'tag' => 'main-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "معلومات عنا",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/about-us'],
                'tag' => 'main-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "اتصل بنا",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/contact-us'],
                'tag' => 'main-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function footerMenu()
    {
        return [
            [
                'title' => "صفحه اصلی",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa'],
                'tag' => 'footer-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "دوره های آموزشی",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/pages/courses-fa'],
                'tag' => 'footer-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "فروشگاه",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/pages/shop-fa'],
                'tag' => 'footer-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "همکاری",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/cooperation'],
                'tag' => 'footer-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "نمایندگی ها",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/fa/agencies'],
                'tag' => 'footer-menu',
                'lang' => 'fa',
                'layouts' => [],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function footerMenuEn()
    {
        return [
            [
                'title' => "Home",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en'],
                'tag' => 'footer-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Courses",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/pages/courses'],
                'tag' => 'footer-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Shop",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/pages/shop'],
                'tag' => 'footer-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Cooperation",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/cooperation'],
                'tag' => 'footer-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Agencies",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/en/agencies'],
                'tag' => 'footer-menu',
                'lang' => 'en',
                'layouts' => [],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function footerMenuAr()
    {
        return [
            [
                'title' => "الصفحة الرئيسية",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar'],
                'tag' => 'footer-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "الدورات",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/pages/courses-ar'],
                'tag' => 'footer-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "محل",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/pages/shop-ar'],
                'tag' => 'footer-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "تعاون",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/cooperation'],
                'tag' => 'footer-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "الوكالات",
                'type' => 'menu',
                'data' => ["select_item" => "static", "select_id" => '/ar/agencies'],
                'tag' => 'footer-menu',
                'lang' => 'ar',
                'layouts' => [],
            ],
        ];
    }

    public function mainSlider()
    {
        $img1 = public_path("Impact/assets/img/seed/carousel-1.jpg");
        $img2 = public_path("Impact/assets/img/seed/carousel-2.jpg");
        $img3 = public_path("Impact/assets/img/seed/carousel-3.jpg");
        $fakeUploadedFile1 = $fakeUploadedFile2 = $fakeUploadedFile3 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("carousel-1.jpg", file_get_contents($img1));
        }
        if (file_exists($img2)) {
            $fakeUploadedFile2 = UploadedFile::fake()->createWithContent("carousel-2.jpg", file_get_contents($img2));
        }
        if (file_exists($img3)) {
            $fakeUploadedFile3 = UploadedFile::fake()->createWithContent("carousel-3.jpg", file_get_contents($img3));
        }
        return [
            [
                'title' => "موسسه خلاق سرزمین ربات ها",
                'type' => 'slider',
                'description' => '<p>تخصصی ترین مجموعه طراحی، تولید و آموزش ربات های آموزشی کودکان و نوجوانان</p>',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'fa',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
            [
                'title' => "موسسه خلاق سرزمین ربات ها",
                'type' => 'slider',
                'description' => '<p>تخصصی ترین مجموعه طراحی، تولید و آموزش ربات های آموزشی کودکان و نوجوانان</p>',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'fa',
                'image' => $fakeUploadedFile2,
                'layouts' => [],
            ],
            [
                'title' => "موسسه خلاق سرزمین ربات ها",
                'type' => 'slider',
                'description' => '<p>تخصصی ترین مجموعه طراحی، تولید و آموزش ربات های آموزشی کودکان و نوجوانان</p>',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'fa',
                'image' => $fakeUploadedFile3,
                'layouts' => [],
            ],
        ];
    }

    public function mainSliderEn()
    {
        $img1 = public_path("Impact/assets/img/seed/carousel-1.jpg");
        $img2 = public_path("Impact/assets/img/seed/carousel-2.jpg");
        $img3 = public_path("Impact/assets/img/seed/carousel-3.jpg");
        $fakeUploadedFile1 = $fakeUploadedFile2 = $fakeUploadedFile3 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("carousel-1.jpg", file_get_contents($img1));
        }
        if (file_exists($img2)) {
            $fakeUploadedFile2 = UploadedFile::fake()->createWithContent("carousel-2.jpg", file_get_contents($img2));
        }
        if (file_exists($img3)) {
            $fakeUploadedFile3 = UploadedFile::fake()->createWithContent("carousel-3.jpg", file_get_contents($img3));
        }
        return [
            [
                'title' => "Creative Institute of the Land of Robots",
                'description' => "<p>The most specialized collection of design, production and training of educational robots for children and teenagers</p>",
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'en',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
            [
                'title' => "Creative Institute of the Land of Robots",
                'description' => "<p>The most specialized collection of design, production and training of educational robots for children and teenagers</p>",
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'en',
                'image' => $fakeUploadedFile2,
                'layouts' => [],
            ],
            [
                'title' => "Creative Institute of the Land of Robots",
                'description' => "<p>The most specialized collection of design, production and training of educational robots for children and teenagers</p>",
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'en',
                'image' => $fakeUploadedFile3,
                'layouts' => [],
            ],
        ];
    }

    public function mainSliderAr()
    {
        $img1 = public_path("Impact/assets/img/seed/carousel-1.jpg");
        $img2 = public_path("Impact/assets/img/seed/carousel-2.jpg");
        $img3 = public_path("Impact/assets/img/seed/carousel-3.jpg");
        $fakeUploadedFile1 = $fakeUploadedFile2 = $fakeUploadedFile3 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("carousel-1.jpg", file_get_contents($img1));
        }
        if (file_exists($img2)) {
            $fakeUploadedFile2 = UploadedFile::fake()->createWithContent("carousel-2.jpg", file_get_contents($img2));
        }
        if (file_exists($img3)) {
            $fakeUploadedFile3 = UploadedFile::fake()->createWithContent("carousel-3.jpg", file_get_contents($img3));
        }
        return [
            [
                'title' => "المعهد الإبداعي لأرض الروبوتات",
                'description' => "<p>المجموعة الأكثر تخصصًا في تصميم وإنتاج وتدريب الروبوتات التعليمية للأطفال والمراهقين</p>",
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'en',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
            [
                'title' => "المعهد الإبداعي لأرض الروبوتات",
                'description' => "<p>المجموعة الأكثر تخصصًا في تصميم وإنتاج وتدريب الروبوتات التعليمية للأطفال والمراهقين</p>",
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'en',
                'image' => $fakeUploadedFile2,
                'layouts' => [],
            ],
            [
                'title' => "المعهد الإبداعي لأرض الروبوتات",
                'description' => "<p>المجموعة الأكثر تخصصًا في تصميم وإنتاج وتدريب الروبوتات التعليمية للأطفال والمراهقين</p>",
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '#about'],
                'tag' => 'main-slider',
                'lang' => 'en',
                'image' => $fakeUploadedFile3,
                'layouts' => [],
            ],
        ];
    }

    public function mainNews()
    {
        return [
            [
                'title' => "اخبار 1",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '11'],
                'tag' => 'main-news',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "اخبار 2",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '12'],
                'tag' => 'main-news',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "اخبار 3",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '13'],
                'tag' => 'main-news',
                'lang' => 'fa',
                'layouts' => [],
            ],
        ];
    }

    public function mainNewsEn()
    {
        return [
            [
                'title' => "news 1",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '1'],
                'tag' => 'main-news',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "news 2",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '2'],
                'tag' => 'main-news',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "news 3",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '3'],
                'tag' => 'main-news',
                'lang' => 'en',
                'layouts' => [],
            ],
        ];
    }

    public function mainNewsAr()
    {
        return [
            [
                'title' => "news 1",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '1'],
                'tag' => 'main-news',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "news 2",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '2'],
                'tag' => 'main-news',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "news 3",
                'type' => 'article',
                'data' => ["select_item" => "select", "select_id" => '3'],
                'tag' => 'main-news',
                'lang' => 'ar',
                'layouts' => [],
            ],
        ];
    }

    public function homeAbout()
    {
        $img1 = public_path("Impact/assets/img/about-2.jpg");
        $fakeUploadedFile1 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("about-2", file_get_contents($img1));
        }
        return [
            [
                'title' => 'ستون اول',
                'description' => '
                        <h3>آموزش صحیح کودکان و نوجوانان امروز، پلی است به سوی فردایی بهتر</h3>
                        <img src="/Impact/assets/img/seed/1.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>سرزمین ربات ها از سال91 فعالیت خود را در زمینه‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌ی آموزش رباتیک آغاز کرد و از سال 94 به دلیل وسعت فعالیت‌های آموزشی و پیشرفت در گستره‌‌‌های پژوهشی و تولیدی با عنوان سرزمین ربات‌ها به صورت موسسه و ارائه نمایندگی و مراکز آموزشی به فعالیت خود ادامه می‌دهد</p>
                        <p>مدیریت مجموعه آموزشی سرزمین ربات ها آقای مهندس داود صفیری کارآفرین در حوزه آموزش رباتیک به دلیل احساس نیاز کشور در زمینه تامین ربات های آموزشی و عدم تنوع بازار در تهیه ربات ها،  زمینه را جهت پژوهش و کار تحقیقاتی فراهم کرده و از جوانان فعال و جویای کار دعوت کرده تا در امر آموزش و پژوهش وارد عرصه رباتیک شوند .در حال حاضر در حال خدمت رسانی در عرصه رباتیک می باشند و تربیت مربیان رباتیک –مکانیک–الکترونیک وبرنامه نویسی- نیروی فنی و پژوهشی - نیروهای تبلیغاتی و مشاور و نیروهای تولید را در دستور کار خود دارد.شعار و هدف ما این است که کالای خوب ایرانی در جهت تقویت رشد و خلاقیت و مهارت آموزی کودک و نوجوان ایرانی ارائه گردد.</p>
                    ',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-about',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => 'ستون دوم',
                'description' => '
                        <p class="fst-italic">
                            سرزمین ربات ها با هدف ارتقاء سطح آموزش و توسعه مهارت‌های کودکان و نوجوانان ایرانی، به عنوان یک مرکز آموزشی پیشرو در زمینه رباتیک شناخته شده است. این مرکز با استفاده از تکنولوژی‌های نوین و روش‌های آموزشی مدرن، به کودکان و نوجوانان امکان می‌دهد تا مهارت‌های لازم برای طراحی، ساخت و برنامه‌نویسی ربات‌ها را فرا بگیرند. 
                        </p>
                        <ul>
                            <li> ارائه دوره‌های آموزشی حضوری و آنلاین در حوزه رباتیک</li>
                            <li> ارتقاء مهارت‌های فنی و خلاقیت کودکان و نوجوانان</li>
                            <li> تولید و توسعه تجهیزات و ربات‌های آموزشی مدرن</li>
                        </ul>
                        <p>
                             اینجا به عنوان یک محیط آموزشی خلاق و پرانرژی، جوانان را به کارآفرینی و تحقیقات در حوزه رباتیک تشویق می‌کند. این مرکز با تولید ربات‌های آموزشی با کیفیت، به دنبال تقویت خلاقیت و مهارت‌های کودکان و نوجوانان ایرانی است و به عنوان یک پل ارتباطی بین آموزش امروز و فردای بهتر برای جامعه ما عمل می‌کند.
                        </p>
                    ',
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => 'https://www.youtube.com/watch?v=LXb3EKWsInQ'],
                'tag' => 'main-about',
                'lang' => 'fa',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
        ];
    }

    public function homeAboutEn()
    {
        $img1 = public_path("Impact/assets/img/about-2.jpg");
        $fakeUploadedFile1 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("about-2", file_get_contents($img1));
        }
        return [
            [
                'title' => 'First Column',
                'type' => 'about',
                'description' => '
                        <h3>Correct education of today\'s children and teenagers is a bridge to a better tomorrow</h3>
                        <img src="/Impact/assets/img/seed/1.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>The Land of Robots started its activity in the field of robotics education in 1991 and since 1994, due to the scope of educational activities and progress in research and production fields, it continues to operate under the title of Land of Robots in the form of an institution and providing representation and educational centers.</p>
                        <p>The management of the educational complex of the land of robots, Mr. Engineer Daoud Safiri, an entrepreneur in the field of robotics education, due to the need of the country in the field of providing educational robots and the lack of market diversity in the provision of robots, has provided the ground for research and research work, and from active and inquisitive young people. Work has invited them to enter the field of robotics in the field of education and research. Currently, they are serving in the field of robotics and training robotics trainers - mechanics - electronics and programming - technical and research forces - advertising and consultant forces and production forces. It is on its agenda. Our slogan and goal is to provide good Iranian goods to strengthen the growth, creativity and skill training of Iranian children and teenagers.</p>
                    ',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-about',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => 'Second Column',
                'type' => 'about',
                'description' => '
                        <p class="fst-italic">
                            The Land of Robots is known as a leading educational center in the field of robotics with the aim of improving the level of education and developing the skills of Iranian children and teenagers. Using new technologies and modern teaching methods, this center allows children and teenagers to learn the necessary skills to design, build and program robots.
                        </p>
                        <ul>
                            <li> Providing face-to-face and online training courses in the field of robotics</li>
                            <li> Improving technical skills and creativity of children and teenagers</li>
                            <li> Production and development of modern educational equipment and robots</li>
                        </ul>
                        <p>
                           Here, as a creative and energetic educational environment, it encourages young people to entrepreneurship and research in the field of robotics. By producing quality educational robots, this center seeks to strengthen the creativity and skills of Iranian children and teenagers and acts as a bridge between today\'s education and a better tomorrow for our society.
                        </p>
                    ',
                'data' => ["select_item" => "static", "select_id" => 'https://www.youtube.com/watch?v=LXb3EKWsInQ'],
                'tag' => 'main-about',
                'image' => $fakeUploadedFile1,
                'lang' => 'en',
                'layouts' => [],
            ],
            
        ];
    }

    public function homeAboutAr()
    {
        $img1 = public_path("Impact/assets/img/about-2.jpg");
        $fakeUploadedFile1 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("about-2", file_get_contents($img1));
        }
        return [
            [
                'title' => 'First Column',
                'type' => 'about',
                'description' => '
                        <h3>التعليم الصحيح لأطفال ومراهقي اليوم هو جسر إلى غد أفضل</h3>
                        <img src="/Impact/assets/img/seed/1.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>بدأت أرض الروبوتات نشاطها في مجال تعليم الروبوتات في عام 1991 ومنذ عام 1994، ونظرًا لنطاق الأنشطة التعليمية والتقدم في مجالات البحث والإنتاج، فإنها لا تزال تعمل تحت عنوان أرض الروبوتات في شكل المؤسسة وتوفير التمثيل والمراكز التعليمية.</p>
                        <p>إدارة المجمع التعليمي لأرض الروبوتات السيد المهندس داود سفيري رائد أعمال في مجال تعليم الروبوتات وذلك لحاجة البلاد في مجال توفير الروبوتات التعليمية وعدم تنوع السوق في توفيرها الروبوتات، وفرت الأرضية للبحث والعمل البحثي، ومن الشباب النشطين والفضوليين، دعاهم العمل إلى دخول مجال الروبوتات في مجال التعليم والبحث تدريب مدربي الروبوتات - الميكانيكا - الإلكترونيات والبرمجة - القوى الفنية والبحثية - القوى الإعلانية والاستشارية وقوى الإنتاج، شعارنا وهدفنا هو توفير سلع إيرانية جيدة لتعزيز النمو والإبداع والتدريب على المهارات الإيرانية الأطفال والمراهقين.</p>
                    ',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-about',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => 'Second Column',
                'type' => 'about',
                'description' => '
                        <p class="fst-italic">
                            تُعرف أرض الروبوتات بأنها مركز تعليمي رائد في مجال الروبوتات بهدف تحسين مستوى التعليم وتطوير مهارات الأطفال والمراهقين الإيرانيين. باستخدام التقنيات الجديدة وطرق التدريس الحديثة، يتيح هذا المركز للأطفال والمراهقين تعلم المهارات اللازمة لتصميم وبناء وبرمجة الروبوتات.
                        </p>
                        <ul>
                            <li> تقديم دورات تدريبية وجهاً لوجه وعبر الإنترنت في مجال الروبوتات</li>
                            <li> تحسين المهارات الفنية والإبداعية لدى الأطفال والمراهقين</li>
                            <li> إنتاج وتطوير الأجهزة التعليمية الحديثة والروبوتات</li>
                        </ul>
                        <p>
                            هنا، باعتبارها بيئة تعليمية إبداعية وحيوية، فإنها تشجع الشباب على ريادة الأعمال والبحث في مجال الروبوتات. ومن خلال إنتاج روبوتات تعليمية عالية الجودة، يسعى هذا المركز إلى تعزيز الإبداع والمهارات لدى الأطفال والمراهقين الإيرانيين ويعمل كجسر بين تعليم اليوم وغد أفضل لمجتمعنا.
                        </p>
                    ',
                'data' => ["select_item" => "static", "select_id" => 'https://www.youtube.com/watch?v=LXb3EKWsInQ'],
                'tag' => 'main-about',
                'image' => $fakeUploadedFile1,
                'lang' => 'ar',
                'layouts' => [],
            ],
            
        ];
    }

    public function mainCTA()
    {
        $img1 = public_path("Impact/assets/img/seed/carousel-4.jpg");
        $fakeUploadedFile1 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("carousel-4.jpg", file_get_contents($img1));
        }
        return [
            [
                'title' => "کلاس های رباتیک",
                'description' => '<p>با کلاس های رباتیک جذاب، پتانسیل آنها را باز کنید و آینده آنها را شکل دهید</p>',
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => 'https://www.aparat.com/v/i60dj35', "sub_title" => ""],
                'tag' => 'main-cta',
                'lang' => 'fa',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
        ];
    }

    public function mainCTAEn()
    {
        $img1 = public_path("Impact/assets/img/seed/carousel-4.jpg");
        $fakeUploadedFile1 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("carousel-4.jpg", file_get_contents($img1));
        }
        return [
            [
                'title' => "Robotics Classes",
                'description' => '<p>Unlock Their Potential and Shape Their Future with Engaging Robotics Classes</p>',
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '/en/education', "video_link" => "https://www.aparat.com/v/i60dj35"],
                'tag' => 'main-cta',
                'lang' => 'en',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
        ];
    }

    public function mainCTAAr()
    {
        $img1 = public_path("Impact/assets/img/seed/carousel-4.jpg");
        $fakeUploadedFile1 = null;
        if (file_exists($img1)) {
            $fakeUploadedFile1 = UploadedFile::fake()->createWithContent("carousel-4.jpg", file_get_contents($img1));
        }
        return [
            [
                'title' => "دروس الروبوتات",
                'description' => '<p>أطلق العنان لإمكاناتهم وشكل مستقبلهم من خلال دروس الروبوتات الجذابة</p>',
                'type' => 'slider',
                'data' => ["select_item" => "static", "select_id" => '/en/education', "video_link" => "https://www.aparat.com/v/i60dj35"],
                'tag' => 'main-cta',
                'lang' => 'ar',
                'image' => $fakeUploadedFile1,
                'layouts' => [],
            ],
        ];
    }

    public function services()
    {
        return [
            [
                'title' => "آموزش رباتیک",
                'description' => '<p>الهام بخشیدن به ذهن های جوان با آموزش عملی روباتیک و برنامه نویسی.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'bi bi-activity',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "کارگاه های آموزشی STEM",
                'description' => '<p>برانگیختن کنجکاوی در علوم، فناوری، مهندسی و ریاضی از طریق جلسات جذاب.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'bi bi-broadcast',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "کلاس های کدنویسی",
                'description' => '<p>توسعه مهارت های کدنویسی و تفکر محاسباتی به روشی سرگرم کننده و تعاملی.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'bi bi-easel',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "هنرهای خلاق",
                'description' => '<p>تشویق به ابراز وجود و خلاقیت از طریق نقاشی، طراحی، موسیقی و تئاتر.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'bi bi-bounding-box-circles',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "غنی سازی تحصیلی",
                'description' => '<p>ارائه آموزش های شخصی برای کمک به دانش آموزان در تحصیلات خود.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'bi bi-calendar4-week',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "گسترش رهبری",
                'description' => '<p>توانمندسازی کودکان با مهارت های ضروری زندگی از طریق کارگاه های تعاملی.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'bi bi-chat-square-text',
                'lang' => 'fa',
                'layouts' => [],
            ],
        ];
    }

    public function servicesEn()
    {
        return [
            [
                'title' => "Robotics Education",
                'description' => "<p>Inspiring young minds with hands-on robotics and programming lessons.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-school',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "STEM Workshops",
                'description' => "<p>Igniting curiosity in science, technology, engineering, and math through engaging sessions.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-microscope',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Coding Classes",
                'description' => "<p>Developing coding skills and computational thinking in a fun and interactive way.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-code',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Creative Arts",
                'description' => "<p>Encouraging self-expression and creativity through painting, drawing, music, and theater.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-artboard',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Academic Enrichment",
                'description' => "<p>Providing personalized tutoring to help students excel in their studies.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-bulb',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Leadership Development",
                'description' => "<p>Empowering children with essential life skills through interactive workshops.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-stairs-up',
                'lang' => 'en',
                'layouts' => [],
            ],
        ];
    }

    public function servicesAr()
    {
        return [
            [
                'title' => "تعليم الروبوتات",
                'description' => "<p>إلهام العقول الشابة من خلال التدريب العملي على الروبوتات ودروس البرمجة.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-school',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "ورش عمل العلوم والتكنولوجيا والهندسة والرياضيات",
                'description' => "<p>إثارة الفضول في العلوم والتكنولوجيا والهندسة والرياضيات من خلال جلسات تفاعلية.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-microscope',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "دروس الترميز",
                'description' => "<p>تنمية مهارات البرمجة والتفكير الحسابي بطريقة ممتعة وتفاعلية.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-code',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "فنون ابداعية",
                'description' => "<p>تشجيع التعبير عن الذات والإبداع من خلال الرسم والرسم والموسيقى والمسرح.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-artboard',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "الإثراء الأكاديمي",
                'description' => "<p>توفير دروس خصوصية لمساعدة الطلاب على التفوق في دراستهم.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-bulb',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "تنمية المهارات القيادية",
                'description' => "<p>تمكين الأطفال بالمهارات الحياتية الأساسية من خلال ورش عمل تفاعلية.</p>",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'services',
                'icon' => 'ti ti-stairs-up',
                'lang' => 'ar',
                'layouts' => [],
            ],
        ];
    }

    public function socialMedia()
    {
        return [
            [
                'title' => "Twitter",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-twitter',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "Facebook",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-facebook',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "Instagram",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-instagram',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "Telegram",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-telegram',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "Linkedin",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-linkedin',
                'lang' => 'fa',
                'layouts' => [],
            ],
        ]; 
    }

    public function socialMediaEn()
    {
        return [
            [
                'title' => "Twitter",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-twitter',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Facebook",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-facebook',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Instagram",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-instagram',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Telegram",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-telegram',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Linkedin",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-linkedin',
                'lang' => 'en',
                'layouts' => [],
            ],
        ]; 
    }

    public function socialMediaAr()
    {
        return [
            [
                'title' => "Twitter",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-twitter',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "Facebook",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-facebook',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "Instagram",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-instagram',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "Telegram",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-telegram',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "Linkedin",
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'social-media',
                'icon' => 'bi bi-linkedin',
                'lang' => 'ar',
                'layouts' => [],
            ],
        ]; 
    }

    public function mainBenefits()
    {
        return [
            [
                'title' => "باز کردن پتانسیل: مزایای ثبت نام فرزندتان در دوره های رباتیک",
                'description' => '<p>کشف کنید که چگونه دوره های رباتیک می تواند به پرورش خلاقیت، مهارت های حل مسئله و تفکر انتقادی در کودکان کمک کند. از ساخت روبات‌ها تا برنامه‌نویسی آن‌ها، فرزند شما مهارت‌های ارزشمند STEM را توسعه می‌دهد که برای تمام عمر او مفید خواهد بود.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "ساخت رهبران آینده: چرا آموزش رباتیک برای کودکان ضروری است؟",
                'description' => '<p>با آموزش مهارت‌های کار گروهی، ارتباطی و رهبری، راه‌هایی را که دوره‌های رباتیک می‌توانند کودکان را برای آینده آماده کنند، کشف کنید. با ثبت نام در دوره های رباتیک، کودکان می توانند در دنیای فناوری محور به مزیت رقابتی دست یابند و به مبتکران فردا تبدیل شوند.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "توانمندسازی ذهن ها: نقش آموزش رباتیک در تشویق دختران در STEM",
                'description' => '<p>بیاموزید که چگونه دوره‌های رباتیک می‌توانند با ارائه یک محیط یادگیری حمایتی و فراگیر، دختران را برای دنبال کردن مشاغل در زمینه‌های STEM الهام بخش و توانمند کنند. تأثیر آموزش رباتیک بر شکستن کلیشه های جنسیتی و پرورش تنوع در فناوری را کشف کنید.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "از کلاس درس تا شغل: چگونه دوره های رباتیک کودکان را برای فرصت های شغلی آینده آماده می کند",
                'description' => '<p>کاوش در راه هایی که آموزش رباتیک می تواند کودکان را با مهارت ها و دانش مورد نیاز برای مشاغل آینده در زمینه هایی مانند مهندسی، علوم کامپیوتر و فناوری مجهز کند. کشف کنید که قرار گرفتن زودهنگام در معرض رباتیک چگونه می تواند درهایی را به روی فرصت های شغلی هیجان انگیز در صنعت فناوری در حال رشد باز کند.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'fa',
                'layouts' => [],
            ],
            [
                'title' => "سرگرمی و یادگیری ترکیبی: مزایای جذاب دوره های رباتیک برای کودکان",
                'description' => '<p>به دنیای هیجان انگیز آموزش روباتیک و نحوه ارائه روشی سرگرم کننده و عملی به کودکان برای یادگیری علوم، فناوری، مهندسی و ریاضیات بپردازید. از ساخت ربات‌ها گرفته تا شرکت در مسابقات، کودکان می‌توانند لذت یادگیری را تجربه کنند و در عین حال مهارت‌های ضروری را برای آینده توسعه دهند.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'fa',
                'layouts' => [],
            ],
        ];
    }

    public function mainBenefitsEn()
    {
        return [
            [
                'title' => "Unlocking Potential: The Benefits of Enrolling Your Child in Robotics Courses",
                'description' => '<p>Discover how robotics courses can help foster creativity, problem-solving skills, and critical thinking in children. From building robots to programming them, your child will develop valuable STEM skills that will benefit them for a lifetime.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Building Future Leaders: Why Robotics Education is Essential for Children",
                'description' => '<p>Explore the ways in which robotics courses can prepare children for the future by teaching them teamwork, communication, and leadership skills. By enrolling in robotics courses, children can gain a competitive edge in a technology-driven world and become the innovators of tomorrow.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Empowering Minds: The Role of Robotics Education in Encouraging Girls in STEM",
                'description' => '<p>Learn how robotics courses can inspire and empower girls to pursue careers in STEM fields by providing a supportive and inclusive learning environment. Discover the impact of robotics education on breaking gender stereotypes and fostering diversity in technology.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "From Classroom to Career: How Robotics Courses Prepare Children for Future Job Opportunities",
                'description' => '<p>Explore the ways in which robotics education can equip children with the skills and knowledge needed for future careers in fields such as engineering, computer science, and technology. Discover how early exposure to robotics can open doors to exciting job opportunities in the fast-growing tech industry.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'en',
                'layouts' => [],
            ],
            [
                'title' => "Fun and Learning Combined: The Engaging Benefits of Robotics Courses for Children",
                'description' => '<p>Delve into the exciting world of robotics education and how it offers children a fun and hands-on way to learn about science, technology, engineering, and math. From building robots to participating in competitions, children can experience the joy of learning while developing essential skills for the future.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'en',
                'layouts' => [],
            ],
        ];
    }

    public function mainBenefitsAr()
    {
        return [
            [
                'title' => "إطلاق الإمكانات: فوائد تسجيل طفلك في دورات الروبوتات",
                'description' => '<p>اكتشف كيف يمكن لدورات الروبوتات أن تساعد في تعزيز الإبداع ومهارات حل المشكلات والتفكير النقدي لدى الأطفال. من بناء الروبوتات إلى برمجتها، سيطور طفلك مهارات العلوم والتكنولوجيا والهندسة والرياضيات القيمة التي ستفيده مدى الحياة.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "بناء قادة المستقبل: لماذا يعد تعليم الروبوتات ضروريًا للأطفال",
                'description' => '<p>استكشف الطرق التي يمكن بها لدورات الروبوتات إعداد الأطفال للمستقبل من خلال تعليمهم مهارات العمل الجماعي والتواصل والقيادة. ومن خلال التسجيل في دورات الروبوتات، يمكن للأطفال اكتساب ميزة تنافسية في عالم تقوده التكنولوجيا ويصبحوا مبتكري الغد.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "تمكين العقول: دور تعليم الروبوتات في تشجيع الفتيات في مجال العلوم والتكنولوجيا والهندسة والرياضيات",
                'description' => '<p>تعرف على كيف يمكن لدورات الروبوتات أن تلهم الفتيات وتمكنهن من ممارسة وظائف في مجالات العلوم والتكنولوجيا والهندسة والرياضيات (STEM) من خلال توفير بيئة تعليمية داعمة وشاملة. اكتشف تأثير تعليم الروبوتات في كسر الصور النمطية بين الجنسين وتعزيز التنوع في التكنولوجيا.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "من الفصل الدراسي إلى الحياة المهنية: كيف تقوم دورات الروبوتات بإعداد الأطفال لفرص العمل المستقبلية",
                'description' => '<p>استكشف الطرق التي يمكن من خلالها لتعليم الروبوتات أن يزود الأطفال بالمهارات والمعرفة اللازمة للمهن المستقبلية في مجالات مثل الهندسة وعلوم الكمبيوتر والتكنولوجيا. اكتشف كيف يمكن للتعرض المبكر للروبوتات أن يفتح الأبواب أمام فرص عمل مثيرة في صناعة التكنولوجيا سريعة النمو.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'ar',
                'layouts' => [],
            ],
            [
                'title' => "الجمع بين المرح والتعلم: الفوائد الجذابة لدورات الروبوتات للأطفال",
                'description' => '<p>انغمس في عالم تعليم الروبوتات المثير وكيف أنه يوفر للأطفال طريقة ممتعة وعملية للتعرف على العلوم والتكنولوجيا والهندسة والرياضيات. من بناء الروبوتات إلى المشاركة في المسابقات، يمكن للأطفال تجربة متعة التعلم مع تطوير المهارات الأساسية للمستقبل.</p>',
                'type' => 'slider',
                'data' => ["select_item" => "none", "select_id" => ''],
                'tag' => 'main-benefit',
                'lang' => 'ar',
                'layouts' => [],
            ],
        ];
    }

    public function createLayoutWithSubLayouts($layouts, $layoutGroup, $layoutParent = null)
    {
        foreach ($layouts as $key => $layout) {
            $parentLayout = $this->createLayout($layout, $layoutGroup, $key, $layoutParent);
            if($layout['image'] ?? false)
                $image =  $this->createFakeImage($layout['image'], $parentLayout);
            if (count($layout['layouts'] ?? []))
                $this->createLayoutWithSubLayouts($layout['layouts'], $layoutGroup, $parentLayout);
        }
    }

    public function createLayout($layout, $layoutGroup, $key, $layoutParent = null)
    {
        return Layout::create([
            'layout_group_id' => $layoutGroup?->id,
            "title" => $layout["title"],
            'description' => $layout['description'] ?? null,
            'type' => $layout['type'] ?? null,
            'lang' => $layout['lang'] ?? null,
            'tag' => $layout['tag'] ?? null,
            'data' => $layout["data"],
            'icon' => $layout["icon"] ?? null,
            'start_date_release' => $layout["start_date_release"] ?? null,
            'end_date_release' => $layout["end_date_release"] ?? null,
            'release_type' => EnumLayoutReleaseType::RELEASE,
            'priority' => $key,
            'is_active' => 1,
            'parent_id' => $layoutParent?->id,
            'count_list' => $layout['count_list'] ?? 10,
        ]);
    }
}
