@extends('user.part.master')
@section('title', 'Contact')
@section('contact-active', 'active')

@section('content')
@include('user.part.hero',['name'=>'Contact'])

    <div class="contact-us padding-large">
        <div class="container">
            <div class="row">
                <div class="contact-info col-lg-6 pb-3">
                    <h2 class="display-7 text-uppercase text-dark">Contact info</h2>
                    <p>Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
                    <div class="page-content d-flex flex-wrap">
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box text-dark pe-4 mb-5">
                                <h3 class="card-title text-uppercase text-decoration-underline">Office</h3>
                                <div class="contact-address pt-3">
                                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 321</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 654</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">ministore@yourinfo.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="content-box">
                                <h3 class="card-title text-uppercase text-decoration-underline">Management</h3>
                                <div class="contact-address pt-3">
                                    <p>730 Glenstone Ave 65802, Springfield, US</p>
                                </div>
                                <div class="contact-number">
                                    <p>
                                        <a href="#">+123 987 321</a>
                                    </p>
                                    <p>
                                        <a href="#">+123 123 654</a>
                                    </p>
                                </div>
                                <div class="email-address">
                                    <p>
                                        <a href="#">ministore@yourinfo.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inquiry-item col-lg-6">
                    <h2 class="display-7 text-uppercase text-dark">Any questions?</h2>
                    <p>Use the form below to get in touch with us.</p>
                    <form id="form" class="form-group flex-wrap" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="form-input col-lg-12 d-flex mb-3">
                            <input type="text" name="name" placeholder="Write Your Name Here"
                                class="form-control ps-3 me-3 mb-3">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                <input type="text" name="email" placeholder="Write Your Email Here"
                                class="form-control ps-3 mb-3">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="phone" placeholder="Phone Number" class="form-control ps-3">
                        </div>
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                        <div class="col-lg-12 mb-3">
                            <input type="text" name="subject" placeholder="Write Your Subject Here"
                                class="form-control ps-3">
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                            </div>
                        <div class="col-lg-12 mb-3">
                            <textarea name="message" placeholder="Write Your Message Here" class="form-control ps-3" style="height:150px;"></textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />

                        </div>
                        <button type="submit" class="btn btn-dark btn-medium text-uppercase btn-rounded-none">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id="our-store" class="padding-large no-padding-top">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-lg-6">
                    <div class="image-holder mb-5">
                        <img src="images/single-image2.jpg" alt="our-store" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="locations-wrap">
                        <div class="display-header">
                            <h2 class="display-7 text-uppercase text-dark">Our stores</h2>
                            <p>You can also directly buy products from our stores.</p>
                        </div>
                        <div class="location-content d-flex flex-wrap">
                            <div class="col-lg-6 col-sm-12">
                                <div class="content-box text-dark pe-4 mb-5">
                                    <h3 class="card-title text-uppercase text-decoration-underline">Office</h3>
                                    <div class="contact-address pt-3">
                                        <p>730 Glenstone Ave 65802, Springfield, US</p>
                                    </div>
                                    <div class="contact-number">
                                        <p>
                                            <a href="#">+123 987 321</a>
                                        </p>
                                        <p>
                                            <a href="#">+123 123 654</a>
                                        </p>
                                    </div>
                                    <div class="email-address">
                                        <p>
                                            <a href="#">ministore@yourinfo.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="content-box">
                                    <h3 class="card-title text-uppercase text-decoration-underline">USA</h3>
                                    <div class="contact-address pt-3">
                                        <p>730 Glenstone Ave 65802, Springfield, US</p>
                                    </div>
                                    <div class="contact-number">
                                        <p>
                                            <a href="#">+123 987 321</a>
                                        </p>
                                        <p>
                                            <a href="#">+123 123 654</a>
                                        </p>
                                    </div>
                                    <div class="email-address">
                                        <p>
                                            <a href="#">ministore@yourinfo.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
