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
                'email' => 'sam@samadams.com',
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
                'updated_at' => '2018-02-06 04:18:56',
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
                'email' => 'darren@samsdavis.com',
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
                'updated_at' => '2018-02-06 04:18:15',
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
                'email' => 'coming@soon.com',
                'upper_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim. Pellentesque eget.</p>',
                'lower_content' => NULL,
                'bio' => NULL,
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
                'updated_at' => '2018-02-06 04:19:18',
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