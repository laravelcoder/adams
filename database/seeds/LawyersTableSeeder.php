<?php

use Illuminate\Database\Seeder;

class LawyersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lawyers')->delete();
        
        \DB::table('lawyers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_published' => 0,
                'name' => 'Sam Adams',
                'title' => 'Co-Founder Attorney',
                'intro' => 'Sam Adams is a co-founder of Adams Davis, P.C. and represents plaintiffs in injury cases.',
                'phone' => '801-888-8888',
                'email' => 'sam@adamsdavis.com',
                'upper_content' => '<p>Sam Adams Graduated from the College of Law at the University of Utah. &nbsp;Since that time, he has been a plaintiff&rsquo;s lawyer and has successfully arbitrated, mediated and tried numerous lawsuits on behalf of his clients.</p>',
                'lower_content' => '<p>At the end of 2007, Sam Adams and his partner, Darren Davis, founded the law firm of Adams Davis, P.C. to enhance the service that they provide to their personal injury clients. He enjoys being a community activist and has served as the Park City Bar President.</p>',
                'bio' => NULL,
                'meta_description' => 'Sam Adams has successfully arbitrated, mediated and tried numerous lawsuits on behalf of his clients.',
                'facebook' => NULL,
                'twitter' => NULL,
                'googleplus' => NULL,
                'youtube' => 'https://www.youtube.com/watch?v=MuEIGNsJwOA',
                'image' => '02.png',
                'banner' => NULL,
                'slug' => 'sam-adams',
                'status' => 'Published',
                'lang' => 'en',
                'video' => 'https://www.youtube.com/watch?v=MuEIGNsJwOA',
                'video2' => NULL,
                'video3' => NULL,
                'order_column' => NULL,
                'created_at' => '2017-07-10 00:25:31',
                'updated_at' => '2018-02-09 06:09:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'is_published' => 0,
                'name' => 'Darren Davis',
                'title' => 'Co-Founder Attorney',
                'intro' => 'Darren Davis is a co-founder of Adams Davis, P.C. and represents plaintiffs in injury cases.',
                'phone' => '801-888-8888',
                'email' => 'darren@adamsdavis.com',
                'upper_content' => '<p>&nbsp;He has tried numerous cases to significant plaintiff verdicts and has achieved multi-million dollar settlements on behalf of the injured. &nbsp;Mr. Davis specializes in the litigation of injuries arising from traffic incidents, industrial accidents, medical malpractice, and defective products. &nbsp;</p>',
                'lower_content' => '<p>He lectures often at legal seminars on variety of topics including trial practice, damages and litigation of injury claims. &nbsp;He has recently been recognized as one of Utah&rsquo;s top personal injury lawyers by his peers in Utah Business Magazine.</p>',
                'bio' => '<p>Darren Davis is a co-founder of Adams Davis, P.C. and represents plaintiffs in injury cases. He is a member of the Utah and Louisiana Bar.</p>',
                'meta_description' => 'Darren Davis specializes in the litigation of injuries arising from traffic incidents, industrial accidents, medical malpractice, and defective products.',
                'facebook' => NULL,
                'twitter' => NULL,
                'googleplus' => NULL,
                'youtube' => 'https://www.youtube.com/watch?v=AUADcaUy3cc',
                'image' => 'darrendavis.png',
                'banner' => NULL,
                'slug' => 'darren-davis',
                'status' => 'Published',
                'lang' => 'en',
                'video' => 'https://www.youtube.com/watch?v=AUADcaUy3cc',
                'video2' => NULL,
                'video3' => NULL,
                'order_column' => NULL,
                'created_at' => '2017-07-10 02:10:23',
                'updated_at' => '2018-02-09 06:10:03',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'is_published' => 0,
                'name' => 'Michel Banks',
                'title' => 'Associate Attorney',
                'intro' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et.',
                'phone' => '801-888-8888',
                'email' => 'mike@adamsdavis.com',
                'upper_content' => '<p>Mike is an avid vintage motorcycle and car enthusiast. Mike has restored several Volkswagen Beetles, Vespa Scooters, Honda Cubs, and is currently restoring a Ural Russian Sidecar Motorcycle. Mike&rsquo;s work ethic is unparalleled. At the age of seven Mike started delivering the Green Sheet Newspaper, and has worked hard ever since. This experience taught him that rewards are tied directly to hard work and follow through. At the age of seven, he was responsible for delivering newspapers, and collecting the subscription charges. Mike was entrusted with the Newspaper&rsquo;s collections, and his pay was determined by the results he obtained for the paper.</p>',
                'lower_content' => '<p>Mike&rsquo;s work ethic and curiosity have served him well in his path to becoming a lawyer. &nbsp;Mike worked full time as a debt collector as he worked his way through college. &nbsp;Mike earned two bachelor&rsquo;s degrees from the University of Utah in less than 3 years. &nbsp;Mike went on to attend law school at Willamette University. &nbsp;He attended additional summer courses at the University of Oregon so that he could finish law school early to time the completion of his graduate studies with his wife&rsquo;s completion of graduate school. &nbsp;During law school Mike worked as a law clerk for Oregon&rsquo;s Office of Administrative Hearings, researching and writing about extremely complex issues involved in the Klamath Basin Water Rights Adjudication. &nbsp;</p>

<p>After law school, Mike returned to Utah to begin practicing law. &nbsp;His first job as a licensed attorney was managing the legal intake process of Robert J. DeBry &amp; Associates. &nbsp;Michael was very successful in this job, and quickly advanced to a position handling complex and difficult litigation cases within DeBry&rsquo;s office. &nbsp;Working at DeBry allowed Mike to gain tons of experience quickly. &nbsp;Mike has tried more cases to a jury than almost any other accident lawyer of his age. &nbsp;Mike was intimately involved in a team of lawyers who obtained a verdict of $58,500,000.00 for the family of a man who was killed in an auto accident.&nbsp;</p>

<p>Mike left Robert J. DeBry &amp; Associates in 2015 to join Adams Davis, P.C. because he wanted to have a practice that focused more on clients as individuals. &nbsp;Michael enjoys working at Adams Davis because it allows him the time he needs to prepare well for his cases, and visit with his clients as individuals.&nbsp;<br />
&nbsp;<br />
One of the most influential moments in Mike&rsquo;s life in the legal profession occurred during his first semester of law school. &nbsp;In a class of more than 80 students, Mike was completely impressed when Professor Carlton Snow came into class the first day, knowing all of the students, whom he had never met, by name and background. &nbsp;Professor Snow had taken the time to pull the admissions files of all of his students, and memorize their names and background information. &nbsp;When he called on a student during class, the student commented on the fact that Professor Snow knew all about him. &nbsp;Professor Snow stopped and told the class: &ldquo;Life to me is about people.&rdquo; &nbsp;Professor Snow died before the end of the semester, but Mike thinks about this lesson frequently.</p>

<p>Practicing law at Adams Davis, P.C. allows Mike to focus on people, his clients, as opposed to marketing concerns, and numbers.<br />
&nbsp;</p>',
                'bio' => 'Mike began working in his grandfather’s shop at the age of twelve.  He learned discipline and the benefits of hard work while carrying five-gallon buckets to and from the fleet of semi’s serviced by his grandfather’s business.

Mike has always been curious, and eager to learn and explain.  As a child, Mike went through his family’s home, and systematically dismantled everything he could.  He took the legs off the family table.  He dismantled his father’s exercise bike.  He took apart his brother’s drum set.  He disassembled the lawnmower.  At some point, the problem became so severe that Mike’s dad brought an extremely large broken guitar amp home from his music store, and instructed Mike to disassemble the amp completely, including removing each and every resistor soldered to the circuitry of the amp.  There was no stopping Mike’s curiosity, so his dad had no choice but to engage the curiosity and provide inexpensive ways to encourage it.',
                'meta_description' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'googleplus' => NULL,
                'youtube' => NULL,
                'image' => 'michelbanks.png',
                'banner' => NULL,
                'slug' => 'michel-banks',
                'status' => 'Published',
                'lang' => 'en',
                'video' => NULL,
                'video2' => NULL,
                'video3' => NULL,
                'order_column' => NULL,
                'created_at' => '2018-02-05 18:12:47',
                'updated_at' => '2018-02-09 05:23:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'is_published' => 0,
                'name' => 'York Major',
                'title' => 'Associate Attorney',
                'intro' => 'A senior trial lawyer of Adams Davis, York Major is actively devoted to working with victims and their families in personal injury cases.',
            'phone' => '(801) 532-9500',
                'email' => 'york@adamsdavis.com',
                'upper_content' => '<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">A senior trial lawyer of Adams Davis, York Major is actively devoted to working with victims and their families in personal injury cases in the areas of auto accidents, semi-truck accidents, wrongful death cases, catastrophic accidents, DUI/DWI injury accidents, complex tort cases, insurance bad faith, insurance wrongful denial claims, work injuries, motorcycle crashes, boating accidents, bicycle accidents, pedestrian accidents, dog bites/other animal attacks, and workers compensation claims. &nbsp;</span></span></span></p>',
            'lower_content' => '<p><span style="font-size:12.0pt">Mr. Major is a graduate of Utah State University, and received his juris doctorate (J.D.) degree from The George Washington University Law School in Washington, D.C. He is bilingual in English/Spanish, and when not working in the office enjoys being outside in Utah&rsquo;s great outdoors.</span></p>',
                'bio' => '<p><span style="font-size:12.0pt">York brings with him many years of accomplished legal knowledge and extensive trial experience in Utah, including jury trials, jury awards, negotiation, arbitration, mediation, voluntary settlements, law practice management, and marketing.  He has successfully resolved numerous claims and lawsuits, and has recovered millions of dollars in compensation on behalf of his clients. York is highly regarded and widely respected by his clients and legal peers as a trial lawyer, and his representation and consultation is regularly requested. He is tirelessly dedicated to insuring that injured victims receive the maximum compensation that they deserve. </span></p>

<p> </p>',
                'meta_description' => 'A senior trial lawyer of Adams Davis, York Major is actively devoted to working with victims and their families in personal injury cases.',
                'facebook' => NULL,
                'twitter' => NULL,
                'googleplus' => NULL,
                'youtube' => NULL,
                'image' => '04.png',
                'banner' => NULL,
                'slug' => 'york-major',
                'status' => 'Published',
                'lang' => 'en',
                'video' => NULL,
                'video2' => NULL,
                'video3' => NULL,
                'order_column' => NULL,
                'created_at' => '2018-02-05 21:20:01',
                'updated_at' => '2018-02-06 04:18:40',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'is_published' => 0,
                'name' => 'Christian Cueva',
                'title' => 'Associate Attorney',
                'intro' => 'Christian Cueva practice focuses on representing individuals against the faceless machinery of Insurance Companies, Corporations, and the State.',
                'phone' => '801-888-8888',
                'email' => 'christian@adamsdavis.com',
                'upper_content' => '<p>Christian Cueva is an associate at Adams Davis. His practice focuses on representing individuals against the faceless machinery of Insurance Companies, Corporations, and the State. His background and roots come from Latin America and extensive and frequent contact with the Latino community in Utah. Christian considers it to be one of the greatest privileges of being a lawyer to be able to meaningfully fight for people who cannot otherwise fight for themselves. In his experience, there is no greater meaning than service to others. &nbsp;He also holds a Masters in Public Policy. In his free time, Christian enjoys playing basketball, tennis, and soccer.</p>',
                'lower_content' => NULL,
                'bio' => 'Coming soon',
                'meta_description' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'googleplus' => NULL,
                'youtube' => NULL,
                'image' => 'christiancueva.png',
                'banner' => NULL,
                'slug' => 'christian-cueva',
                'status' => 'Published',
                'lang' => 'en',
                'video' => NULL,
                'video2' => NULL,
                'video3' => NULL,
                'order_column' => NULL,
                'created_at' => '2018-02-09 03:46:59',
                'updated_at' => '2018-02-09 03:46:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}