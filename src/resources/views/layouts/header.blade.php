<header>
    <nav class="navbar navbar-default">
        <div>
            @if (session('github_token'))           
                <a class="navbar-brand header-btn" href="/home">ホーム</a>
                <a class="navbar-brand header-btn" href="/logout">ログアウト</a>
                <a class="navbar-brand header-btn" href="/posts/create">投稿</a>
            @else
                <a class="navbar-brand header-btn" href="/">ホーム</a>
                <a class="navbar-brand header-btn" href="/">ログイン</a>
                <a class="navbar-brand header-btn" href="/">投稿</a>
            @endif
        </div>
      </nav>
</header>