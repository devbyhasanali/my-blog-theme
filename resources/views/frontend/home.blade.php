@extends('frontend.layouts.app')

@section('content')
@include('frontend.partials.sidebar')
@include('frontend.partials.banner-advertisement')

<!-- ======================= Blog Start  ============================ -->
<div class="blog_section bg-white overflow-hidden pt-4 pb-4">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-xl-3 order-xl-2">
                <div class="blog_sidebar">
                    <div class="p-3 p-xl-4 border rounded">
                        <div class="card_header mb-4">
                            <h3>Categories</h3>
                        </div>
                        <div class="categories_list">
                            <ul>
                                <li><a href="#">Technology (1)</a></li>
                                <li><a href="#">Health & Wellness (1)</a></li>
                                <li><a href="#">Travel (1)</a></li>
                                <li><a href="#">Food & Recipes (1)</a></li>
                                <li><a href="#">Lifestyle (1)</a></li>
                                <li><a href="#">Finance (1)</a></li>
                                <li><a href="#">Education (1)</a></li>
                                <li><a href="#">Entertainment (1)</a></li>
                                <li><a href="#">Sports (1)</a></li>
                                <li><a href="#">Fashion (1)</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-3 p-xl-4 border rounded mt-2">
                        <div class="card_header mb-4">
                            <h3>Latest Posts</h3>
                        </div>
                        <div class="latestpost_list">
                            <ul>
                                <li><a href="#">BMW car price updated 2024</a></li>
                                <li><a href="#">BMW ECU Cloning</a></li>
                                <li><a href="#">ECU Remaping of Toyota</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Posts -->
            <div class="col-xl-9 order-xl-1">
                <div class="blog_wrapper">
                    <div class="row gy-4">

                        <!-- Blog Post -->
                        <div class="col-md-6">
                            <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                                <div class="blog_img mb-4">
                                    <a href="{{ route('blog') }}">
                                        <img class="img-fluid rounded"
                                             src="{{ asset('frontend/assets/images/blog/car.jpg') }}"
                                             alt="Blog">
                                    </a>
                                </div>

                                <div class="blog_content card-body p-0">
                                    <div class="short_info d-flex align-items-center mb-3">
                                        <div class="me-3 d-flex align-items-center">
                                            <img src="{{ asset('frontend/assets/images/tag.svg') }}" class="me-1">
                                            <span>Health & Wellness</span>
                                        </div>
                                        <div class="me-3 d-flex align-items-center">
                                            <img src="{{ asset('frontend/assets/images/calendar.svg') }}" class="me-1">
                                            <span>20 Nov, 2024</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('frontend/assets/images/eye.svg') }}" class="me-1">
                                            <span>1297</span>
                                        </div>
                                    </div>

                                    <h3 class="mb-3">
                                        <a href="{{ route('blog') }}">
                                            Exploring Italy with the Top Premium Car Rental Services
                                        </a>
                                    </h3>

                                    <div class="blog_desc">
                                        When it comes to experiencing the beauty and charm of Italy, there's no better
                                        way to explore its pi...
                                    </div>
                                </div>

                                <hr>

                                <div class="card-footer bg-transparent border-0 p-0">
                                    <a class="learn_more" href="{{ route('blog') }}">Read More</a>
                                </div>
                            </div>
                        </div>

                        {{-- Repeat same structure for other posts --}}

                    </div>

                    <div class="btn-readmore mt-5 text-center">
                        <a class="btn btn-primary" href="{{ route('blog') }}">See More Post</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ======================= Blog End  ============================ -->


@endsection
