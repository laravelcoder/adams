<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service' => 'Personal Injury',
                'intro' => 'In our many years\' experience as personal injury Trial lawyers in Utah, we have obtained verdicts and settlements for thousands of clients, inside and outside the courtroom.',
                'upper_content' => '<p>Personal injury claims and lawsuits arise when people are injured by careless or intentional acts of others, or injured by products that are defective in some way. When someone is determined to be legally responsible for injuring someone else, they are liable for the injury, and may be made to pay the injured person compensatory damages. Compensatory damages attempt to put an injured person back in the position he or she was in before being injured. Compensatory damages include past and future lost wages, past and future medical expenses, and past and future pain and suffering. In some cases, punitive damages can also be awarded in these lawsuits.</p>

<p>Our firm handles a variety of personal injury claims including those arising out of:</p>

<ul>
<li>Automobile Accidents</li>
<li>Trucking Accidents</li>
<li>Defective or Dangerous Products</li>
<li>Slip and Fall Accidents</li>
<li>Wrongful Death</li>
<li>Work-Related Injuries</li>
</ul>',
                'lower_content' => '<p>Injuries suffered as a result of these types of accidents can be severe and life altering. Our firm understands that your immediate goals after going through such trauma are to get your medical bills paid and covered, make sure you do not suffer financially through any lost wages, and make sure your insurance company will pay for future treatment relating to your injury. Our experienced attorneys will discuss your situation and go over the options available to you, as well as work with insurance companies and other parties involved in your case to make sure all your needs are handled quickly and appropriately.</p>
<p>If you or a loved one has been injured, contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'Personal injury claims and lawsuits arise when people are injured by careless or intentional acts of others, or injured by products that are defective in some way.',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-people-2',
                'updated_at' => '2017-07-07 02:30:27',
                'created_at' => '2017-07-06 19:47:38',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'service' => 'Wrongful Death',
                'intro' => 'We represent grieving families who have lost loved ones due to someone else\'s act of negligence, seeking maximum financial recovery for those families.',
                'upper_content' => '<p>Utah wrongful death laws, generally provide the ability for a decedent’s beneficiaries to file a lawsuit for a death that was caused by a wrongful act or negligence of another. For example, deaths caused by drunk driving, the manufacture of defective or dangerous products, the construction of an unsound structure or building, or failing to diagnose a fatal disease, may trigger wrongful death claims.</p>

<p><strong>The types of damages recoverable in a wrongful death lawsuit are as follows:</strong></p>

<ul>
<li>Loss of anticipated future earnings the deceased would have provided</li>
<li>Lost benefits from the death, e.g. pension or retirement benefits</li>
<li>Expense associated with the death, e.g., medical bills and funeral costs</li>
<li>Loss of inheritance from an untimely death</li>
<li>Pain, suffering or mental anguish suffered by the survivor of the decedent</li>
<li>Loss of companionship, care or protection</li>
<li>Punitive damages, intended to punish wrongdoers and prevent them from harmingothers</li>
</ul>',
                'lower_content' => '<p>If your loved one has died as a result of a wrongful act or negligence of another, you may be eligible to receive compensation under the law. Contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'If your loved one has died as a result of a wrongful act or negligence of another, you may be eligible to receive compensation under the law. 801-888-8888.',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'icon-building',
                'updated_at' => '2017-07-07 02:49:01',
                'created_at' => '2017-07-07 02:49:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'service' => 'Vehicle Accidents',
                'intro' => 'Whether you were rear-ended or hit by a large commercial big rig, our firm exists to represent and protect the rights of all auto accident victims.',
                'upper_content' => '<p>Our firm represents clients who have suffered personal injuries or property damage in automobile, motorcycle or truck accidents. Such motor vehicle accidents include those involving drunk or hit and run drivers, uninsured or underinsured drivers, as well as accidents occurring from motor vehicle, SUV and semi-tractor trailer collisions and rollovers .</p>

<p>We also represent those injured in car accidents, collisions or crashes resulting from defective products or design in automobiles and trucks, such as defective seatbelts, tires or gas tanks.</p>

<p>Injuries suffered as a result of these types of accidents can be severe and life altering. You may have suffered whiplash or burns to your head or neck, have nerve damage or spinal chord paralysis, broken or dislocated a bone or limb, or even have lost the use of a limb. Our firm understands that your immediate goals after going through such trauma are to get your medical bills paid and covered, make sure you do not suffer financially through any lost wages, and make sure your insurance company will pay for future treatment relating to your injury. Our experienced attorneys will discuss your situation and go over the options available to you, as well as work with insurance companies and other parties involved in your case to make sure all your needs are handled quickly and appropriately.</p>',
                'lower_content' => '<p>Under Utah Law you are entitled to certain No-Fault benefits which include some medical insurance benefits which carry no co-pays or deductibles. You may also be entitled to compensation for your lost ability to care for your household due to injuries sustained in the accident. These benefits also come from your own auto insurance policy. When helping clients secure compensation from the at fault driver, we often assist them in collecting their no fault benefits from their own auto policy at no charge.</p>

