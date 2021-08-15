<section id="blog" class="content-section">
    <div class="section-heading">
        <h1>Posts<br><em>Recentes</em></h1>
        <p>Seleção de nossos Posts mais recentes: </p>
    </div>
    <div class="section-content">
        <div class="tabs-content">
            <div class="wrapper">
                <ul class="clearfix tabs" data-tabgroup="first-tab-group">
                    <li><a href="#" class="active">Recentes: </a></li>
                </ul>
                <section>
                    @foreach ($posts as $post)
                        <div style="display:flex; gap: 25px; margin: 25px 0 25px 0">
                            <img src="{{ str_replace('public/', '', $post->image) }}" width='306' height="230">
                            <div style="width:100%!important">
                                <h4>{{ $post->title }}</h4>
                                <span>{{ $post->create_at }}</span>
                                <p> {{ Str::limit($post->content, 350) }}
                                <div class="accent-button button">
                                    <a href="{{ route('posts.show', [$post->id, Str::slug($post->title)]) }}">Continue Lendo</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div class='row'>
                    <div class='col-12'>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
