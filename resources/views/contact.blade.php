@extends('layouts.base')

@section('title')
Contact Adams Davis
@endsection

@section('content')

<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Contact Us</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls page_map" data-address="35 W. Broadway Suite 203, Salt Lake City, UT">
    <!-- marker description and marker icon goes here -->
    <!-- All design from main.js-->
    <div class="map_marker_description">
        <h3>Adams Davis</h3>
        <p>35 W Broadway # 203, Salt Lake City, UT 84101</p>
        <img  class="map_marker_icon" src="{!! asset('/images/if_map-marker.png') !!}" alt="">
    </div>
</section>
<!--To load from JS use below section-->
<!--<section id="map">
        
</section>-->

<section class="ls ms columns_padding_25 section_padding_top_100 section_padding_bottom_100">
    <div class="container">
        <div class="row">

            <div class="col-md-8 to_animate" data-animation="scaleAppear">

                <h2 class="section_header highlight">Contact Form</h2>

                <form id="sendrequest" onsubmit="return sendrequest()">
                    <div class="row columns_margin_bottom_30">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first-name" class="sr-only">First Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" required="" value="" name="first_name" id="first-name" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last-name" class="sr-only">Last Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" required="" value="" name="last_name" id="last-name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="sr-only">Your E-Mail</label>
                                <input type="text" size="30" aria-required="true" required="" value="" name="email" id="email" class="form-control" placeholder="Your E-Mail">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone" class="sr-only">Phone Number
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" required="" value="" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group select-group">
                                <label for="phone" class="sr-only">Practice Area
                                    <span class="required">*</span>
                                </label>
                                <div class="input-group">
                                    <select aria-required="true" required="" id="month" name="practce_area" class="choice empty form-control">
                                        <option value="" disabled selected data-default>Practice Area</option>
                                        <option value="Personal Injury">Personal Injury</option>
                                        <option value="Wrongful Death">Wrongful Death</option>
                                        <option value="Vehicle Accidents">Vehicle Accidents</option>
                                        <option value="Catastrophic Injuries">Catastrophic Injuries</option>
                                        <option value="Dog Bite Injuries">Dog Bite Injuries</option>
                                        <option value="Construction Accidents">Construction Accidents</option>
                                        <option value="Premises Accidents">Premises Accidents</option>
                                        <option value="Brain Injuries">Brain Injuries</option>
                                        <option value="FELA Claims">FELA Claims</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="comment" class="sr-only">Your Message</label>
                                <textarea rows="5" cols="45" name="message" id="comment" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <p class="form-submit">
                        <button type="submit" id="submit" name="submit" class="theme_button color1">Send request</button>
                    </p>
                </form>

            </div>
            <!--.col-* -->

            <div class="col-md-4 to_animate" data-animation="scaleAppear">

                <h2 class="section_header highlight bottommargin_40">Contact Info</h2>

                <div class="small-teaser media">
                    <div class="media-left">
                        <i class="highlight fa fa-map-marker"></i>
                    </div>
                    <div class="media-body">
                        35 W. Broadway Suite 203, Salt Lake City, UT
                    </div>
                </div>

                <div class="small-teaser media">
                    <div class="media-left">
                        <i class="highlight fa fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        contact@adamsdavis.com
                    </div>
                </div>

                <div class="small-teaser media">
                    <div class="media-left">
                        <i class="highlight fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        801-888-8888
                    </div>
                </div>

                <div class="small-teaser media">
                    <div class="media-left">
                        <i class="highlight fa fa-clock-o"></i>
                    </div>
                    <div class="media-body">
                        24 hours a day, 7 days a week
                    </div>
                </div>

            </div>
            <!--.col-* -->

        </div>
        <!--.row -->

    </div>
    <!--.container -->

</section>
<!-- Google Map Script -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
<script>

                    function sendrequest() {
                        // do the extra stuff here
                        $('#requestsent').hide();
                        $.ajax({
                            type: "POST",
                            url: "contact/sendrequest",
                            data: $("#sendrequest").serialize() + "&_token={{ csrf_token() }}",
                            success: function (data) {
                                $('#sendrequest')[0].reset()
                                $('#sendrequest').prepend('<div id="requestsent" class="alert alert-success" style="padding:0">' + data + '</div>');
                                setTimeout(function () {
                                    $('#requestsent').hide();
                                }, 30000);
                            }
                        });
                        return false;
                    }
</script>
@endsection


@section('seo')
@endsection

@section('json-ld')
@endsection