<p>If you or a loved one has been injured in a motor vehicle accident, contact us online or call us at801-532-9500 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'If you have suffered a personal injury or property damage from a auto accident give us a call today for a free consultation at 801-888-8888.',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-car-collision',
                'updated_at' => '2017-07-07 02:55:41',
                'created_at' => '2017-07-07 02:55:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'service' => 'Brain Injuries',
                'intro' => 'Injuries suffered as a result of TBI can be severe and life altering. If you or a loved one has suffered a brain injury, contact us we can help.',
            'upper_content' => '<p>Each year in the United States an estimated 1.4 million people sustain a traumatic brain injury (TBI) – a blow or jolt to the head, which can disrupt the function of the brain. The severity of a TBI can range from a mild concussion to the extremes of coma or even death. At least 5.3 million Americans currently live with disabilities resulting from TBI. The leading causes of these types of injuries are:</p>

<ul>
<li>Industrial accidents</li>
<li>Vehicle accidents and crashes</li>
<li>Firearm accidents</li>
<li>Slips and/or falls</li>
<li>Nursing home abuse</li>
</ul>',
                'lower_content' => '<p>Injuries suffered as a result of TBI can be severe and life altering. Our firm understands that the immediate goals after going through such trauma are to get medical bills paid and covered, make sure you or your loved one does not suffer financially through any lost wages, and make sure the appropriate insurance company will pay for future treatment relating to the injury. Our experienced attorneys will discuss your situation and go over the options available to you, as well as work with insurance companies and other parties involved in your case to make sure all your needs are handled quickly and appropriately.</p>

<p>If you or a loved one has suffered a brain injury, contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'If you have suffered a brain injury through the act of others, or by a defective product then give us a call today for a free consultation 801-888-8888.',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-brain-inside-human-head',
                'updated_at' => '2017-07-07 02:59:37',
                'created_at' => '2017-07-07 02:59:37',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'service' => 'Catastrophic Injuries',
                'intro' => 'Catastrophic injuries like spinal cord injuries, and burns can be debilitating and even life threatening. We fight to recover compensation for those clients.',
                'upper_content' => '<p>When someone is harmed through the negligent, careless, or wrongful acts of another, The Firm Adams Davis, P.C. can help. Our Salt Lake City personal injury lawyers handle all types of catastrophic injury, construction accident, wrongful death, and vehicle accident cases for clients in Salt Lake City, Holladay, Midvale, Sandy, West Jordan, West Valley City, Draper, Riverton, American Fork, Bluffdale, Kearns, Magna, Ogden and throughout the state of Utah.</p>

<p>Catastrophic injuries change lives. While no amount of recompense can compensate people for life altering injuries, our attorneys have the skill and experience to ensre that individuals and their families receive the financial support necessary to help them move forward with their lives.</p>

<p>We recognize that catastrophic injuries such as paraplegia, quadriplegia, traumatic brain injuries, and amputations impact more than the injured individual. Families that rely on the injred person&rsquo;s financial support are equally affected by catastrophic injuries. When we handle a catastrophic injury case we include the long-term consequences the entire family will face as a result of the catastrophic injury.</p>',
                'lower_content' => '<p>We work with medical professionals, life care planners, vocational rehabilitation experts, accountants, and financial planners to determine all of the effects of catastrophic injuries. While we strive to resolve Utah Catastrophic injury cases without trial, we are among the best trial lawyers in the state and we have the experience and resources to protect our client’s long-term interests.</p>

<p>If you or a loved one has suffered a catastrophic injury, contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options. </p>',
                'meta_description' => 'If you or a loved one have suffered a injury through the act of others, or by a defective product then call us today for a free consultation 801-888-8888.',
                'banner' => NULL,
                'slug' => 'catastrophic-injuries',
                'lang' => 'en',
                'icon_class' => 'flaticon-fire',
                'updated_at' => '2017-07-07 09:15:00',
                'created_at' => '2017-07-07 03:37:14',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'service' => 'Dog Bite Injury',
                'intro' => 'Each year, many innocent children and adults are seriously injured or even suffer wrongful death as a result of dog bite attacks.',
                'upper_content' => '<p>Our firm represents victims who have suffered injury as a result of dog attacks. Dog attacks are a common occurrence in our society, and the sad part is they are usually avoidable. Dog attacks usually occur in public places due to the dog not being kept on a leash. Dogs that are not kept secure in an owners home or yard are also responsible for a large number of dog attacks each year.</p>',
                'lower_content' => '<p>The owner of a dog is primarily responsible for keeping their pet from harming the public. If an owners negligence resulted in you being attacked and injured, you may have a case.</p>

