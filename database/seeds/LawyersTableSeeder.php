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
                'name' => 'Sam Adams',
                'title' => 'Co-Founder Attorney',
                'phone' => '801-888-8888',
                'email' => 'sam@samadams.com',
                'upper_content' => '<p>Sam Adams Graduated from the College of Law at the University of Utah. &nbsp;Since that time, he has been a plaintiff&rsquo;s lawyer and has successfully arbitrated, mediated and tried numerous lawsuits on behalf of his clients.</p>',
                'lower_content' => '<p>At the end of 2007, Sam Adams and his partner, Darren Davis, founded the law firm of Adams Davis, P.C. to enhance the service that they provide to their personal injury clients. He enjoys being a community activist and has served as the Park City Bar President.</p>',
                'bio' => NULL,
                'meta_description' => 'Sam Adams has successfully arbitrated, mediated and tried numerous lawsuits on behalf of his clients.',
                'image' => NULL,
                'banner' => NULL,
                'slug' => 'sam-adams',
                'status' => 'Published',
                'lang' => 'en',
                'video' => 'https://www.youtube.com/watch?v=MuEIGNsJwOA',
                'video2' => NULL,
                'video3' => NULL,
                'created_at' => '2017-07-10 00:25:31',
                'updated_at' => '2017-07-10 02:12:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Darren Davis',
                'title' => 'Co-Founder Attorney',
                'phone' => '801-888-8888',
                'email' => 'darren@samsdavis.com',
                'upper_content' => '<p>&nbsp;He has tried numerous cases to significant plaintiff verdicts and has achieved multi-million dollar settlements on behalf of the injured. &nbsp;Mr. Davis specializes in the litigation of injuries arising from traffic incidents, industrial accidents, medical malpractice, and defective products. &nbsp;</p>',
                'lower_content' => '<p>He lectures often at legal seminars on variety of topics including trial practice, damages and litigation of injury claims. &nbsp;He has recently been recognized as one of Utah&rsquo;s top personal injury lawyers by his peers in Utah Business Magazine.</p>',
                'bio' => 'Darren Davis is a co-founder of Adams Davis, P.C. and represents plaintiffs in injury cases.  He is a member of the Utah and Louisiana Bar.',
                'meta_description' => 'Darren Davis specializes in the litigation of injuries arising from traffic incidents, industrial accidents, medical malpractice, and defective products.',
                'image' => NULL,
                'banner' => NULL,
                'slug' => 'darren-davis',
                'status' => 'Published',
                'lang' => 'en',
                'video' => 'https://www.youtube.com/watch?v=AUADcaUy3cc',
                'video2' => NULL,
                'video3' => NULL,
                'created_at' => '2017-07-10 02:10:23',
                'updated_at' => '2017-07-10 02:10:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}