<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

        <div class="col-lg-4">
            <div class="content px-xl-5">
                <h3>{{ $layoutGroup->title }}</h3>
                {!! $layoutGroup->description !!}
            </div>
        </div>

        <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                @foreach ($layouts as $key => $layout)
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $key+1 }}">
                                <span class="num">{{ $key+1 }}.</span>
                                {{ $layout->title }}
                            </button>
                        </h3>
                        <div id="faq-content-{{ $key+1 }}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                {!! $layout->description !!}
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                @endforeach
            </div>

        </div>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->