<p>If you or a loved one has been injured from a dog attack, contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'If you have suffered a personal injury through a dog bite then give us a call today for a free consultation 801-888-8888.',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-bite',
                'updated_at' => '2017-07-07 09:21:41',
                'created_at' => '2017-07-07 09:21:41',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'service' => 'Construction Accidents',
                'intro' => 'We represent the rights of Salt lake City construction workers injured by falls, electrocutions, falling debris, and other on-the-job accidents.',
                'upper_content' => NULL,
                'lower_content' => NULL,
                'meta_description' => NULL,
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-accident-8',
                'updated_at' => '2017-07-07 09:22:51',
                'created_at' => '2017-07-07 09:22:51',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'service' => 'Premises Accidents',
                'intro' => 'Slips and falls, negligent security, sidewalk falls, and unsafe building injuries are just a few examples of premises liability cases we handle.',
                'upper_content' => NULL,
                'lower_content' => NULL,
                'meta_description' => NULL,
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-accident-2',
                'updated_at' => '2017-07-07 09:23:31',
                'created_at' => '2017-07-07 09:23:31',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'service' => 'FELA Claims',
            'intro' => 'Compensation claims made under the Federal Employers’ Liability Act (FELA) generally generate significantly higher payouts than claims made under state workers’ compensation.',
                'upper_content' => '<h2>What is a FELA Claims?</h2>

<blockquote>Congress passed FELA in response to the high number of railroad deaths in the late 19th century and early 20th century. Under FELA, railroad workers who are not covered by regular workers&#39; compensation laws are able to sue companies over their injury claims.</blockquote>

<p>The Federal Employees Liability Act (FELA) was enacted by Congress to provide benefits to the railroad workers who sustained injuries in the course and scope of his employment. To recover damages under a FELA claim, the injured worker must establish that the railroad caused or contributed to his accident.</p>',
            'lower_content' => '<p>The injuries that are governed under FELA include: (1) traumatic injuries, such as broken bones and back strain (2) repetitive stress injuries that develop gradually &ndash; such as carpal tunnel syndrome and hearing loss (3) aggravation of pre-existing injuries, (4) occupational diseases &ndash; such as lung cancer, skin diseases and asbestos related diseases.</p>

<p>A claim under FELA must be filed within three (3) years from the date of accident. In the case of repetitive stress or occupational diseases, the statute of limitations of three (3) years begins to run from the time the injured worker knew or should have known that they may have a work related injury. The attorneys at Adams &amp; Davis are experienced in FELA claims.</p>

<p>If you or your loved one has been injured in the course and scope of your employment with the railroad, contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'The attorneys at Adams &amp; Davis are experienced in FELA claims. Call us today for a free consultation at 801-888-8888.',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'icon-themis',
                'updated_at' => '2017-07-07 09:29:52',
                'created_at' => '2017-07-07 09:29:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'service' => 'Semi-truck Accident',
                'intro' => 'After a semi accident, insurance companies and trucking companies immediately contact the people injured in the accident and their families.',
                'upper_content' => '<p>After a semi accident, insurance companies and trucking companies immediately contact the people injured in the accident and their families.</p>

<p>The transportation industry has undergone tremendous growth in the last few years. More and more 18-wheelers, vans and tour buses are sharing the road with passenger vehicles. Crashes involving commercial motor vehicles and passenger vehicles including automobiles, pickup trucks, vans and sport utility vehicles are on the rise. Large trucks account for a 2.3 fatality rate per 100 million miles traveled vs. 1.5 for vehicles. In 2003, almost 5000 persons died in large truck crashes and 122,000 injured. The highest numbers of truck crashes by crash type are rear-end, ran off road/out of lane, side swipe, rollover, turning across path/into path, and intersecting vehicles. The top factors of truck crashes include driver drug use, traveling too fast for conditions, unfamiliar with roadway and fatigue.</p>

<p>Trucks handle about half of the tonnage carried between cities in the United States. With bigger vehicle, freight can be moved at lower cost. The current federal limit is 80,000 pounds that the standard tractor/trailer is allowed to weigh. When an 80,000 pound 18-wheeler runs into a vehicle, it usually results in a substantial crash.</p>

<p>Adams &amp; Davis has successfully litigated cases involving serious injuries and wrongful death from 18-wheeler, tractor-trailer, bus and automobile accidents.</p>',
                'lower_content' => '<h2>WHAT CAN YOU DO?</h2>

<p>Victims of 18-wheeler truck or large commercial motor vehicle collisions deserve an experienced truck accident attorney to represent them against the trucking company and insurance company. An experienced truck accident attorney goes beyond the negligence of the truck driver and investigates the trucking company for negligence in hiring, supervision and entrustment of the 18-wheeler truck.</p>

<p>An attorney with extensive experience and knowledge of 18-wheeler or large commercial motor vehicle litigation can determine, develop and pursue a commercial truck case through extensive discovery, experts in accident reconstruction and trucking, medical consultants and the capture and retrieval of electronic crash data, as well as requesting backup of data produced through satellite systems which many commercial motor vehicles are now equipped.</p>

<p>If you have been in an 18-wheeler or commercial truck accident, contact us online or call us at 801-888-8888 to set up a FREE consultation to discuss your legal options.</p>',
                'meta_description' => 'If you have suffered a personal injury after a semi accident then give us a call today for a free consultation 801-888-8888',
                'banner' => NULL,
                'slug' => NULL,
                'lang' => 'en',
                'icon_class' => 'flaticon-car-collision',
                'updated_at' => '2017-07-07 09:49:29',
                'created_at' => '2017-07-07 09:49:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}