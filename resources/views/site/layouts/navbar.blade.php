<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu bg-primary navbar-dark navbar-shadow
     mb-2">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile-2">
                <?php if (auth()->check()): ?>
                    <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class = "nav-item d-none d-lg-block"><a class = "nav-link" href = "app-todo" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.Todo')}}"><i class = "ficon feather icon-check-square"></i></a></li>
                        <li class = "nav-item d-none d-lg-block"><a class = "nav-link" href = "app-chat" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.Chat')}}"><i class = "ficon feather icon-message-square"></i></a></li>
                        <li class = "nav-item d-none d-lg-block"><a class = "nav-link" href = "app-email" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.Email')}}"><i class = "ficon feather icon-mail"></i></a></li>
                        <li class = "nav-item d-none d-lg-block"><a class = "nav-link" href = "app-calender" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.Calender')}}"><i class = "ficon feather icon-calendar"></i></a></li>

                    </ul>
                <?php else: ?>
                    <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class = "nav-item d-none d-lg-block"><a  style="font-family: sans-serif;font-weight: 500; font-size: 30px; " href = "<?= route('index') ?>" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.E-Commerce')}}"><i class="feather icon-watch"></i>{{__('main.E-Commerce')}}</a></li>

                    </ul>
                <?php endif; ?>
                <ul class = "nav navbar-nav">

                    <div class = "bookmark-input search-input">
                        <div class = "bookmark-input-icon"><i class = "feather icon-search primary"></i></div>
                        <input class = "form-control input" type = "text" placeholder = "{{__('main.ٍsearch')}}" tabindex = "0" data-search = "laravel-search-list" />
                        <ul class = "search-list search-list-bookmark"></ul>
                    </div>
                    <!--select.bookmark-select-->
                    <!--option 1-Column-->
                    <!--option 2-Column-->
                    <!--option Static Layout-->
                    </li>
                </ul>
                <ul class = "nav navbar-nav float-right">

                    <li class = "dropdown dropdown-language nav-item">
                        <?php foreach (LaravelLocalization::getSupportedLocales(true) as $localCode => $properties): ?>
                            <?php if ($localCode == App::getLocale()): ?>
                                <a class = "dropdown-toggle nav-link" id = "dropdown-flag" href = "#" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                                    <?php if ($localCode == "ar"): ?>
                                        <i class = "flag-icon flag-icon-eg"></i>
                                    <?php elseif ($localCode == "en"): ?>
                                        <i class = "flag-icon flag-icon-us"></i>
                                    <?php endif; ?>
                                    <span class = "selected-language"><?= $properties['native'] ?></span> 
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <div class = "dropdown-menu" aria-labelledby = "dropdown-flag">
                            <?php foreach (LaravelLocalization::getSupportedLocales(true) as $localCode => $properties): ?>
                                <a class = "dropdown-item" href = "<?= LaravelLocalization::getLocalizedURL($localCode, null, [], true) ?>"  hreflang="<?= $localCode ?>"data-language = "<?= $localCode ?>">
                                    <?php if ($localCode == "ar"): ?>
                                        <i class = "flag-icon flag-icon-eg"></i>
                                    <?php elseif ($localCode == "en"): ?>
                                        <i class = "flag-icon flag-icon-us"></i>
                                    <?php endif; ?>
                                    <?= $properties['native'] ?>  
                                </a>

                            <?php endforeach; ?>
                        </div>
                    </li>
                    <li class = "nav-item d-none d-lg-block">
                        <a class = "nav-link nav-link-expand">
                            <i class = "ficon feather icon-maximize"></i>
                        </a>
                    </li>
                    <li class = "nav-item nav-search"><a class = "nav-link nav-link-search"><i class = "ficon feather icon-search"></i></a>
                        <div class = "search-input">
                            <div class = "search-input-icon"><i class = "feather icon-search primary"></i></div>
                            <input class = "input" type = "text" placeholder = "{{__('main.ٍsearch')}}" tabindex = "-1" data-search = "laravel-search-list" />
                            <div class = "search-input-close"><i class = "feather icon-x"></i></div>
                            <ul class = "search-list search-list-main"></ul>
                        </div>
                    </li>
                    <?php if (!auth()->guest()): ?>
                        <li class = "dropdown dropdown-notification nav-item"><a class = "nav-link nav-link-label" href = "#" data-toggle = "dropdown"><i class = "ficon feather icon-bell"></i><span class = "badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class = "dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class = "dropdown-menu-header">
                                    <div class = "dropdown-header m-0 p-2">
                                        <h3 class = "white">5 {{__('main.new')}}</h3><span class = "grey darken-2">{{__('main.Notificication')}}</span>
                                    </div>
                                </li>
                                <li class = "scrollable-container media-list">
                                    <a class = "d-flex justify-content-between" href = "javascript:void(0)">
                                        <div class = "media d-flex align-items-start">
                                            <div class = "media-left"><i class = "feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class = "media-body">
                                                <h6 class = "primary media-heading">You have new order!</h6><small class = "notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class = "media-meta" datetime = "2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class = "d-flex justify-content-between" href = "javascript:void(0)">
                                        <div class = "media d-flex align-items-start">
                                            <div class = "media-left"><i class = "feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class = "media-body">
                                                <h6 class = "success media-heading red darken-1">99% Server load</h6><small class = "notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class = "media-meta" datetime = "2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class = "d-flex justify-content-between" href = "javascript:void(0)">
                                        <div class = "media d-flex align-items-start">
                                            <div class = "media-left"><i class = "feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class = "media-body">
                                                <h6 class = "danger media-heading yellow darken-3">Warning notifixation</h6><small class = "notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class = "media-meta" datetime = "2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class = "d-flex justify-content-between" href = "javascript:void(0)">
                                        <div class = "media d-flex align-items-start">
                                            <div class = "media-left"><i class = "feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class = "media-body">
                                                <h6 class = "info media-heading">Complete the task</h6><small class = "notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class = "media-meta" datetime = "2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class = "d-flex justify-content-between" href = "javascript:void(0)">
                                        <div class = "media d-flex align-items-start">
                                            <div class = "media-left"><i class = "feather icon-file font-medium-5 warning"></i></div>
                                            <div class = "media-body">
                                                <h6 class = "warning media-heading">Generate monthly report</h6><small class = "notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class = "media-meta" datetime = "2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a>
                                </li>
                                <li class = "dropdown-menu-footer"><a class = "dropdown-item p-1 text-center" href = "javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class = "dropdown dropdown-user nav-item">
                            <a class = "dropdown-toggle nav-link dropdown-user-link" href = "#" data-toggle = "dropdown">
                                <div class = "user-nav d-sm-flex d-none"><span class = "user-name text-bold-600"><?= auth()->user()->name ?></span><span class = "user-status">Available</span></div><span><img class = "round" src = "{{asset('images/portrait/small/avatar-s-11.jpg') }}" alt = "avatar" height = "40" width = "40" /></span>
                            </a>
                            <div class = "dropdown-menu dropdown-menu-right">
                                <a class = "dropdown-item" href = "page-user-profile">
                                    <i class = "feather icon-user"></i>
                                    {{__('main.Edit Profile')}}
                                </a>
                                <a class = "dropdown-item" href = "app-email">
                                    <i class = "feather icon-mail"></i>
                                    {{__('main.mybox')}}
                                </a>
                                <a class = "dropdown-item" href = "app-todo">
                                    <i class = "feather icon-check-square"></i> 
                                    {{__('main.Task')}}
                                </a>
                                <a class = "dropdown-item" href = "app-chat">
                                    <i class = "feather icon-message-square"> </i>
                                    {{__('main.chats')}}
                                </a>
                                <div class = "dropdown-divider"></div>
                                <a class = "dropdown-item" href = "<?= route('logout') ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class = "feather icon-power"></i> 
                                    {{__('main.Logout')}}
                                </a>
                                <form id = "logout-form" action = "<?= route('logout') ?>" method = "POST" style = "display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class = "nav-item d-none d-lg-block"><a class = "nav-link"   href = "<?= route('login') ?>" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.Login')}}">{{__('main.Login')}}</a></li>
                        <li class = "nav-item d-none d-lg-block"><a class = "nav-link"   href = "<?= route('register') ?>" data-toggle = "tooltip" data-placement = "top" title = "{{__('main.Register')}}">{{__('main.Register')}}</a></li>
                        <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>