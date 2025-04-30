<div class="adminuiux-sidebar">
    <div class="adminuiux-sidebar-inner">
        <ul class="nav flex-column menu-active-line">
            <hr>
            <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">
                    <i class="fa-light fa-house ms-3"></i>
                    <span class="menu-name">داشبورد</span>
                </a>
            </li>
            @foreach($moduleNames as $moduleName)
                @if (config(strtolower($moduleName) . '.sideBar'))
                    @foreach(config(strtolower($moduleName) . '.sideBar') as $sideBar)
                        @if(auth()->user()->can($sideBar['permission']))
                            <li class="nav-item dropdown">
                                <a href="javascrit:void(0)"
                                   class="nav-link dropdown-toggle"
                                   data-bs-toggle="dropdown">
                                    <i class="{{@$sideBar['icon']}} ms-3"></i>
                                    <span
                                            class="menu-name">{{ $sideBar['title'] }}</span><i
                                            class="fa fa-angle-down"></i>
                                </a>


                                @if(count($sideBar['child']))
                                    <div class="dropdown-menu">
                                        @foreach($sideBar['child'] as $child)
                                            <div class="nav-item"><a href="{{ route($child['route']) }}"
                                                                     class="nav-link">
                                                    <i class="{{@$child['icon']}} ms-3"></i>
                                                    <span class="menu-name">{{ $child['title'] }}</span></a></div>
                                        @endforeach
                                    </div>
                                @endif
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <li class="nav-item">
                <a href="{{route('contactUs')}}" class="nav-link">
                    <i class="fa-light fa-message ms-3"></i>
                    <span class="menu-name">ارتباط باما</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('aboutUs')}}" class="nav-link">
                    <i class="fa-light fa-ticket-simple ms-3"></i>
                    <span class="menu-name">درباره ما</span>
                </a>
            </li>
        </ul>
    </div>
</div>