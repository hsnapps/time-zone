@extends('layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('parts.hero')
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        @include('parts.about')
        <!-- End About Section -->

        <!-- ======= Values Section ======= -->
        @include('parts.valules')
        <!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        @include('parts.counts')
        <!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        @include('parts.features')
        <!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        @include('parts.services')
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        @include('parts.pricing')
        <!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        @include('parts.faq')
        <!-- End F.A.Q Section -->

        <!-- ======= Portfolio Section ======= -->
        @include('parts.portfolio')
        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        @include('parts.testimonials')
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        @include('parts.team')
        <!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        @include('parts.clients')
        <!-- End Clients Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        @include('parts.posts')
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        @include('parts.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('parts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
