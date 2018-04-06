@extends('master') @section('content')
<!-- Content -->
<div class="row content">

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="breadcrumbs">
            <p>
                <a href="index.html">Home</a>
                <i class="icons icon-right-dir"></i> Contact</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="main-content col-lg-12 col-md-12 col-sm-12">


        <div class="row">

            <div class="col-lg-7 col-md-7 col-sm-7">

                <div class="carousel-heading no-margin">
                    <h4>Contact Information</h4>
                </div>

                <div class="page-content contact-info">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10538.627900404104!2d106.7036713495757!3d10.80169390503166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2sHutech+University!5e0!3m2!1svi!2s!4v1523000235069"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-item green">
                                <i class="icons icon-location-3"></i>
                                <p>475A Điện Biên Phủ S,
                                    <br> Glasgow, D04 89GR.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-item blue">
                                <i class="icons icon-mail"></i>
                                <p>
                                    <a href="https://www.hutech.edu.vn/">hutech.edu.vn</a>
                                    <br>
                                    <a href="#">hutech@edu.vn</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-item orange">
                                <i class="icons icon-phone"></i>
                                <p>028 5445 7777</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-item purple">
                                <i class="icons icon-clock"></i>
                                <p>Thứ 2 - Thứ 6: 08.00-20.00
                                    <br> Thứ 7: 09.00-15.00
                                    <br> Chủ nhật: closed</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>




            <div class="col-lg-5 col-md-5 col-sm-5">

                <div class="carousel-heading no-margin">
                    <h4>Contact Form</h4>
                </div>

                <div class="page-content contact-form">

                    <form id="contact-form" action="{{route('trang-chu')}}">

                        <label>Name(required)</label>
                        <input name="contact-name" type="text">

                        <label>Email(required)</label>
                        <input name="contact-email" type="text">

                        <label>Subject</label>
                        <input name="contact-subject" type="text">

                        <label>Message</label>
                        <textarea name="contact-message"></textarea>

                        <input class="big" type="submit" value="Send Message">

                    </form>

                </div>

            </div>


        </div>

    </section>
    <!-- /Main Content -->


</div>
<!-- /Content -->
<!-- /Content -->
@endsection