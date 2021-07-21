<?php

namespace Database\Seeders;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'news_type_id' => 1,
                'title' => 'dgdfgdfg ',
                'shortContent' => ' fdsfsdfsd',
                'content' => ' fdfdfg',
                'img' => '  https://i.ibb.co/gzVXXYs/Ce.png ',
                'users_like' => 1
            ]
            ,
            [
                'news_type_id' => 1,
                'title' => ' ',
                'shortContent' => ' ',
                'content' => ' ',
                'img' => ' https://i.ibb.co/f0Sn7ty/204584655-23847321255490704-3786852979910744487-n.jpg',
                'users_like' => 1
            ],

         
            [
                'news_type_id' => 2,
                'title' => 'Vietnam – Career Seminar 2019 – One step ahead for a better future ',
                'shortContent' => 'With the aim of offering a closer look at IT companies in Danang and providing career guidance, a Career Seminar was held in June by our 2nd-year students for all PN Vietnam students. ',
                'content' => 'PN Vietnam’s annual Career Seminar was a huge success in early June 2019. This was an opportunity for all students to find out more about the companies and thus be able to prepare for a more specific orientation for their future job. 
                                1/ Research and Preparation
                                By tradition, second-year students handle all the tasks of organizing the event by themselves. This year, thanks to the support from Da Nang Business Incubator (DNES) and the author of the book “They will never know”, the 2019 Career Seminar was bigger and held in the amazing venue of DNES.
                                In order to prepare for this event, the students were divided into 6 groups and had to carry out in-depth research into the companies: Competitive advantages, requirements, recruitment mechanism, and so on. Then they set up meetings with the company representatives to get more information and a better understanding of the companies. During the meetings, companies such as Orient Software, MGM technology Partners, Enouvo IT Solutions and Agility IO gave the students some of their reference publications, as well as T-shirts and gifts.Moreover, besides the content, the students were also required to design banners for each company booth and set it up in advance. They put their hearts and enthusiasm into the preparations to ensure the success of the event.
                                2/ Fruitful efforts
                                As expected, the event went very well. Whereas last year’s event target was to clarify essential IT skills and soft skills to improve students’ employability, Career Seminar 2019 shifted the focus to companies’ competitive advantages and demands. As a result, the students were expected to be able to define clearly what to do to meet the needs of their targeted companies.
                                During the event, second-year PN Vietnam students showed their efficiency with detailed, informative, yet lively, presentations on the four companies mentioned above, along with Axon Active and LogiGear. Starting with a general introduction about each company’s history and working environment, the speakers then gradually dug deeper into its working and training system, its technologies as well as benefits and requirements in light of the event’s objectives. After the presentations, came the most exciting part of the day – the Q&A session! The attendees eagerly raised numerous questions, such as the programming languages used or the recruitment criteria in the 6 companies. In this part, students were glad to have the companies’ representatives handle the questions and to provide an “insider’s view“. Additionally, alumni working in the companies also joined the event and shared their experience. This inspired the students and helped them gain more confidence to improve themselves. The Career Seminar created a wonderful opportunity for our students to meet with the companies and thus obtain better visibility of future career options. This could have not have been achieved without the amazing support from our partner companies and sponsors, towards whom PN Vietnam would like to express heartfelt gratitude. ',
                'img' => ' https://i.ibb.co/5FTMCfw/newsletter-uniform-tshirt.png',
                'users_like' => 1
            ],

           
            [
                'news_type_id' => 3,
                'title' => 'Damage in our classrooms due to heavy rains in Central Vietnam – We need your support! ',
                'shortContent' => 'Since the beginning of Oct 2020, people in central Vietnam have been exposed to constant natural disasters, including widespread flooding, landslides and large damaging storms. According to the latest UNICEF’s press release, at least 135.000 families in this region have been suffering heavy losses of property and over 1.5 million children are at a high risk of disruption in education. ',
                'content' => 'Education is the most powerful weapon which you can use to change the world”, said Nelson Mandela. At Da Nang city, Passerelles numeriques Vietnam (PNV) has been supporting nearly 500 underserved students from 7 provinces of central Vietnam which have been directly impacted by the Molave storm and recent historic floods. We provide the students with a free 3-year vocational training in the digital sector which will enable them to acquire stable employability, and furthermore, help their siblings continue the education and aid their family to escape poverty in a sustainable way.
                However, the extreme weather during the October in Da nang currently poses a major threat to our students’ study. Due to the huge rainfall, the leaking roofs and humid walls of our classrooms have increased the hygrometry drastically – with over than 90% humidity for several days in a row that left more than 40% of our computers heavily damaged. As a result, approximately 50% of student study time for IT subjects have been suspended.
                Knowing that this could happen, PNV has taken precautions to protect the computer equipment from the humidity: we sealed the doors and windows, covered CPUs, monitors, switches before the heavy rains arrived; clean ups are done already twice a year to prevent the dust to stock up in the CPU and oxyding down the circuits. Eventually, the damage to the computers with more than 10 years old is still unavoidable. ',
                'img' => ' https://i.ibb.co/DbCw1PD/Featured-image-1-1080x667.jpg ',
                'users_like' => 1
            ],
              
            [
                'news_type_id' => 3,
                'title' => ' COVID-19 challenges & our innovative solutions',
                'shortContent' => 'COVID-19 is a challenge for everyone, including Passerelles numériques staff and students: it has challenged our mission, it has changed our work habits and made us question our ways of proceeding. We would like to share with you how we have overcome challenges and to acknowledge our staff’s and students’ creativity, patience and professionalism during this difficult time. ',
                'content' => ' PN remote working round up!
                            Working remotely for a long period can impact effectiveness and the motivation of teams, especially when they have to work close to students. That is why, at PN, we have developed an internal campaign called “self care” which promotes positive and healthy habits while working from home.
                            Also, a “PN IT remote working tools kit” has been sent to all our staff to remind them about accessible tools allowing them to smooth the transition from office work to online tools.
                            During the past few months, our teams have taken inspiring initiatives, especially PN Vietnam’s team: while continuing to have managers’ meetings, they helped each other out and teamed up during this difficult period.
                            They worked out solutions to boost inter-departmental support: the External Relations team and the Education team joined forces to help the Selection team with communication to find more potential candidates for the 2020 written exams. Whereas We initiated a “Student’s teaching video contest” where each student produced a video in English relating to either a topic on one of their lessons, sport or even yoga. In so doing, students interacted with each other, practiced their English and maintained a sense of cohesion during lockdown. We decided to maintain the internships for our students. We are most grateful to them because internships are a crucial part of our training program.
                            We would also like to warmly thank all the donors who demonstrated their generosity during our fundraising campaign launched in the context of this crisis.',
                'img' => '  https://i.ibb.co/7GrQvPT/News-from-the-field-2-1-1080x450.png ',
                'users_like' => 1
            ],
            [
                'news_type_id' => 3,
                'title' => ' Blossom in the storm',
                'shortContent' => '“Every person is born with a destiny” – That is what Tran T.Q., a Passerelles numériques Vietnam student of batch 20, currently a software engineer, told about the story of her life. Like a flower in the thunderstorms, the young girl has been constantly striving towards a better future. ',
                'content' => 'The flower grows from storms. Born and raised in Da Nang city, from a young age, Q. was self-conscious of her own situation. Separated parents, Q. lived with her mother, sister, and a half-brother from a young age. The young girl’s family only relies on her mother’s meager salary of just under one million dong per month to live through the day. Q. has had an uneasy childhood with her alcoholic father, and until now Q. has completely lost contact with him. The lack of love from her father was the reason for her inferiority complex. But despite the difficult circumstances, she is always grateful for the love of her mother and her brothers and sisters. The young girl smiled and confided that sometimes she kept comparing with people with better conditions, but then realized how fortunate she was when she met more struggling people around her.
                                Although having a lot of difficulties, Tran T.Q. has always wanted to pursue further education and expand her knowledge. However, the door to the university at that time seemed to have closed when Q. did not get a scholarship and she knew that the tuition for four years of university was much higher than what her family could afford. Q. then learned about PNV – where has helped the strong girl learn many things and have a stable life like today, through a meeting at her high school. With hope and determination, she decided to apply to PNV.
                                Light at the end of the tunnel, Q. shared that fate brought her to PNV. When it seemed that the dream of being a student was blown out, Q. heard Mr. Nguyen – a teacher that later became her teacher at PNV – talk about the organization at the meeting. After going through a rigorous selection process, the young lady officially became a PNV student. PNV has given Q. a chance to sustainably escape poverty through education. She has always felt lucky to be a student of PNV and until now she is always grateful to the teachers who had wholeheartedly taught and cared for her and other students. Not only was she provided with a thorough and quality IT training program, but English skills are also one of the things Q. is proud of after the three-year schooling. From a student feeling inferior to others about her English skills, Q. is now able to confidently communicate with her colleagues at Enouvo IT Solutions – where she works as a developer.
                                Sharing about her changing life, with Tran T.Q., PNV is a place for her to expand her knowledge and improve her skills, which has helped her become an IT engineer. However, the most valuable thing that still makes her choke every time she talks about is the friends who have accompanied her in PNV for three years. During that time, a terrible event happened when her mother, who had always been by Q.’s side, passed away. And it was her close friends who had helped the young girl to overcome the pain and move forward.
                                Talking about Q., Ms. Nguyen Phuong (PNV’s External Relations Officer), who often works side by side with PNV’s students, expressed admiration for this young girl’s fortitude. As Q. affirmed, in life up to now, there are still many things that are not going smoothly and sometimes she feels discouraged, yet “sow a thought, reap an act”, as long as she can be positive and try to self-adjust, she can overcome all the challenges awaiting her in the future.
                                Currently, Tran T.Q. has a better life with a stable and qualified job. Having been through so many storms, the young girl has always been resilient. PNV has given her a chance of life-changing, now it’s time for “the little flower” to keep conquering and developing in her journey of life. ',
                'img' => 'https://i.ibb.co/RprvYdq/Blossom-in-the-storm-1-1080x675.jpg ',
                'users_like' => 1
            ],
            [
                'news_type_id' => 4,
                'title' => 'Vietnam – Women Talk: Women in Tech Industry – Challenges and Opportunities ',
                'shortContent' => ' On March 9th 2019, PN Vietnam successfully organized the “Women Talk” event in order to share an overview of some career paths in the IT sector to inspire students, especially the female ones, to work hard and succeed.',
                'content' => 'On the occasion of International Women’s Day, PN Vietnam invited three guest speakers who have impressive achievements in their career to come and share their stories in the “Women Talk” event: Ms. Hanh Trang – Co-Founder and General Manager of Enouvo IT Solutions & Enouvo Space, Ms. Thu Nghia – Event Sales Manager of Four Points by Sheraton and Ms. Thuy Trang – General Manager of PN Vietnam. Let’s discover their stories!
                            Women working in Tech industry: Advantages and Disadvantages
                            Ms. Hanh Trang started with the story about her own career path, from a Banking student with an interest in Technology to an IT freelancer, then making her way to become the Co-Founder and General Manager of an IT company after years of hard work. She asserted that “Success doesn’t happen overnight”. It was the result of step-by-step efforts, determination and a great passion for IT.  From her experience, women working in male-dominated jobs like IT often receive more help and support from people. However, there are still certain disadvantages, such as overtime and work pressure. Ms. Trang affirmed that women had to work harder to prove themselves and make continuous improvements in technical knowledge. Getting in the habit of reading technology news every day is a good way to keep up with constantly changing technologies.
                            The importance of goal-setting She recommended 2 methods which the students could adopt to improve their goal-setting skills. The first one is “The Wheel of Life” – a powerful tool to ensure that every aspect of lives are fulfilled in the right way – and the second one is “S.M.A.R.T.” – a method that helps people achieve their goals one step at a time using 5 criteria: Specific, Measurable, Attainable, Relevant and Time-bound. She also had the students try these tools to help them fully understand their usefulness. Goal-setting is an important skill for success, so it is essential to practice it continuously.
                            Valuable advice from successful women The most exciting part was the discussion between the three guest speakers and the students. Lots of questions were raised by the students about other difficulties women may face at work and how to overcome them. Our guest speakers agreed that the greatest challenge, especially for women, is to maintain a work-life balance. There were other questions on how to improve English, common problems that freshers encounter and how to deal with possible contingencies. The discussion ended with the message that in times of hardship, with constant effort and a clear, suitable goal, students could overcome the challenges. This event was a great opportunity for our students to become more aware of the career path in the tech industry and the important skills to prepare for it. There are only a few months left before our 3rd-year students graduate, and we are confident that thanks to this event, they will be well prepared for their future jobs and their new journey in life. ',
                'img' => ' https://i.ibb.co/x1Z8yz8/WEB-3.jpg ',
                'users_like' => 1
            ],
            [
                'news_type_id' => 5,
                'title' => 'Do you know our 2019 graduates? ',
                'shortContent' => 'The success of our graduates defines the success of our mission.
                It is a great pleasure to start this new year by giving you news of our young graduates and their success! ',
                'content' => ' After two to three years of intense training in our centre, in Vietnam, classes of young people have finally received their diplomas and celebrated their first steps in working life and a qualified job! Arrived in 2016 these young people from disadvantaged backgrounds,
                            and mainly rural areas (91%), have experienced, discovered and learned a lot during their PN journey. Not just technically but also humanly. We are proud today to wish them a safe and successful journey! See the happiness on our graduates’ faces, the pride on their parents’ faces but also a sense of achievement on our staff’s faces and faith on our students’ faces is what we are working so hard to achieve year by year! To make this success happen, we are always in need of support (financial, in-kind or skills), can we count on you?',
                'img' => 'https://i.ibb.co/nfwfHYb/6.png  ',
                'users_like' => 1
            ],
            [
                'news_type_id' => 5,
                'title' => 'Vietnam – Class 2019 Graduation Ceremony ',
                'shortContent' => ' Starting in September 2016, 40 students began their PN journey with the Integration Week to become part of the PN Family. Since then, during three years of hard work, they participated in many activities to fully develop their overall potential, both mental and physical, in as many domains as possible: visiting IT companies, taking part in projects and workshops, and meeting up with various volunteers, not only in Danang but also from all over the world. They were also provided with space and an opportunity to develop their entrepreneurship skills (from pitching to real IT business projects).
                                They participated in two internships during their second and third academic years and received positive feedback from the companies. Most of them were even offered confirmed positions in the companies before officially graduating.',
                'content' => ' Hard work pays off.On a beautiful sunny Saturday morning, they could finally come up to the stage to receive their precious certificate amidst hearty and rousing applause. The ceremony kicked off with stunning performances by PN Vietnam’s students: amazing traditional dances, songs and even a role-playing game. Then, the representatives of the University of Technology and Education – University of Danang and of PN Vietnam shared thoughtful comments with the graduates, showing their appreciation for the students’ efforts in overcoming all the difficulties to complete the program and become a qualified workforce.
                            PN Vietnam’s students also took this opportunity to give beautiful flowers to academics and partner companies, volunteers and everyone in the public, to thank them for their continuous collaboration and support for PN Vietnam.The ceremony came to its most touching moment when the new graduates presented their hand-writing letters to their beloved families.
                            Then came the most exciting and anticipated part of the event: the Diploma hand-over! Along with swinging music, the students one by one came to the stage with genuine happiness, satisfaction and pride. The three Chancellors were Mr HOANG Dung – Sub Rector of the University of Technology and Education; Ms Maud LHUILLIER – Asia Director of Passerelles numériques; and Mr Arthur AUBREE – Training Manager of Passerelles numériques Vietnam. They could not hide their brightest and proud smiles when handing the diploma to the dear graduates. The Graduation Ceremony marked a significant milestone in the lives of the students of Class 2019. As they raised their graduation hats, the day opened the gate to a new life, independent and full of opportunities. May the graduates keep adding kindness and beauty to the world and continue to develop their dreams and talents!
                            Warmest congratulations to you, PNV19 students!
                            Finally, the ceremony ended with a special performance by the fresh graduates as a gift to everyone who supported them during those three memorable years.',
                'img' => 'https://i.ibb.co/1zRpX92/72e32ddd-5070-43d1-9d45-e9b9f8959e37.jpg  ',
                'users_like' => 1
            ]
        ];
        try {
            foreach ($data as $item) {
                News::create($item);
            }

        } catch (\Throwable $th) {
        }
    }
}
