<header class="bg-black dk header navbar navbar-fixed-top-xs">
    <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="/images/logo.png" class="m-r-sm">开发后台</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
            <i class="fa fa-cog"> </i>
        </a>
    </div>
    <ul class="nav navbar-nav m-n hidden-xs nav-user">
        <li class="nav_tongji"><a href="/publish/index">发布系统</a></li>
        <li class="nav_tongji"><a href="/admin/index">系统设置</a></li>
    </ul>
    <!--ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
    </ul-->
    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $myself->username ?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>

            <li>
              <a href="/login/logout">登出</a>
            </li>
          </ul>
        </li>
    </ul>
</header>
