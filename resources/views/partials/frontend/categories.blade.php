
<!-- featured -->
<section>
    <div class="container">

        <!-- if shadow used, do not use .rounded - will cause on zoom a visible image background -->
        <div class="overflow-hidden">
            <div class="row">

                <!-- left -->
                <div class="col-12 col-md-3 m-0 p-0">

                    <div class="row m-0 p-0">

                        @foreach($allCategories as $index => $category)
                            @if($index === 0)
                                <div class="col-6 col-md-12 m-0 p-0 border bt--0 bb--0 bl--0">

                                    <a href="/categories/{{ $category->slug }}  "
                                       class="position-relative d-block py-4 text-center overlay-dark-hover overlay-opacity-9 text-decoration-none transition-hover-zoom-img overflow-hidden show-hover-container-all">

                                        <!-- image -->
                                        <img class="img-fluid max-h-180"
                                             src="/assets/img/categories/medium/{{ $category->image }}" alt="{{ $category->name }}">


                                        <h3 class="h6 text-dark mt-4">
                                            {{ $category->name }}

                                            <small class="d-block text-uppercase mt-1">
                                                COLLECTION
                                            </small>
                                        </h3>

                                        <!-- on mouse over -->
                                        <span
                                            class="position-absolute top-0 bottom-0 left-0 right-0 text-center text-white z-index-3 d-flex align-items-center justify-content-center show-hover-item-all animate-fadein">
												 {{ $category->name }}
											</span>

                                    </a>

                                </div>
                            @endif


                            <div class="hidden-sm-down col-6 col-md-12 m-0 p-0">

                                <hr class="m-0">

                            </div>

                            @if($index === 1)
                                <div class="col-6 col-md-12 m-0 p-0 border bt--0 bb--0 bl--0 border-none-sm-end">

                                    <a href="/categories/{{ $category->slug }}"
                                       class="position-relative d-block py-4 text-center overlay-dark-hover overlay-opacity-9 text-decoration-none transition-hover-zoom-img overflow-hidden show-hover-container-all">

                                        <!-- image -->
                                        <img class="img-fluid max-h-180"
                                             src="/assets/img/categories/medium/{{ $category->image }}" alt="{{ $category->name }}">

                                        <h3 class="h6 text-dark mt-4">
                                            {{ $category->name }}

                                            <small class="d-block text-uppercase mt-1">
                                                SHOES
                                            </small>
                                        </h3>

                                        <!-- on mouse over -->
                                        <span
                                            class="position-absolute top-0 bottom-0 left-0 right-0 text-center text-white z-index-3 d-flex align-items-center justify-content-center show-hover-item-all animate-fadein">
												     {{ $category->name }}
											</span>

                                    </a>

                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>
                <!-- /left -->


                <!-- center -->
                <div class="col-12 col-md-6 m-0 p-0">

                    <hr class="m-0 hidden-md-up">
                    @foreach($allCategories as $index => $category)
                        @if($index === 2)
                            <a href="/categories/{{ $category->slug }}"
                               class="position-relative h-100 d-flex align-items-center text-center overlay-dark-hover overlay-opacity-9 text-decoration-none transition-hover-zoom-img show-hover-container-all">
                                <div class="overflow-hidden px-5 py-4 w-100">

                                    <!-- image -->
                                    <div class="animate-shine">
                                        <img class="img-fluid max-h-450"
                                             src="/assets/img/categories/medium/{{ $category->image }}" alt="{{ $category->name }}">
                                    </div>

                                    <h2 class="h6 mt-4 text-dark">
                                        {{ $category->name }}
                                    </h2>

                                </div>

                                <!-- on mouse over -->
                                <span
                                    class="position-absolute top-0 bottom-0 left-0 right-0 text-center text-white z-index-3 d-flex align-items-center justify-content-center show-hover-item-all animate-fadein">
										     {{ $category->name }}
									</span>

                            </a>
                        @endif
                    @endforeach
                    <hr class="m-0 d-block d-md-none">

                </div>
                <!-- /center -->


                <!-- right -->
                <div class="col-12 col-md-3 m-0 p-0">

                    <div class="row m-0 p-0">
                        @foreach($allCategories as $index => $category)
                            @if($index === 3)
                                <div class="col-6 col-md-12 m-0 p-0 border bt--0 bb--0 br--0 border-none-sm-start">


                                    <a href="/categories/{{ $category->slug }}"
                                       class="position-relative d-block py-4 text-center overlay-dark-hover overlay-opacity-9 text-decoration-none transition-hover-zoom-img overflow-hidden show-hover-container-all">

                                        <!-- image -->
                                        <img class="img-fluid max-h-180"
                                             src="/assets/img/categories/medium/{{ $category->image }}" alt="{{ $category->name }}">

                                        <h3 class="h6 text-dark mt-4">
                                            {{ $category->name }}

                                            <small class="d-block text-uppercase mt-1">
                                                COLLECTION
                                            </small>
                                        </h3>

                                        <!-- on mouse over -->
                                        <span
                                            class="position-absolute top-0 bottom-0 left-0 right-0 text-center text-white z-index-3 d-flex align-items-center justify-content-center show-hover-item-all animate-fadein">
												     {{ $category->name }}
											</span>

                                    </a>

                                </div>
                            @endif
                            @if($index === 4)

                                <div class="hidden-sm-down col-6 col-md-12 m-0 p-0">

                                    <hr class="m-0">

                                </div>

                                <div class="col-6 col-md-12 m-0 p-0 border bt--0 bb--0 br--0">

                                    <a href="/categories/{{ $category->slug }}"
                                       class="position-relative d-block py-4 text-center overlay-dark-hover overlay-opacity-9 text-decoration-none transition-hover-zoom-img overflow-hidden show-hover-container-all">

                                        <!-- image -->
                                        <img class="img-fluid max-h-180"
                                             src="/assets/img/categories/medium/{{ $category->image }}" alt="{{ $category->name }}">

                                        <h3 class="h6 text-dark mt-4">
                                            {{ $category->name }}

                                            <small class="d-block text-uppercase mt-1">
                                                SUMMER
                                            </small>
                                        </h3>

                                        <!-- on mouse over -->
                                        <span
                                            class="position-absolute top-0 bottom-0 left-0 right-0 text-center text-white z-index-3 d-flex align-items-center justify-content-center show-hover-item-all animate-fadein">
												     {{ $category->name }}
											</span>

                                    </a>

                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>
                <!-- /right -->

            </div>
        </div>

    </div>
</section>
<!-- /featured -->
