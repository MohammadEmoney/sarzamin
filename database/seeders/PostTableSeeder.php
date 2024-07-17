<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Traits\MediaTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    use MediaTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('posts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $postsEn = [
            [
                'title' => 'What is Robotics for Kids & Why is It Important',
                'summary' => 'IPA recognizes the critical roles of Pilot Flying (PF) and Pilot Monitoring (PM) as foundational elements in flight deck operations.',
                'description' => '<div class="rich-text">
                    <p>These days children have access to so many different types of programs. There is something for everyone’s interests. From the arts to music to science and math, kids have opportunities to explore a variety of subjects to find their niche.</p>
                    <p>STEM programs are among those that have gained in popularity for kids. Robotics falls under that STEM umbrella. For kids who have never tried it before, it provides them with an outlet for their creativity while keeping their minds active.</p>
                    <p>If you’re unfamiliar with robotics, we’re going to take a look at:</p>
                    <ul>
                        <li>How do beginners learn robotics?</li>
                        <li>How can kids learn robotics?</li>
                        <li>At what age should you start robotics?</li>
                    </ul>
                </div>',
            ],
            [
                'title' => 'How do Beginners Learn Robotics?',
                'summary' => 'Two major types of lithium batteries power many types of consumer electronic devices',
                'description' => '<div class="rich-text">
                    <p>Robotics for kids allows children to learn STEM concepts in a hands-on environment. They learn how to program, design, and make their own robots.</p>
                    <p>Robotics offers an educational tool for kids to think out of the box. Many times kids have ideas of what they dream to create. Robotics makes those dreams come true.</p>
                    <p><img decoding="async" class="aligncenter size-full wp-image-15987" src="https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding.jpg" alt="MakerKids-Robotics-Coding" width="624" height="417" srcset="https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-200x134.jpg 200w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-300x200.jpg 300w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-400x267.jpg 400w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-600x401.jpg 600w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding.jpg 624w" sizes="(max-width: 624px) 100vw, 624px"></p>
                </div>',
            ],
            [
                'title' => 'Learn how to make a business form STEM Education with a partnership with ROBOTHINK',
                'summary' => 'The education system in the UK is undergoing great changes. STEM education is gaining more recognition with technology taking the center stage. Take part in',
                'description' => '<div class="rich-text">
                    <p>The education system in the UK is undergoing great changes. STEM education is gaining more recognition with technology taking the center stage. Take part in the change with a partnership with <strong>ROBOTHINK</strong>. You can think of the STEM education domain for the franchise. Business means profits. When you include education in it, you are a part of an organization that caters to the educational upliftment of the society. Gain financially by starting your own, rewarding, kid’s education business.&nbsp;&nbsp;</p>
                    <p><strong>STEM Education in Schools</strong></p>
                    <p>As a franchisee, you can approach schools with STEM education. You can conduct training programs and embed STEM learning in the school syllabus by teaming up with the school. Schools prefer it when children get to know about STEM through workshops so that they get additional learning. You can also tie-up with schools by organizing robotics classes and holding competitions at the intra-school level or inter-school level.&nbsp;</p>
                </div>',
            ],
            [
                'title' => 'Learn More About Our Themed Camps',
                'summary' => 'As a franchisee, you will discover the joy of RoboThink themed camps, where children enjoy every moment spent here. Camps provide a good opportunity for',
                'description' => '<div class="rich-text">
                    <p>Robots are becoming more readily available to consumers, and that leads to the question of what robots can I buy at Home Depot? Home Depot Robots help with productivity so cover a lot of maintenance use cases within your home, from cleaning to lawn mowing. Lets go over a list of Home Depot Robots available on the <a rel="noreferrer noopener" href="https://www.homedepot.com/s/robot?NCNI-5&amp;" data-type="URL" data-id="https://www.homedepot.com/s/robot?NCNI-5&amp;" target="_blank">home depot website</a>, broken down by use case and with Amazon links to offer lower prices and faster shipping:</p>
                    <h4>Home Depot Robot Floor Cleaner</h4>
                    <p>Robot floor cleaners allow you to clean your home and are ideal for homes with single stories or flat surfaces.</p>
                </div>',
            ],
            [
                'title' => 'Do You Want to Build A Business with Which You Can Earn A Living?',
                'summary' => 'Let us help students shape the future. United Kingdom STEM curriculum has to change and the change is going to start at RoboThink. If you',
                'description' => '<div class="rich-text">
                    <p>As a franchisee, you will discover the joy of RoboThink themed camps, where children enjoy every moment spent here.</p>
                    <p>Camps provide a good opportunity for children to explore things away from home. School vacation is a time to enjoy and discover. Themed camps are great places for children to become creative, to enjoy, to educate, to communicate, to ask questions, and get equipped with critical 21st-century skills.</p>
                    <p>Summer camps for kids</p>
                    <p>Camps are places of self-learning and self-discovery. It is a fun play for children aged between 5 and 14, as they ask questions, come up with answers, make decisions, and put their imagination into action. As a franchisee, you will help children get exposure to coding, robotics, and engineering concepts very early in life. It induces love for science and learning. Each day in the camp is unique and runs along with a schedule that will help in the development and education process of children. As a franchisee, you will have the satisfaction of working with kids and a chance to change the future generation towards STEM learning.</p>
                </div>',
            ],
            [
                'title' => 'Teaching to Build a Model Elephant',
                'summary' => 'Become a RoboThink franchisee to develop high order thinking. Learn project-based robotics, coding, and engineering activities, to build a model elephant. RoboThink Robotics program provides',
                'description' => '<div class="rich-text">
                    <p>Become a RoboThink franchisee to develop high order thinking. Learn project-based robotics, coding, and engineering activities, to build a model elephant.
                        RoboThink Robotics program provides a fun hands-on STEM focussed learning experience to help children design and build robots of all shapes, sizes, and functions. For programming, you need RoboThink’s robotics hardware to make robots like an elephant, alligator and pelican perform various functions.</p>
                    <p>Start your own rewarding kid’s education business, as there are few competitors in STEM education. RoboThink has a proven international presence and experience to provide the best STEM learning. As we have more than 100 centers in around 27 countries, we are one of the leading STEM Edu-franchises. Our STEM Education Programs are based on our proprietary hardware, exclusive robotics kit, and NGSS aligned STEAM curriculum.</p>
                </div>',
            ],
            [
                'title' => 'Start A New Challenge With An Exciting Education Franchise',
                'summary' => 'Enjoy the joys of working with RoboThink and the satisfaction of working with kids as a RoboThink franchisee. It’s time to change the way of',
                'description' => '
                <div class="rich-text">
                    <em>Enjoy the joys of working with RoboThink and the satisfaction of working with kids as a RoboThink franchisee. It’s time to change the way of education through STEM learning.&nbsp;</em>
                    <p>RoboThink trains students based on STEM learning. This covers core subjects which are science, technology, engineering, and mathematics. We are working in over 27 countries around the world and are located in more than 100 places. As an Edu-franchise, RoboThink paves the way to spread STEM knowledge to children of all ages. Inspire young engineers with 21st-century skills. We are announcing a new curriculum that is going to shape the future of education. Problem-solving skills, critical thinking, decision making, and communication are some skills that you will introduce to children.</p>
                </div>',
            ],
            [
                'title' => 'Begin a rewarding, fulfilling career in teaching children through STEM education',
                'summary' => 'Be a part of the global change in educating children with a career in STEM Education. An increasing number of students are pursuing STEM education.',
                'description' => '<div class="rich-text">
                    <p>Be a part of the global change in educating children with a career in STEM Education. An increasing number of students are pursuing STEM education. <strong>RoboThink</strong> is encouraging the spread of STEM education by designing real-life scenarios that can be incorporated into the curriculum. Occupation in STEM education is considered as the best-paid job of the 21<sup>st</sup> century and the fastest growing sector, according to reports. You can open your very own <strong>RoboThink</strong> and become a STEM Edu-franchise.&nbsp;</p>
                </div>',
            ],
            [
                'title' => 'Increase your wealth by helping kids in STEM education',
                'summary' => 'STEM education is the imparting of Science, Technology, Engineering, and Mathematics using an interdisciplinary approach. UK franchising team RoboThink can be called as the STEM',
                'description' => '<div class="rich-text">
                    <p>STEM education is the imparting of Science, Technology, Engineering, and Mathematics using an interdisciplinary approach. UK franchising team RoboThink can be called as the STEM EDUCATION’S UK Franchising Team. We help you get started as a franchise providing STEM knowledge to kids across the United Kingdom.&nbsp;</p><p>STEM education helps to fix loopholes found in the traditional education system. It is more employment-oriented and a logical approach to studying. As STEM-based jobs are increasing at a fast pace, the need for STEM education is also on the increase.&nbsp; Parents are willing to allow children to strengthen their skills. You can say that STEM education is a high demand and high growth industry.&nbsp;</p>
                    <p>STEM education helps to fix loopholes found in the traditional education system. It is more employment-oriented and a logical approach to studying. As STEM-based jobs are increasing at a fast pace, the need for STEM education is also on the increase.&nbsp; Parents are willing to allow children to strengthen their skills. You can say that STEM education is a high demand and high growth industry.&nbsp;</p>
                </div>',
            ],
            [
                'title' => 'Run a profitable and scalable education business',
                'summary' => 'To buy a franchise in STEM education is the right business opportunity in the present digital age. If you want to make a difference in',
                'description' => '<div class="rich-text">
                    <p>To buy a franchise in STEM education is the right business opportunity in the present digital age. If you want to make a difference in the education of young children, you can join with <strong>RoboThink</strong> as a franchise for a wonderful and profitable career in the educational business. STEM education not only imparts knowledge, but it is also most profitable as it is the future job provider for the kids of today. It is reported that 93 percent of those in STEM occupations are earning above the national average.&nbsp;</p>
                    <p><strong>RoboThink can be called the STEM Education’s UK Franchising Team</strong> that helps franchisees get started. We have many franchised locations and we continue to expand every day. We ensure that each franchisee will support the community in the field of education. When education becomes fun, it gives a special learning opportunity and creates a zest for learning in young minds.&nbsp;</p>
                    <p><strong>Low Investment Level</strong></p>
                    <p>As a franchisee, you can start with a low investment.&nbsp;</p>
                    <ul><li>You will be provided the educational material to conduct workshops and camps inside classrooms.&nbsp;</li><li>You will be provided with an initial training course, where you will be provided with manuals and training videos regarding management, sales techniques, marketing, and overall business system.&nbsp;</li><li>You will get a brief training at your place of location. We will provide instructions, training, and assistance to perform workshops and shows.&nbsp;&nbsp;&nbsp;</li><li>You will be taught to customize the website by our brand, but according to your liking.&nbsp;</li><li>You will gain access to science experiments and workshops</li><li>You can contact our professional staff through telephone and email access for consultation.&nbsp;</li><li>You will be provided with an initial kit of our workshop material and branded promotional tools to help you market and develop your business.&nbsp;</li></ul>
                </div>',
            ],
        ];

        $postsFa = [
            [
                'title' => 'رباتیک برای کودکان چیست و چرا مهم است؟',
                'summary' => 'IPA نقش حیاتی پرواز خلبان (PF) و پایش خلبان (PM) را به عنوان عناصر اساسی در عملیات عرشه پرواز می شناسد.',
                'description' => '<div class="rich-text">
                    <p>این روزها کودکان به انواع مختلفی از برنامه ها دسترسی دارند. چیزی برای علایق همه وجود دارد. از هنر گرفته تا موسیقی گرفته تا علوم و ریاضی، بچه‌ها فرصت‌هایی برای کشف موضوعات مختلف برای یافتن جایگاه خود دارند.</p>
                    <p>برنامه های STEM از جمله برنامه هایی هستند که برای بچه ها محبوبیت پیدا کرده اند. رباتیک در زیر چتر STEM قرار می گیرد. برای بچه‌هایی که قبلاً هرگز آن را امتحان نکرده‌اند، در حالی که ذهنشان را فعال نگه می‌دارد، دریچه‌ای برای خلاقیت آنها فراهم می‌کند.</p>
                    <p>اگر با رباتیک آشنایی ندارید، به این موارد نگاهی می اندازیم:</p>
                    <ul>
                        <li>مبتدیان چگونه رباتیک را یاد می گیرند؟</li>
                        <li>چگونه بچه ها می توانند رباتیک را یاد بگیرند؟</li>
                        <li>از چه سنی باید رباتیک را شروع کنید؟</li>
                    </ul>
                </div>',
            ],
            [
                'title' => 'افراد مبتدی چگونه رباتیک را یاد می گیرند؟',
                'summary' => 'دو نوع عمده از باتری های لیتیومی انرژی بسیاری از انواع دستگاه های الکترونیکی مصرفی را تامین می کنند',
                'description' => '<div class="rich-text">
                    <p>روباتیک برای کودکان به کودکان امکان می دهد مفاهیم STEM را در یک محیط عملی بیاموزند. آنها یاد می گیرند که چگونه ربات های خود را برنامه ریزی، طراحی و بسازند.</p>
                    <p>روباتیک ابزاری آموزشی برای بچه‌ها ارائه می‌دهد که خارج از چارچوب فکر کنند. بسیاری از اوقات بچه ها ایده هایی در مورد آنچه که رویای خلق آنها دارند دارند. رباتیک این رویاها را محقق می کند.</p>
                    <p><img decoding="async" class="aligncenter size-full wp-image-15987" src="https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding.jpg" alt="MakerKids-Robotics-Coding" width="624" height="417" srcset="https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-200x134.jpg 200w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-300x200.jpg 300w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-400x267.jpg 400w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-600x401.jpg 600w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding.jpg 624w" sizes="(max-width: 624px) 100vw, 624px"></p>
                </div>',
            ],
            [
                'title' => 'با همکاری ROBOTHINK، نحوه ایجاد کسب و کار از آموزش STEM را بیاموزید',
                'summary' => 'سیستم آموزشی در انگلستان دستخوش تغییرات بزرگی شده است. آموزش STEM با در مرکز توجه بودن فناوری، شهرت بیشتری پیدا می‌کند. شرکت کنید',
                'description' => '<div class="rich-text">
                    <p>سیستم آموزشی در بریتانیا دستخوش تغییرات بزرگی شده است. آموزش STEM با در مرکز توجه بودن فناوری، شهرت بیشتری پیدا می‌کند. با مشارکت <strong>ROBOTHINK</strong> در تغییر شرکت کنید. می توانید به حوزه آموزش STEM برای فرنچایز فکر کنید. تجارت یعنی سود. وقتی آموزش را در آن گنجانید، بخشی از سازمانی هستید که به ارتقای آموزشی جامعه کمک می کند. با راه اندازی کسب و کار آموزشی کودکان و نوجوانان خود، سود مالی کسب کنید.&nbsp;&nbsp;</p>
                    <p><strong>آموزش STEM در مدارس</strong></p>
                    <p>به‌عنوان یک حق امتیاز، می‌توانید به مدارسی با آموزش STEM مراجعه کنید. شما می توانید با همکاری با مدرسه، برنامه های آموزشی را اجرا کنید و یادگیری STEM را در برنامه درسی مدرسه جاسازی کنید. مدارس ترجیح می‌دهند که کودکان از طریق کارگاه‌های آموزشی با STEM آشنا شوند تا یادگیری بیشتری کسب کنند. همچنین می توانید با برگزاری کلاس های رباتیک و برگزاری مسابقات در سطح درون مدرسه ای یا بین مدرسه ای با مدارس ارتباط برقرار کنید.&nbsp;</p>
                </div>',
            ],
            [
                'title' => 'درباره کمپ های موضوعی ما بیشتر بیاموزید',
                'summary' => 'به عنوان یک حق امتیاز، شما لذت اردوهای با موضوع RoboThink را خواهید دید، جایی که کودکان از هر لحظه ای که در اینجا می گذرانند لذت می برند. اردوها فرصت خوبی برای',
                'description' => '<div class="rich-text">
                    <p>روبات‌ها به راحتی در دسترس مصرف‌کنندگان قرار می‌گیرند، و این منجر به این سوال می‌شود که چه ربات‌هایی را می‌توانم در Home Depot بخرم؟ ربات های انبار خانگی به بهره وری کمک می کنند، بنابراین بسیاری از موارد استفاده از تعمیر و نگهداری در خانه شما، از تمیز کردن گرفته تا چمن زنی را پوشش می دهد. اجازه دهید فهرستی از ربات‌های انبار خانگی موجود در <a rel="noreferrer noopener" href="https://www.homedepot.com/s/robot?NCNI-5&amp;" را مرور کنیم. data-type="URL" data-id="https://www.homedepot.com/s/robot?NCNI-5&amp;" target="_blank">وب‌سایت انبار خانه</a>، بر اساس موارد استفاده و دارای پیوندهای آمازون برای ارائه قیمت‌های پایین‌تر و ارسال سریع‌تر:</p>
                    <h4>روبات تمیزکننده کف خانه</h4>
                    <p>روباتیک‌های کف شوی به شما امکان می‌دهند خانه خود را تمیز کنید و برای خانه‌هایی با یک طبقه یا سطوح صاف ایده‌آل هستند.</p>
                </div>',
            ],
            [
                'title' => 'آیا می خواهید کسب و کاری بسازید که با آن بتوانید درآمد کسب کنید؟',
                'summary' => 'به دانش آموزان کمک کنیم تا آینده را شکل دهند. برنامه درسی STEM انگلستان باید تغییر کند و تغییر در RoboThink شروع می شود. اگر شما',
                'description' => '<div class="rich-text">
                    <p>به عنوان صاحب امتیاز، لذت اردوهای با موضوع RoboThink را خواهید دید، جایی که کودکان از هر لحظه ای که در اینجا می گذرانند لذت می برند.</p>
                    <p>کمپ ها فرصت خوبی برای کودکان فراهم می کند تا چیزهای دور از خانه را کشف کنند. تعطیلات مدرسه زمانی برای لذت بردن و کشف است. اردوهای موضوعی مکان‌های خوبی برای کودکان هستند تا خلاق شوند، لذت ببرند، آموزش دهند، ارتباط برقرار کنند، سؤال بپرسند و به مهارت‌های حیاتی قرن بیست و یکم مجهز شوند.</p>
                    <p>کمپ های تابستانی برای کودکان</p>
                    <p>کمپ ها مکان هایی برای خودآموزی و کشف خود هستند. این یک بازی سرگرم کننده برای کودکان 5 تا 14 ساله است، زیرا آنها سوال می پرسند، پاسخ می دهند، تصمیم می گیرند و تخیل خود را عملی می کنند. به عنوان یک حق امتیاز، به کودکان کمک خواهید کرد تا در مراحل اولیه زندگی خود با مفاهیم کدنویسی، رباتیک و مهندسی آشنا شوند. باعث عشق به علم و یادگیری می شود. هر روز در اردو منحصر به فرد است و همراه با برنامه ای اجرا می شود که به رشد و روند آموزش کودکان کمک می کند. به عنوان یک حق امتیاز، از کار با بچه ها رضایت خواهید داشت و فرصتی برای تغییر نسل آینده به سمت یادگیری STEM خواهید داشت.</p>
                </div>',
            ],
            [
                'title' => 'آموزش ساخت فیل مدل',
                'summary' => 'برای توسعه تفکر مرتبه بالا، صاحب امتیاز RoboThink شوید. برای ساختن یک فیل مدل، رباتیک، کدنویسی و فعالیت های مهندسی مبتنی بر پروژه را بیاموزید. برنامه RoboThink Robotics فراهم می کند',
                'description' => '<div class="rich-text">
                    <p>فرنچایز RoboThink شوید تا تفکر سفارشی را توسعه دهید. برای ساختن یک فیل مدل، رباتیک، کدنویسی و فعالیت های مهندسی مبتنی بر پروژه را بیاموزید.
                    برنامه RoboThink Robotics یک تجربه آموزشی سرگرم‌کننده مبتنی بر STEM را فراهم می‌کند تا به کودکان کمک کند ربات‌هایی با هر شکل، اندازه و عملکرد طراحی و بسازند. برای برنامه‌نویسی، به سخت‌افزار روباتیک RoboThink نیاز دارید تا ربات‌هایی مانند فیل، تمساح و پلیکان عملکردهای مختلفی را انجام دهند.</p>
                    <p> کسب و کار آموزشی ارزشمند خود را برای کودکان راه اندازی کنید، زیرا رقبای کمی در آموزش STEM وجود دارد. RoboThink دارای حضور و تجربه بین المللی ثابت شده برای ارائه بهترین یادگیری STEM است. از آنجایی که ما بیش از 100 مرکز در حدود 27 کشور داریم، یکی از پیشروهای STEM Edu-franchises هستیم. برنامه‌های آموزشی STEM ما بر اساس سخت‌افزار اختصاصی، کیت روباتیک انحصاری، و برنامه درسی STEAM همسو با NGSS است.</p>
                </div>',
            ],
            [
                'title' => 'یک چالش جدید را با یک امتیاز آموزشی هیجان انگیز شروع کنید',
                'summary' => 'از لذت کار با RoboThink و رضایت از کار با بچه ها به عنوان یک امتیاز دهنده RoboThink لذت ببرید. وقت آن است که راه را تغییر دهیم',
                'description' => '<div class="rich-text">
                    <em>از لذت کار با RoboThink و رضایت از کار با بچه ها به عنوان یک امتیاز دهنده RoboThink لذت ببرید. زمان آن فرا رسیده است که روش آموزش را از طریق یادگیری STEM تغییر دهیم.&nbsp;</em>
                    <p>RoboThink دانش آموزان را بر اساس یادگیری STEM آموزش می دهد. این موضوعات اصلی را شامل می شود که علوم، فناوری، مهندسی و ریاضیات هستند. ما در بیش از 27 کشور در سراسر جهان کار می کنیم و در بیش از 100 مکان واقع شده ایم. RoboThink به عنوان یک Edu-franchise، راه را برای گسترش دانش STEM به کودکان در تمام سنین هموار می کند. الهام بخش مهندسان جوان با مهارت های قرن بیست و یکم. ما در حال اعلام یک برنامه درسی جدید هستیم که قرار است آینده آموزش و پرورش را شکل دهد. مهارت‌های حل مسئله، تفکر انتقادی، تصمیم‌گیری و ارتباط از جمله مهارت‌هایی هستند که به کودکان معرفی خواهید کرد.</p>
                </div>',
            ],
            [
                'title' => 'از طریق آموزش STEM، یک حرفه مفید و پربار را در آموزش کودکان شروع کنید',
                'summary' => 'بخشی از تغییرات جهانی در آموزش کودکان با شغل در STEM Education باشید. تعداد فزاینده ای از دانش آموزان آموزش STEM را دنبال می کنند.',
                'description' => '<div class="rich-text">
                    <p>بخشی از تغییرات جهانی در آموزش کودکان با شغل در STEM Education باشید. تعداد فزاینده ای از دانش آموزان آموزش STEM را دنبال می کنند. <strong>RoboThink</strong> با طراحی سناریوهای واقعی زندگی که می تواند در برنامه درسی گنجانده شود، گسترش آموزش STEM را تشویق می کند. بر اساس گزارش ها، شغل در آموزش STEM به عنوان پردرآمدترین شغل قرن 21<sup>st</sup> و سریع ترین بخش در حال رشد در نظر گرفته می شود. می‌توانید <strong>RoboThink</strong> خودتان را باز کنید و به یک STEM Edu-franchise تبدیل شوید.&nbsp;</p>
                </div>',
            ],
            [
                'title' => 'با کمک به کودکان در آموزش STEM، ثروت خود را افزایش دهید',
                'summary' => 'آموزش STEM انتقال علوم، فناوری، مهندسی و ریاضیات با استفاده از یک رویکرد بین رشته ای است. تیم فرنچایز بریتانیا RoboThink را می توان STEM نامید',
                'description' => '<div class="rich-text">
                    <p>آموزش STEM انتقال علوم، فناوری، مهندسی و ریاضیات با استفاده از یک رویکرد بین رشته‌ای است. تیم فرنچایز بریتانیا RoboThink را می توان به عنوان تیم فرنچایز انگلستان STEM EDUCATION نامید. ما به شما کمک می‌کنیم تا به‌عنوان امتیازی شروع کنید که دانش STEM را برای بچه‌ها در سراسر بریتانیا ارائه می‌کند.&nbsp;</p><p>آموزش STEM به رفع خلأهای موجود در سیستم آموزشی سنتی کمک می‌کند. بیشتر اشتغال محور و رویکردی منطقی برای مطالعه است. از آنجایی که مشاغل مبتنی بر STEM با سرعت زیادی در حال افزایش هستند، نیاز به آموزش STEM نیز رو به افزایش است.&nbsp; والدین مایلند به کودکان اجازه دهند مهارت های خود را تقویت کنند. می توان گفت که آموزش STEM یک صنعت با تقاضا و رشد بالا است.&nbsp;</p>
                    <p>آموزش STEM به رفع خلأهای موجود در سیستم آموزشی سنتی کمک می کند. بیشتر اشتغال محور و رویکردی منطقی برای مطالعه است. از آنجایی که مشاغل مبتنی بر STEM با سرعت زیادی در حال افزایش هستند، نیاز به آموزش STEM نیز در حال افزایش است.&nbsp; والدین مایلند به کودکان اجازه دهند مهارت های خود را تقویت کنند. می توان گفت که آموزش STEM یک صنعت با تقاضا و رشد بالا است.&nbsp;</p>
                </div>',
            ],
            [
                'title' => 'کسب و کار آموزشی سودآور و مقیاس پذیر را اداره کنید',
                'summary' => 'خرید حق رای در آموزش STEM یک فرصت تجاری مناسب در عصر دیجیتال کنونی است. اگر می خواهید تفاوت ایجاد کنید',
                'description' => '<div class="rich-text">
                    <p>خرید حق رای در آموزش STEM یک فرصت تجاری مناسب در عصر دیجیتال کنونی است. اگر می‌خواهید در آموزش کودکان خردسال تفاوت ایجاد کنید، می‌توانید به <strong>RoboThink</strong> به عنوان امتیازی برای یک حرفه شگفت‌انگیز و سودآور در تجارت آموزشی بپیوندید. آموزش STEM نه تنها دانش را منتقل می کند، بلکه بیشترین سود را نیز دارد زیرا ارائه دهنده شغل آینده برای بچه های امروزی است. گزارش شده است که 93 درصد از افرادی که در مشاغل STEM فعالیت می کنند بالاتر از میانگین ملی درآمد دارند.&nbsp;</p>
                    <p><strong>RoboThink را می‌توان تیم امتیازدهی انگلستان STEM Education</strong> نامید که به دارندگان امتیاز برای شروع کمک می‌کند. ما مکان های فرانچایز زیادی داریم و هر روز به گسترش خود ادامه می دهیم. ما اطمینان می دهیم که هر فرنچایز از جامعه در زمینه آموزش حمایت خواهد کرد. وقتی آموزش به سرگرمی تبدیل می شود، فرصت یادگیری ویژه ای می دهد و شور و شوق یادگیری را در ذهن جوانان ایجاد می کند.&nbsp;</p>
                    <p><strong>سطح سرمایه گذاری پایین</strong></p>
                    <p>به عنوان یک حق امتیاز، می توانید با سرمایه گذاری کم شروع کنید.&nbsp;</p>
                    <ul><li>مطالب آموزشی برای برگزاری کارگاه‌ها و اردوها در داخل کلاس‌ها در اختیار شما قرار می‌گیرد.&nbsp;</li><li>یک دوره آموزشی اولیه در اختیار شما قرار می‌گیرد که در آن دستورالعمل‌ها و فیلم‌های آموزشی در اختیار شما قرار می‌گیرد. در مورد مدیریت، تکنیک‌های فروش، بازاریابی، و سیستم کلی کسب‌وکار.&nbsp;</li><li>در محل خود آموزش مختصری خواهید دید. ما دستورالعمل‌ها، آموزش‌ها و کمک‌هایی را برای اجرای کارگاه‌ها و نمایش‌ها ارائه می‌دهیم.&nbsp;&nbsp;&nbsp;</li><li>به شما آموزش داده می‌شود که وب‌سایت را با برند ما سفارشی کنید، اما مطابق میل خود.&nbsp;</li><li> li><li>به آزمایش‌ها و کارگاه‌های علمی دسترسی خواهید داشت</li><li>برای مشاوره می‌توانید با کارکنان حرفه‌ای ما از طریق تلفن و دسترسی ایمیل تماس بگیرید.&nbsp;</li><li>به شما یک کیت اولیه مواد کارگاه ما و ابزارهای تبلیغاتی مارکدار ما برای کمک به بازاریابی و توسعه کسب و کارتان.&nbsp;</li></ul>
                </div>',
            ],
        ];

        $postsAr = [
            [
                'title' => 'ما هي الروبوتات للأطفال ولماذا هي مهمة',
                'summary' => 'تدرك IPA الأدوار الحاسمة للطيران التجريبي (PF) ومراقبة الطيار (PM) كعناصر أساسية في عمليات سطح الطيران.',
                'description' => '<div class="rich-text">
                    <p>يتمتع الأطفال هذه الأيام بإمكانية الوصول إلى العديد من أنواع البرامج المختلفة. هناك شيء لمصالح الجميع. من الفنون إلى الموسيقى إلى العلوم والرياضيات، تتاح للأطفال فرص لاستكشاف مجموعة متنوعة من المواضيع للعثور على مكانهم المناسب.</p>
                    <p>تعد برامج العلوم والتكنولوجيا والهندسة والرياضيات (STEM) من بين البرامج التي اكتسبت شعبية لدى الأطفال. تقع الروبوتات تحت مظلة العلوم والتكنولوجيا والهندسة والرياضيات (STEM). بالنسبة للأطفال الذين لم يجربوه من قبل، فهو يوفر لهم منفذًا لإبداعهم مع الحفاظ على عقولهم نشطة.</p>
                    <p>إذا لم تكن على دراية بالروبوتات، فسنلقي نظرة على:</p>
                    <ul>
                        <li>كيف يتعلم المبتدئين الروبوتات؟</li>
                        <li>كيف يمكن للأطفال تعلم الروبوتات؟</li>
                        <li>في أي عمر يجب أن تبدأ في استخدام الروبوتات؟</li>
                    </ul>
                </div>',
            ],
            [
                'title' => 'كيف يتعلم المبتدئين الروبوتات؟',
                'summary' => 'هناك نوعان رئيسيان من بطاريات الليثيوم يشغلان العديد من أنواع الأجهزة الإلكترونية الاستهلاكية',
                'description' => '<div class="rich-text">
                    <p>تتيح الروبوتات للأطفال للأطفال تعلم مفاهيم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) في بيئة عملية. ويتعلمون كيفية برمجة وتصميم وصنع الروبوتات الخاصة بهم.</p>
                    <p>تقدم الروبوتات أداة تعليمية للأطفال للتفكير خارج الصندوق. في كثير من الأحيان يكون لدى الأطفال أفكار حول ما يحلمون بإنشائه. الروبوتات تجعل هذه الأحلام تتحقق.</p>
                    <p><img decoding="async" class="aligncenter size-full wp-image-15987" src="https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding.jpg" alt="MakerKids-Robotics-Coding" width="624" height="417" srcset="https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-200x134.jpg 200w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-300x200.jpg 300w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-400x267.jpg 400w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding-600x401.jpg 600w, https://makerkids.com/wp-content/uploads/2020/09/MakerKids-Robotics-Coding.jpg 624w" sizes="(max-width: 624px) 100vw, 624px"></p>
                </div>',
            ],
            [
                'title' => 'تعرف على كيفية إنشاء نموذج تجاري لتعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM Education) من خلال الشراكة مع ROBOTHINK',
                'summary' => 'يمر نظام التعليم في المملكة المتحدة بتغييرات كبيرة. يكتسب تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) المزيد من الاعتراف مع احتلال التكنولوجيا مركز الصدارة. شارك في',
                'description' => '<div class="rich-text">
                    <p>يشهد نظام التعليم في المملكة المتحدة تغيرات كبيرة. يكتسب تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) المزيد من الاعتراف مع احتلال التكنولوجيا مركز الصدارة. شارك في التغيير من خلال الشراكة مع <strong>ROBOTHINK</strong>. يمكنك التفكير في مجال تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) للامتياز. الأعمال تعني الأرباح. عندما تقوم بتضمين التعليم فيه، فأنت جزء من منظمة تعمل على الارتقاء التعليمي للمجتمع. احصل على مكاسب مالية من خلال بدء مشروع تجاري خاص بك ومجزٍ لتعليم الأطفال. </p>
                    <p><strong>تعليم العلوم والتكنولوجيا والهندسة والرياضيات في المدارس</strong></p>
                    <p>باعتبارك صاحب الامتياز، يمكنك التواصل مع المدارس التي تقدم تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM). يمكنك إجراء برامج تدريبية وتضمين تعلم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) في المنهج الدراسي للمدرسة من خلال التعاون مع المدرسة. تفضل المدارس أن يتعرف الأطفال على العلوم والتكنولوجيا والهندسة والرياضيات من خلال ورش العمل حتى يحصلوا على تعليم إضافي. يمكنك أيضًا التعاون مع المدارس من خلال تنظيم دروس الروبوتات وعقد المسابقات على مستوى داخل المدرسة أو على المستوى المشترك بين المدارس. </p>
                </div>',
            ],
            [
                'title' => 'اعرف المزيد عن معسكراتنا ذات السمات المميزة',
                'summary' => 'باعتبارك صاحب الامتياز، سوف تكتشف متعة المعسكرات التي تحمل طابع RoboThink، حيث يستمتع الأطفال بكل لحظة يقضونها هنا. توفر المعسكرات فرصة جيدة ل',
                'description' => '<div class="rich-text">
                    <p>أصبحت الروبوتات متاحة بسهولة أكبر للمستهلكين، وهذا يؤدي إلى التساؤل حول ما هي الروبوتات التي يمكنني شراؤها من هوم ديبوت؟ تساعد روبوتات Home Depot في زيادة الإنتاجية، لذا فهي تغطي الكثير من حالات استخدام الصيانة داخل منزلك، بدءًا من التنظيف وحتى قص العشب. دعنا نراجع قائمة روبوتات Home Depot المتوفرة على <a rel="noreferrer noopener" href="https://www.homedepot.com/s/robot?NCNI-5&amp;" data-type = "URL" data-id = "https://www.homedepot.com/s/robot?NCNI-5&amp;" target="_blank">موقع ويب home depot</a>، مقسمًا حسب حالة الاستخدام ومع روابط أمازون لتقديم أسعار أقل وشحن أسرع:</p>
                    <h4>منظف الأرضيات الآلي من هوم ديبوت</h4>
                    <p>تتيح لك منظفات الأرضيات الآلية تنظيف منزلك وهي مثالية للمنازل ذات الطوابق الفردية أو الأسطح المستوية.</p>
                </div>',
            ],
            [
                'title' => 'هل ترغب في بناء مشروع تجاري يمكنك من خلاله كسب لقمة العيش؟',
                'summary' => 'دعونا نساعد الطلاب على تشكيل المستقبل. يجب أن يتغير منهج العلوم والتكنولوجيا والهندسة والرياضيات (STEM) في المملكة المتحدة وسيبدأ التغيير في RoboThink. اذا أنت',
                'description' => '<div class="rich-text">
                    <p>باعتبارك صاحب الامتياز، سوف تكتشف متعة المعسكرات التي تحمل طابع RoboThink، حيث يستمتع الأطفال بكل لحظة يقضونها هنا.</p>
                    <p>توفر المعسكرات فرصة جيدة للأطفال لاستكشاف الأشياء بعيدًا عن المنزل. العطلة المدرسية هي وقت للاستمتاع والاكتشاف. تعد المعسكرات ذات المواضيع الخاصة أماكن رائعة للأطفال ليصبحوا مبدعين، ويستمتعوا، ويتعلموا، ويتواصلوا، ويطرحوا الأسئلة، ويتسلحوا بمهارات القرن الحادي والعشرين المهمة.</p>
                    <p>مخيمات صيفية للأطفال</p>
                    <p>المخيمات هي أماكن للتعلم الذاتي واكتشاف الذات. إنها لعبة ممتعة للأطفال الذين تتراوح أعمارهم بين 5 و14 عامًا، حيث يطرحون الأسئلة ويتوصلون إلى إجابات ويتخذون القرارات ويضعون خيالهم موضع التنفيذ. باعتبارك صاحب الامتياز، سوف تساعد الأطفال على التعرف على مفاهيم البرمجة والروبوتات والهندسة في وقت مبكر جدًا من حياتهم. أنه يحفز حب العلم والتعلم. كل يوم في المخيم فريد من نوعه ويسير جنبًا إلى جنب مع جدول زمني يساعد في عملية تنمية وتعليم الأطفال. باعتبارك صاحب الامتياز، ستشعر بالرضا عن العمل مع الأطفال وستتاح لك الفرصة لتغيير جيل المستقبل نحو تعلم العلوم والتكنولوجيا والهندسة والرياضيات.</p>
                </div>',
            ],
            [
                'title' => 'تعليم بناء نموذج الفيل',
                'summary' => 'كن صاحب امتياز RoboThink لتطوير التفكير عالي المستوى. تعلم أنشطة الروبوتات والبرمجة والهندسة القائمة على المشاريع لبناء نموذج فيل. يوفر برنامج RoboThink Robotics',
                'description' => '<div class="rich-text">
                    <p>كن صاحب امتياز RoboThink لتطوير التفكير عالي المستوى. تعلم أنشطة الروبوتات والبرمجة والهندسة القائمة على المشاريع لبناء نموذج فيل.
                    يوفر برنامج RoboThink Robotics تجربة تعليمية ممتعة تركز على العلوم والتكنولوجيا والهندسة والرياضيات (STEM) لمساعدة الأطفال على تصميم وبناء الروبوتات بجميع الأشكال والأحجام والوظائف. بالنسبة للبرمجة، تحتاج إلى أجهزة الروبوتات من RoboThink لجعل الروبوتات مثل الفيل والتمساح والبجع تؤدي وظائف مختلفة.</p>
                    <p>ابدأ مشروعًا تجاريًا مجزيًا لتعليم أطفالك، نظرًا لوجود عدد قليل من المنافسين في تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM). يتمتع RoboThink بحضور دولي وخبرة مثبتة في تقديم أفضل تعليم في مجالات العلوم والتكنولوجيا والهندسة والرياضيات. وبما أن لدينا أكثر من 100 مركز في حوالي 27 دولة، فإننا نعتبر إحدى الشركات الرائدة في مجال تعليم العلوم والتكنولوجيا والهندسة والرياضيات. تعتمد برامجنا التعليمية في مجال العلوم والتكنولوجيا والهندسة والرياضيات (STEM) على أجهزتنا الخاصة، ومجموعة الروبوتات الحصرية، ومناهج STEAM المتوافقة مع NGSS.</p>
                </div>',
            ],
            [
                'title' => 'ابدأ تحديًا جديدًا مع امتياز تعليمي مثير',
                'summary' => 'استمتع بمتعة العمل مع RoboThink والرضا الناتج عن العمل مع الأطفال بصفتك صاحب امتياز RoboThink. حان الوقت لتغيير الطريقة',
                'description' => '<div class="rich-text">
                    <em>استمتع بمتعة العمل مع RoboThink والرضا الناتج عن العمل مع الأطفال باعتبارك صاحب امتياز RoboThink. لقد حان الوقت لتغيير طريقة التعليم من خلال تعلم العلوم والتكنولوجيا والهندسة والرياضيات.</em>
                    <p>يقوم RoboThink بتدريب الطلاب على أساس تعلم العلوم والتكنولوجيا والهندسة والرياضيات (STEM). يغطي هذا الموضوعات الأساسية وهي العلوم والتكنولوجيا والهندسة والرياضيات. نحن نعمل في أكثر من 27 دولة حول العالم ونتواجد في أكثر من 100 مكان. باعتبار RoboThink أحد الامتيازات التعليمية، فإنه يمهد الطريق لنشر المعرفة في مجال العلوم والتكنولوجيا والهندسة والرياضيات للأطفال من جميع الأعمار. إلهام المهندسين الشباب بمهارات القرن الحادي والعشرين. نحن نعلن عن منهج جديد سيشكل مستقبل التعليم. مهارات حل المشكلات، والتفكير النقدي، واتخاذ القرار، والتواصل هي بعض المهارات التي ستقدمها للأطفال.</p>
                </div>',
            ],
            [
                'title' => 'ابدأ مهنة مجزية ومرضية في تعليم الأطفال من خلال تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM).',
                'summary' => 'كن جزءًا من التغيير العالمي في تعليم الأطفال من خلال مهنة تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM). يتابع عدد متزايد من الطلاب تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM).',
                'description' => '<div class="rich-text">
                    <p>كن جزءًا من التغيير العالمي في تعليم الأطفال من خلال العمل في مجال تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM). يتابع عدد متزايد من الطلاب تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM). تعمل شركة <strong>RoboThink</strong> على تشجيع انتشار تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) من خلال تصميم سيناريوهات واقعية يمكن دمجها في المنهج الدراسي. تعتبر مهنة تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) الوظيفة الأفضل أجراً في القرن الحادي والعشرين والقطاع الأسرع نموًا، وفقًا للتقارير. يمكنك فتح <strong>RoboThink</strong> الخاص بك والحصول على امتياز تعليم العلوم والتكنولوجيا والهندسة والرياضيات.</p>
                </div>',
            ],
            [
                'title' => 'قم بزيادة ثروتك من خلال مساعدة الأطفال في تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM).',
                'summary' => 'تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) هو نقل العلوم والتكنولوجيا والهندسة والرياضيات باستخدام نهج متعدد التخصصات. يمكن تسمية فريق الامتياز في المملكة المتحدة RoboThink باسم STEM',
                'description' => '<div class="rich-text">
                    <p>إن تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) هو نقل العلوم والتكنولوجيا والهندسة والرياضيات باستخدام نهج متعدد التخصصات. يمكن تسمية فريق الامتياز في المملكة المتحدة RoboThink باسم فريق الامتياز في المملكة المتحدة التابع لـ STEM EDUCATION. نحن نساعدك على البدء بامتياز لتوفير المعرفة في مجال العلوم والتكنولوجيا والهندسة والرياضيات (STEM) للأطفال في جميع أنحاء المملكة المتحدة. </p><p>يساعد تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) على إصلاح الثغرات الموجودة في نظام التعليم التقليدي. إنه أكثر توجهاً نحو التوظيف ونهج منطقي للدراسة. مع تزايد الوظائف القائمة على العلوم والتكنولوجيا والهندسة والرياضيات (STEM) بوتيرة سريعة، فإن الحاجة إلى تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) آخذة في الازدياد أيضًا. الآباء على استعداد للسماح للأطفال بتعزيز مهاراتهم. يمكنك القول أن تعليم العلوم والتكنولوجيا والهندسة والرياضيات هو صناعة ذات طلب مرتفع ونمو مرتفع.</p>
                    <p>يساعد تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) على سد الثغرات الموجودة في نظام التعليم التقليدي. إنه أكثر توجهاً نحو التوظيف ونهجًا منطقيًا للدراسة. مع تزايد الوظائف القائمة على العلوم والتكنولوجيا والهندسة والرياضيات (STEM) بوتيرة سريعة، فإن الحاجة إلى تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) آخذة في الازدياد أيضًا. الآباء على استعداد للسماح للأطفال بتعزيز مهاراتهم. يمكنك القول أن تعليم العلوم والتكنولوجيا والهندسة والرياضيات هو صناعة ذات طلب مرتفع ونمو مرتفع.</p>
                </div>',
            ],
            [
                'title' => 'إدارة أعمال تعليمية مربحة وقابلة للتطوير',
                'summary' => 'إن شراء امتياز في تعليم العلوم والتكنولوجيا والهندسة والرياضيات هو فرصة العمل المناسبة في العصر الرقمي الحالي. إذا كنت تريد أن تحدث فرقا في',
                'description' => '<div class="rich-text">
                    <p>إن شراء امتياز في تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) هو فرصة العمل المناسبة في العصر الرقمي الحالي. إذا كنت ترغب في إحداث تغيير في تعليم الأطفال الصغار، فيمكنك الانضمام إلى <strong>RoboThink</strong> كامتياز للحصول على مهنة رائعة ومربحة في مجال الأعمال التعليمية. لا يقتصر تعليم العلوم والتكنولوجيا والهندسة والرياضيات (STEM) على نقل المعرفة فحسب، بل إنه أيضًا أكثر ربحية لأنه يوفر فرص العمل المستقبلية لأطفال اليوم. تشير التقارير إلى أن 93 بالمائة من العاملين في مهن العلوم والتكنولوجيا والهندسة والرياضيات يكسبون أعلى من المتوسط ​​الوطني.</p>
                    <p><strong>يمكن أن يُطلق على RoboThink اسم فريق الامتياز في المملكة المتحدة التابع لـ STEM Education</strong> والذي يساعد أصحاب الامتياز على البدء. لدينا العديد من المواقع الحاصلة على الامتياز ونستمر في التوسع كل يوم. نحن نضمن أن كل صاحب امتياز سيدعم المجتمع في مجال التعليم. عندما يصبح التعليم ممتعًا، فإنه يوفر فرصة تعليمية خاصة ويخلق متعة للتعلم في العقول الشابة. </p>
                    <p><strong>انخفاض مستوى الاستثمار</strong></p>
                    <p>باعتبارك صاحب الامتياز، يمكنك البدء باستثمار منخفض.</p>
                    <ul><li>سيتم تزويدك بالمواد التعليمية اللازمة لإجراء ورش العمل والمعسكرات داخل الفصول الدراسية. </li><li>سيتم تزويدك بدورة تدريبية أولية، حيث سيتم تزويدك بالأدلة ومقاطع الفيديو التدريبية فيما يتعلق بالإدارة وتقنيات المبيعات والتسويق ونظام الأعمال العام. </li><li>سوف تحصل على تدريب موجز في مكان موقعك. سنقدم التعليمات والتدريب والمساعدة لأداء ورش العمل والعروض. </li><li> سيتم تعليمك كيفية تخصيص موقع الويب حسب علامتنا التجارية، ولكن وفقًا لترضيك. </ li><li>سيمكنك الوصول إلى التجارب العلمية وورش العمل</li><li>يمكنك الاتصال بموظفينا المحترفين من خلال الهاتف والبريد الإلكتروني للتشاور. </li><li>سيتم تزويدك بـ مجموعة أولية من مواد ورشة العمل والأدوات الترويجية للعلامة التجارية لمساعدتك في تسويق أعمالك وتطويرها.</li></ul>
                </div>',
            ],
        ];

        foreach($postsEn as $key => $post)
            $this->createPost($post, 'en', $key +1, 'article');
        foreach($postsFa as $key => $post)
            $this->createPost($post, 'fa', $key +1, 'article');
        foreach($postsAr as $key => $post)
            $this->createPost($post, 'ar', $key +1, 'article');

        shuffle($postsEn);
        shuffle($postsFa);
        shuffle($postsAr);

        foreach($postsEn as $key => $post)
            $this->createPost($post, 'en', $key +1, 'news');
        foreach($postsFa as $key => $post)
            $this->createPost($post, 'fa', $key +1, 'news');
        foreach($postsAr as $key => $post)
            $this->createPost($post, 'ar', $key +1, 'news');
    }

    public function createPost($data, $lang, $i, $type)
    {
        $post = Post::create([
            'type' => $type,
            'lang' => $lang,
            'title' => $data['title'],
            'slug' =>  Str::slug($data['title']) . "$type" . "-$lang",
            'summary' => $data['summary'] ?? null,
            'description' => $data['description'] ?? null,
            'is_active' => true,
            'created_by' => 1,
            'views' => rand(0, 999),
        ]);
        // $i = rand(1, 6);
        $img = public_path("Impact/assets/img/blog/$i.jpg");
        if (file_exists($img)) {
            $fakeUploadedFile = UploadedFile::fake()->createWithContent("$i.jpg", file_get_contents($img));
            $image =  $this->createFakeImage($fakeUploadedFile, $post);
        }

        $categories = Category::where('lang', $lang)->pluck('id');

        $post->mainCategory()->attach($categories->random(), ['is_main' => true]);
        $post->categories()->attach($categories->random(rand(0,2)) ?? []);
    }
}
