<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Traits\MediaTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    use MediaTrait;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $dataEn = [
            [
                'title' => 'Programming Learning',
                'description' => '',
            ],
            [
                'title' => 'Psychological Articles',
                'description' => "Aviation safety is a shared responsibility between pilots, operators and regulators. It is by working together that we are able to identify risks and develop effective mitigation strategies to further improve the safety performance of the aviation system. This library shares IPA's runway safety positions, briefings and guidance,",
            ],
            [
                'title' => 'Home Depot Robots',
                'description' => 'Robots are becoming more readily available to consumers, and that leads to the question of what robots can I buy at Home Depot? Home Depot Robots help with productivity so cover a lot of maintenance use cases within your home,…',
            ],
            [
                'title' => 'Self driving cars',
                'description' => "As more and more self driving cars come to market from companies such as Waymo, Cruise, Tesla and more, it will be important for children to understand how these cars work and why they are safe. This guide provides a…",
            ],
            [
                'title' => 'Robot in industry',
                'description' => 'The realm of robotics has always been a fascinating blend of theory and practice, where the theoretical concepts of algorithms and research meet the practical considerations of productization and deployment. In today’s rapidly evolving landscape, the focus of educational institutions…',
            ],
            [
                'title' => 'Artificial Intelligence (AI)',
                'description' => 'You may have seen Microsoft backed OpenAI Dalle’s ability to generate images from prompts, such as this prompt: “a cat working on a robot in cartoon style”: But how is this possible for ai to understand what we want it…',
            ],
            [
                'title' => 'Mobile Robots',
                'description' => 'Are you in need of an expert witness in the robotics space? With over 2 years of experience working at a mobile robotics company, I know what makes a safe robot. There are multiple steps a robotics company can take…',
            ],
        ];

        $dataFa = [
            [
                'title' => 'یادگیری برنامه نویسی',
                'description' => '',
            ],
            [
                'title' => 'مقالات روانشناسی',
                'description' => "ایمنی هوانوردی یک مسئولیت مشترک بین خلبانان، اپراتورها و تنظیم کنندگان است. با همکاری یکدیگر است که می‌توانیم ریسک‌ها را شناسایی کرده و استراتژی‌های کاهش موثر برای بهبود عملکرد ایمنی سیستم هوانوردی را توسعه دهیم. این کتابخانه موقعیت‌های ایمنی باند، جلسات توجیهی و راهنمایی IPA را به اشتراک می‌گذارد.",
            ],
            [
                'title' => 'ربات انبار خانه',
                'description' => 'روبات ها به راحتی در دسترس مصرف کنندگان قرار می گیرند، و این منجر به این سوال می شود که چه ربات هایی را می توانم در Home Depot خریداری کنم؟ ربات های انبار خانه به بهره وری کمک می کنند، بنابراین بسیاری از موارد استفاده از تعمیر و نگهداری در خانه شما را پوشش می دهد،…',
            ],
            [
                'title' => 'ماشین های خودران',
                'description' => "همانطور که بیشتر و بیشتر اتومبیل های خودران از شرکت هایی مانند Waymo، Cruise، Tesla و غیره وارد بازار می شوند، برای کودکان مهم است که بفهمند این اتومبیل ها چگونه کار می کنند و چرا ایمن هستند. این راهنما یک…",
            ],
            [
                'title' => 'ربات در صنعت',
                'description' => 'قلمرو رباتیک همیشه ترکیبی جذاب از تئوری و عمل بوده است، جایی که مفاهیم نظری الگوریتم‌ها و تحقیقات با ملاحظات عملی تولید و استقرار مطابقت دارند. در چشم انداز به سرعت در حال تحول امروز، تمرکز موسسات آموزشی…',
            ],
            [
                'title' => 'هوش مصنوعی (AI)',
                'description' => 'ممکن است دیده باشید که مایکروسافت از توانایی OpenAI Dalle برای تولید تصاویر از اعلان‌ها پشتیبانی می‌کند، مانند این اعلان: «گربه‌ای که به سبک کارتونی روی ربات کار می‌کند»: اما چگونه این امکان وجود دارد که هوش مصنوعی بفهمد ما چه می‌خواهیم…',
            ],
            [
                'title' => 'ربات های موبایل',
                'description' => 'آیا به یک شاهد متخصص در فضای رباتیک نیاز دارید؟ با بیش از 2 سال تجربه کار در یک شرکت رباتیک متحرک، می دانم که یک ربات ایمن چیست. چندین مرحله وجود دارد که یک شرکت رباتیک می تواند انجام دهد…',
            ],
        ];

        $dataAr = [
            [
                'title' => 'تعلم البرمجة',
                'description' => '',
            ],
            [
                'title' => 'مقالات نفسية',
                'description' => "سلامة الطيران هي مسؤولية مشتركة بين الطيارين والمشغلين والمنظمين. ومن خلال العمل معًا، يمكننا تحديد المخاطر وتطوير استراتيجيات تخفيف فعالة لزيادة تحسين أداء السلامة في نظام الطيران. تشارك هذه المكتبة مواقف IPA الخاصة بسلامة المدرج والإحاطات والإرشادات،",
            ],
            [
                'title' => 'روبوتات هوم ديبوت',
                'description' => 'أصبحت الروبوتات متاحة بسهولة أكبر للمستهلكين، وهذا يؤدي إلى التساؤل حول ما هي الروبوتات التي يمكنني شراؤها من هوم ديبوت؟ تساعد روبوتات Home Depot في زيادة الإنتاجية، لذا فهي تغطي الكثير من حالات استخدام الصيانة داخل منزلك،...',
            ],
            [
                'title' => 'سيارات ذاتية القيادة',
                'description' => "مع ظهور المزيد والمزيد من السيارات ذاتية القيادة في الأسواق من شركات مثل Waymo وCruise وTesla وغيرها، سيكون من المهم للأطفال فهم كيفية عمل هذه السيارات وسبب كونها آمنة. يقدم هذا الدليل…",
            ],
            [
                'title' => 'الروبوت في الصناعة',
                'description' => 'لقد كان عالم الروبوتات دائمًا مزيجًا رائعًا من النظرية والتطبيق، حيث تلتقي المفاهيم النظرية للخوارزميات والبحث مع الاعتبارات العملية للإنتاج والنشر. في المشهد الذي يتطور بسرعة اليوم، تركز المؤسسات التعليمية ...',
            ],
            [
                'title' => 'الذكاء الاصطناعي (AI)',
                'description' => 'ربما تكون قد شاهدت دعم Microsoft لقدرة OpenAI Dalle على إنشاء صور من المطالبات، مثل هذه المطالبة: "قطة تعمل على روبوت بأسلوب رسوم متحركة": ولكن كيف يمكن للذكاء الاصطناعي أن يفهم ما نريده...',
            ],
            [
                'title' => 'الروبوتات المتنقلة',
                'description' => 'هل أنت بحاجة إلى شاهد خبير في مجال الروبوتات؟ مع أكثر من عامين من الخبرة في العمل في شركة روبوتات متنقلة، أعرف ما الذي يجعل الروبوت آمنًا. هناك عدة خطوات يمكن لشركة الروبوتات اتخاذها...',
            ],
        ];

        foreach($dataEn as $key => $data)
            $this->createCategory($data, 'en', $key+7);
        foreach($dataFa as $key => $data)
            $this->createCategory($data, 'fa', $key+7);
        foreach($dataAr as $key => $data)
            $this->createCategory($data, 'ar', $key+7);
    }

    public function createCategory($data, $lang, $i)
    {
        $category =  Category::create([
            'lang' => $lang,
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'description' => $data['description'] ?? null,
        ]);

        // $i = rand(1, 6);
        $img = public_path("Impact/assets/img/blog/$i.jpg");
        if (file_exists($img)) {
            $fakeUploadedFile = UploadedFile::fake()->createWithContent("$i.jpg", file_get_contents($img));
            $image =  $this->createFakeImage($fakeUploadedFile, $category);
        }
    }
}
