<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('profile.main.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-house"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.liked.index') }}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.comment.index') }}" class="nav-link">
                    <i class="nav-icon far fa-comment"></i>
                    <p>
                        Комментрарии  
                    </p>
                </a>
            </li>
        </ul>
    </div>

</aside>
