<x-layout>
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">About</a>
            </div>
        </div>
    </div>

    @include('partials._about')

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5"></div>
            <div class="row g-5">
                <div>
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">BoldTech ICT Solutions</h5>
                        <h1 class="mb-0">Our Track Record</h1>
                    </div>
                </div>

                <div class="col-lg-6">

                    <p class="mb-4">The expertise at BoldTech is more than technical. We have successfully supported
                        ICT4D and digital solutions projects in agriculture, education, entrepreneurship and health from
                        the conception stages to finalization.
                    </p>
                    <p class="mb-4">
                        We partnered with International Institute for Communication and Development (IICD) and ACDEP in
                        ICT for Agric projects.
                    </p>


                </div>
                <div class="col-lg-6">
                    <p class="mb-4">
                        We also worked with CordAid and CHAG in ICT for Health projects. In ICT for Education projects
                        we partnered with C4C and Edukans
                    </p>
                    <p class="mb-4">
                        hroughout Africa we have footprints with CROMABU (Tanzania), Tanzania Telecenter Network (TTN)
                        (Tanzania), I-Network (Uganda), FIT resources (Kenya), flawless events (Ethiopia), Don Bosco
                        Youth
                        Technical Institute (Malawi), APC and Genardis (South Africa) among many more.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 d-flex justify-content-space_betwen">
        <div style="width: 50%">
            <div class="section-title position-relative pb-3 mb-5">
                <h5 class="fw-bold text-primary text-uppercase">Our Mission</h5>
            </div>
            <p class="mb-4">Our mission is to provide end-to-end ICT solutions to a wide clientele base with emphasis
                on quality and timeliness.</p>
        </div>
        <div style="width: 50%">
            <div class="section-title position-relative pb-3 mb-5">
                <h5 class="fw-bold text-primary text-uppercase">Our Vision</h5>
            </div>
            <p class="mb-4">We intend to provide our customers with the best ICT experience from beginning to end,
                with a smart, knowledgeable staff who deliver on services with speed, accuracy and customer
                friendliness.</p>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/boldtech.png') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Our Core Values</h5>
                        <h1 class="mb-0">Building a Foundation of Trust: Our Core Values as an IT Company</h1>
                    </div>
                    {{-- <p class="mb-4">BoldTech is an information communications technology focused entity. We have over
                        the
                        years provided end-to-end services to a growing number of clients within and outside the shores
                        of
                        Ghana.</p> --}}
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Innovation</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Team Work</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Responsibility</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Integrity</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Service</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+233 233 991 199</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request
                        A
                        Quote</a>
                </div>

            </div>
        </div>
    </div>

    @include('partials._team')

    @include('partials._partners')
</x-layout>
