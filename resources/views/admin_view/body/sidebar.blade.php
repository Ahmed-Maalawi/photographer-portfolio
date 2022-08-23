@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();

@endphp


<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>

                <li class="has-sub-menu {{ ($prefix == 'admin/gallery')? 'active': ''}}"><a href="#"><i class="fa-solid fa-image"></i>  <span>Gallery </span></a>
                    <ul class="side-header-sub-menu">
                        <li class="{{ ($route == 'displayImages')? 'active' : ''}}"><a href="{{ route('displayImages') }}"><span>Manage Gallery </span></a></li>
                        <li class="{{ ($route == 'add.collection')? 'active' : ''}}"><a href="{{ route('add.collection') }}"><span>Add Collection </span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu {{ ($prefix == 'admin/feedback')? 'active': ''}}"><a href="#"><i class="fa-solid fa-message"></i>  <span>Feedback </span></a>
                    <ul class="side-header-sub-menu">
                        <li class="{{ ($route == 'index.feedback')? 'active' : ''}}"><a href="{{ route('index.feedback') }}"><span>Manage Feedback </span></a></li>
                        <li class="{{ ($route == 'add.feedback')? 'active' : ''}}"><a href="{{ route('add.feedback') }}"><span>Add Feedback </span></a></li>
                    </ul>
                </li>

                <li class="{{ ($route == 'team')? 'active' : ''}}"><a href="{{ route('team') }}"><i class="fa-solid fa-people-group"></i>  <span>Team Members </span></a></li>


                <li class="has-sub-menu {{ ($prefix == 'admin/news')? 'active': ''}}"><a href="#"><i class="fa-solid fa-paperclip"></i>  <span>News </span></a>
                    <ul class="side-header-sub-menu">
                        <li class="{{ ($route == 'news.all')? 'active' : ''}}"><a href="{{ route('news.index') }}"><span>Manage Posts </span></a></li>
                        <li class="{{ ($route == 'news.create')? 'active' : ''}}"><a href="{{ route('news.create') }}"><span>Add Post </span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
