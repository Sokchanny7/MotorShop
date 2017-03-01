<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li>
                <a class="" href="{{action('SellItemController@index')}}">
                    <i class="icon_upload"></i>
                    <span>លក់ទំនិញ</span>
                </a>
            </li>
            <li>
                <a class="" href="{{action('CustomerController@index')}}">
                    <i class="icon_genius"></i>
                    <span>បញ្ជីអតិថិជន</span>
                </a>
            </li>
            <li>
                <a class="" href="{{action('ImportItemController@index')}}">
                    <i class="icon_archive"></i>
                    <span>ទំនិញចូល</span>
                </a>
            </li>
            <li>
                <a class="" href="{{action('SupplierController@index')}}">
                    <i class="icon_gift"></i>
                    <span>អ្នកផ្គត់ផ្គង់</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document"></i>
                    <span>របាយការ</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="profile.html">ការលក់</a></li>
                    <li><a class="" href="404.html">ទំនិញលក់ដាច់</a></li>
                    <li><a class="" href="login.html"><span>ទំនិញក្នុងឃ្លាំង</span></a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_tool"></i>
                    <span>ការកំណត់</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">                          
                    <li><a class="" href="{{ action('AddressController@index') }}">អាស័យដ្ឋាន</a></li>
                    <li><a class="" href="login.html"><span>អ្នកប្រើប្រាស់</span></a></li>
                    <li><a class="" href="404.html">404 Error</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
        <div class="col-lg-offset-1">
            <img src="{{asset('img/honda-3.png')}}">
        </div>
    </div>
</aside>