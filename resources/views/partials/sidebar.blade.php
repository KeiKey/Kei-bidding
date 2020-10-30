<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://www.hotavatars.com/wp-content/uploads/2019/01/I80W1Q0.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <a href="/panel/profile">
                    {{--<i class="fa fa-user"> </i> --}}{{ request()->user()->first_name }}
                </a>
{{--                <p><a href="/profile">{{ request()->user()->first_name }}</a></p>--}}
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-shopping-bag"></i> <span>Products</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list"></i>Listing</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i>New</a></li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-list-alt"></i><span>Categories</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-list"></i>Listing</a></li>
                    <li><a href="#"><i class="fa fa-plus"></i>New</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span> {{ __('Logout') }} </span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </section>
</aside>
