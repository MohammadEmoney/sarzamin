<?php

namespace Database\Seeders;

use App\Enums\EnumCommentStatus;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('comments')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $dataEn = [
            [
                'title' => 'Et rerum totam nisi',
                'message' => 'Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta. Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.'
            ],
            [
                'title' => 'Ipsam tempora',
                'message' => 'Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.'
            ],
            [
                'title' => 'Enim ipsa eum',
                'message' => 'Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae. Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat. Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.'
            ],
            [
                'title' => 'Et dignissimos',
                'message' => 'Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.'
            ],
            [
                'title' => 'Distinctio nesciunt',
                'message' => 'Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at. Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.'
            ],
            [
                'title' => 'Dolorem atque aut',
                'message' => 'Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.'
            ],
            [
                'title' => 'Multiple grouping',
                'message' => 'Multiple grouping criteria may be passed as an array. Each array element will be applied to the corresponding level within a multi-dimensional array:'
            ],
            [
                'title' => 'The join method',
                'message' => 'The join method joins the collection\'s values with a string. Using this method\'s second argument, you may also specify how the final element should be appended to the string'
            ],
            [
                'title' => 'The last',
                'message' => 'The last method returns the last element in the collection that passes a given truth test'
            ],
            [
                'title' => 'Laravel Pennant',
                'message' => 'Laravel Pennant is a simple and light-weight feature flag package - without the cruft. Feature flags enable you to incrementally roll out new application features with confidence, A/B test new interface designs, complement a trunk-based development strategy, and much more.'
            ],
            [
                'title' => 'publishing Pennant',
                'message' => 'After publishing Pennant\'s assets, its configuration file will be located at config/pennant.php. This configuration file allows you to specify the default storage mechanism that will be used by Pennant to store resolved feature flag values.

                    Pennant includes support for storing resolved feature flag values in an in-memory array via the array driver. Or, Pennant can store resolved feature flag values persistently in a relational database via the database driver, which is the default storage mechanism used by Pennant.'
            ],
            [
                'title' => 'To define a feature',
                'message' => 'To define a feature, you may use the define method offered by the Feature facade. You will need to provide a name for the feature, as well as a closure that will be invoked to resolve the feature\'s initial value.'
            ],
            [
                'title' => 'For convenience',
                'message' => 'The first time the new-api feature is checked for a given user, the result of the closure will be stored by the storage driver. The next time the feature is checked against the same user, the value will be retrieved from storage and the closure will not be invoked.'
            ],
            [
                'title' => 'Class Based Features',
                'message' => 'Pennant also allows you to define class based features. Unlike closure based feature definitions, there is no need to register a class based feature in a service provider. To create a class based feature, you may invoke the pennant:feature Artisan command. By default the feature class will be placed in your application'
            ],
            [
                'title' => 'Laravel Dusk',
                'message' => 'Laravel Dusk provides an expressive, easy-to-use browser automation and testing API. By default, Dusk does not require you to install JDK or Selenium on your local computer. Instead, Dusk uses a standalone ChromeDriver installation. However, you are free to utilize any other Selenium compatible driver you wish.'
            ],
            [
                'title' => 'registering',
                'message' => 'If you are manually registering Dusk\'s service provider, you should never register it in your production environment, as doing so could lead to arbitrary users being able to authenticate with your application.'
            ],
        ];
        $dataFa = [
            [
                'title' => 'آزمایشی و بی‌معنی',
                'message' => 'لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. '
            ],
            [
                'title' => ' شکل ظاهری',
                'message' => 'لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید'
            ],
            [
                'title' => 'صفحه‌آرایی',
                'message' => 'طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.'
            ],
            [
                'title' => 'طراحی گرافیک',
                'message' => 'لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.'
            ],
            [
                'title' => ' غیر حضوری',
                'message' => 'ارائه محصولات و خدمات متمایز و منحصر به فرد در محیطی جذاب، شاداب و دوستانه برای کارکنان و دانش آموزان در گروه های سنی مختلف آموزشی متفاوت، هدفدار، مبتی بر بهترین متدهای آموزشی دنیا و کارامد در ایران عزیز ما، خروجی مدار و تخصصی و گام به گام در چهار گروه سنی ۴ سال تا ۶، ۷ تا ۹ ، ۱۰ تا ۱۲ و ۱۲ سال به بالا، با سه محور آموزش حضوری، نیمه حضوری و غیر حضوری'
            ],
            [
                'title' => 'میراثی ارزشمند',
                'message' => 'ما با تمام توان می کوشیم برای جوانان کارآفرینی کنیم و فرصت های شغلی خوبی فراهم آوریم و میراثی ارزشمند برای ایران عزیزمان به جا بگذاریم.
                    ما می خواهیم ایران را بهتر از آنگونه هست، بسازیم با یاری خداوند و کمک شما دوستان عزیز'
            ],
            [
                'title' => ' فقط حرکت کنید',
                'message' => 'دوره های آموزش نمایندگی، جامع اما فشرده، بدون فوت وقت و کمترین هزینه،  با شرایط مطلوب از ما برای شهر خود نمایندگی بگیرید، ما راه را برایتان هموار کردیم فقط حرکت کنید و کسب درآمد کنید !'
            ],
            [
                'title' => 'کد نویسی رباتیک',
                'message' => 'از ساده ترین زبان برنامه نویسی بدون کد ( اسکرچ ) تا کاربردی ترین و حرفه ای ترین  زباتهای کد نویسی رباتیک، آردوینو، ++C ، پایتون و … در مجموعه آموزشی سرزمین رباتها'
            ],
            [
                'title' => 'رباتیک آموزشی',
                'message' => 'باعث افتخار است که موسسه خلاق سرزمین رباتها ، طراح و تولید کننده متنوع ترین و با کیفیت ترین محصولات رباتیک آموزشی کشور می باشد.'
            ],
            [
                'title' => 'مجرب ترین مربیان',
                'message' => 'جامع ترین دوره های رباتیک کودک و نوجوان در سراسر کشور بر طبق نقشه راه آموزش رباتیک، توسط مجرب ترین مربیان آموزش رباتیک'
            ],
            [
                'title' => ' رباتیک خارجی',
                'message' => 'به یاری خداوند و تلاشهای بسیار، محصولاتی تولید کردیم که قابلیت رقابت با بهترین محصولات  رباتیک خارجی را دارد'
            ],
            [
                'title' => 'جذاب و سرگرم کننده',
                'message' => 'آموزش محیط برنامه نویسی اسکرچ کودکان و نوجوانان بدون نیاز به نوشتن کد، با محیطی جذاب و سرگرم کننده و در عین حال ساده بر پایه دوره های استاندارد STEAM و سرزمین ربات ها'
            ],
            [
                'title' => 'کاملترین دوره',
                'message' => 'پلتفرم سخت‌افزاری و نرم‌افزاری متن‌باز است، جهت طراحی و ساخت سریع و آسان وسایل تعاملی،کاملترین دوره به همراه پروژه های کاربردی و جذاب'
            ],
            [
                'title' => 'اسباب بازی‌های رباتیکی',
                'message' => 'اسباب بازی های رباتیک رباتیک یکی از علوم جذاب و پرکاربرد است که می‌تواند برای کودکان و نوجوانان فرصت‌های زیادی برای یادگیری، خلاقیت و سرگرمی ایجاد کند. اسباب بازی‌های رباتیکی نیز از این فرصت‌ها بهره می‌برند و با ارائه مجموعه‌ای'
            ],
            [
                'title' => 'تکنولوژی توسط بشر',
                'message' => 'مسابقات رباتیک چیه و با چه هدفی انجام میشه؟ حتما تا به حال اسم ربات و یا مسابقات رباتیک به گوش‌تون خورده. یکی از چیزهایی که با پیشرفت علم و تکنولوژی توسط بشر ساخته شده، ربات بوده. بدون شک، میشه'
            ],
            [
                'title' => 'اسباب بازی‌ها',
                'message' => 'اسباب بازی‌های رباتیکی که در آموزشگاه رباتیک آریانا به کار می‌روند، شامل مجموعه‌های مختلفی از قطعات، بردهای الکترونیکی، سنسورها، موتورها، برنامه‌ها و فعالیت‌های آموزشی هستند. این اسباب بازی‌ها بر اساس سطح سنی و مهارتی کودکان و نوجوانان طبقه‌بندی شده‌اند و از ساده تا پیچیده متغیرند. برخی از این اسباب بازی‌ها عبارتند از'
            ],
        ];
        $dataAr = [
            [
                'title' => 'آزمایشی و بی‌معنی',
                'message' => 'لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. '
            ],
            [
                'title' => ' شکل ظاهری',
                'message' => 'لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید'
            ],
            [
                'title' => 'صفحه‌آرایی',
                'message' => 'طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.'
            ],
            [
                'title' => 'طراحی گرافیک',
                'message' => 'لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نمایدلورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.'
            ],
            [
                'title' => ' غیر حضوری',
                'message' => 'ارائه محصولات و خدمات متمایز و منحصر به فرد در محیطی جذاب، شاداب و دوستانه برای کارکنان و دانش آموزان در گروه های سنی مختلف آموزشی متفاوت، هدفدار، مبتی بر بهترین متدهای آموزشی دنیا و کارامد در ایران عزیز ما، خروجی مدار و تخصصی و گام به گام در چهار گروه سنی ۴ سال تا ۶، ۷ تا ۹ ، ۱۰ تا ۱۲ و ۱۲ سال به بالا، با سه محور آموزش حضوری، نیمه حضوری و غیر حضوری'
            ],
            [
                'title' => 'میراثی ارزشمند',
                'message' => 'ما با تمام توان می کوشیم برای جوانان کارآفرینی کنیم و فرصت های شغلی خوبی فراهم آوریم و میراثی ارزشمند برای ایران عزیزمان به جا بگذاریم.
                    ما می خواهیم ایران را بهتر از آنگونه هست، بسازیم با یاری خداوند و کمک شما دوستان عزیز'
            ],
            [
                'title' => ' فقط حرکت کنید',
                'message' => 'دورات التمثيل التدريبية، شاملة ولكن مكثفة، دون إضاعة الوقت وبأقل تكلفة، احصل منا على تمثيل لمدينتك بشروط مناسبة، لقد مهدنا لك الطريق، فقط تحرك واكسب المال!'
            ],
            [
                'title' => 'کد نویسی رباتیک',
                'message' => 'من أبسط لغة برمجة بدون تعليمات برمجية (Scratch) إلى برامج برمجة الروبوتات الأكثر عملية واحترافية، مثل Arduino وC++ وPython وما إلى ذلك، في المجموعة التعليمية Robot Land'
            ],
            [
                'title' => 'رباتیک آموزشی',
                'message' => 'إنه لمن دواعي الفخر أن المعهد الإبداعي لأرض الروبوتات هو المصمم والمنتج لمنتجات الروبوتات التعليمية الأكثر تنوعًا وعالية الجودة في البلاد.'
            ],
            [
                'title' => 'مجرب ترین مربیان',
                'message' => 'دورات الروبوتات الأكثر شمولاً للأطفال والمراهقين في جميع أنحاء البلاد وفقًا لخارطة طريق التدريب على الروبوتات، على يد مدربي الروبوتات الأكثر خبرة'
            ],
            [
                'title' => ' رباتیک خارجی',
                'message' => 'لقد أنتجنا بعون الله وجهودنا العديدة منتجات تنافس أفضل منتجات الروبوتات الأجنبية'
            ],
            [
                'title' => 'جذاب و سرگرم کننده',
                'message' => 'تعليم بيئة برمجة الصفر للأطفال والمراهقين دون الحاجة إلى كتابة التعليمات البرمجية، مع بيئة جذابة وممتعة وبسيطة تعتمد على دورات STEAM القياسية وأرض الروبوتات'
            ],
            [
                'title' => 'کاملترین دوره',
                'message' => 'منصة الأجهزة والبرامج مفتوحة المصدر، لتصميم وبناء الأدوات التفاعلية بسرعة وسهولة، الدورة الأكثر اكتمالا إلى جانب المشاريع العملية والجذابة.'
            ],
            [
                'title' => 'اسباب بازی‌های رباتیکی',
                'message' => 'الألعاب الروبوتية يعد علم الروبوتات أحد العلوم الرائعة والمستخدمة على نطاق واسع والتي يمكن أن تخلق العديد من فرص التعلم والإبداع والترفيه للأطفال والمراهقين. تستفيد الألعاب الروبوتية أيضًا من هذه الفرص من خلال تقديم مجموعة'
            ],
            [
                'title' => 'تکنولوژی توسط بشر',
                'message' => 'ما هي المسابقات الروبوتية وما هو الغرض منها؟ لا بد أنك سمعت اسم الروبوت أو المسابقات الروبوتية. من الأشياء التي صنعها الإنسان مع تقدم العلم والتكنولوجيا هو الروبوت. لا شك في ذلك'
            ],
            [
                'title' => 'اسباب بازی‌ها',
                'message' => 'تشتمل الألعاب الروبوتية المستخدمة في مدرسة أريانا للروبوتات على مجموعات مختلفة من الأجزاء واللوحات الإلكترونية وأجهزة الاستشعار والمحركات والبرامج والأنشطة التعليمية. يتم تصنيف هذه الألعاب حسب عمر الأطفال والمراهقين ومستوى مهاراتهم وتتراوح من البسيطة إلى المعقدة. بعض هذه الألعاب تشمل:'
            ],
        ];

        $users = User::pluck('id');
        $postsEn = Post::where('lang', 'en')->pluck('id');
        $postsFa = Post::where('lang', 'fa')->pluck('id');
        $postsAr = Post::where('lang', 'ar')->pluck('id');
        // dd($users->random(), $postsEn->random());
        foreach(range(1,60) as $i)
            $this->createComment(collect($dataEn)->random(), $users, $postsEn);
        foreach(range(1,60) as $i)
            $this->createComment(collect($dataFa)->random(), $users, $postsFa);
        foreach(range(1,60) as $i)
            $this->createComment(collect($dataAr)->random(), $users, $postsAr);

        $query = Comment::query()->where('commentable_id', $postsEn->random());
        $comments = $query->take(4)->get();
        $commentIds = $query->whereNotIn('id', $comments->pluck('id'))->pluck('id'); 
        foreach($comments as $comment)
            $comment->update(['parent_id' => $commentIds->random()]);

        $query = Comment::query()->where('commentable_id', $postsFa->random());
        $comments = $query->take(4)->get();
        $commentIds = $query->whereNotIn('id', $comments->pluck('id'))->pluck('id'); 
        foreach($comments as $comment)
            $comment->update(['parent_id' => $commentIds->random()]);

        $query = Comment::query()->where('commentable_id', $postsAr->random());
        $comments = $query->take(4)->get();
        $commentIds = $query->whereNotIn('id', $comments->pluck('id'))->pluck('id'); 
        foreach($comments as $comment)
            $comment->update(['parent_id' => $commentIds->random()]);
    }

    public function createComment($data, $users, $posts)
    {
        Comment::create([
            'user_id' => $users->random(),
            'title' => $data['title'] ?? null,
            'message' => $data['message'],
            'commentable_type' => Post::class,
            'commentable_id' => $posts->random(),
            'status' => EnumCommentStatus::ALLOWED,
        ]);
    }
}
