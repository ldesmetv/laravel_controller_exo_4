<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{$store1->title}}</span>
                        <span class="section-heading-lower">{{$store1->subtitle}}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sunday
                            <span class="ml-auto">{{$store1->closed}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Monday
                            <span class="ml-auto">{{$store1->schedule1}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Tuesday
                            <span class="ml-auto">{{$store1->schedule1}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Wednesday
                            <span class="ml-auto">{{$store1->schedule1}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Thursday
                            <span class="ml-auto">{{$store1->schedule1}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Friday
                            <span class="ml-auto">{{$store1->schedule1}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Saturday
                            <span class="ml-auto">{{$store1->schedule2}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$store1->loca1}}</strong>
                            <br>
                            {{$store1->loca2}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>{{$store1->call}}</em>
                        </small>
                        <br>
                        {{$store1->phone}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
