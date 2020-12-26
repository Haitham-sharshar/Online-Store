<div class="menu_nav">
    <ul>
        @foreach($categories as $category)
        <li><a href="#">{{$category->name}}</a></li>
        @endforeach
        <li><a href="#">Home Deco</a></li>
        <li><a href="#">Contact</a></li>

    </ul>
</div>
<!-- Contact Info -->
<div class="menu_contact">
    <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
        <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
        <div>+1 912-252-7350</div>
    </div>
    <div class="menu_social">
        <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
</div>
