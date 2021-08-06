<section id="featured" class="content-section">
    <div class="section-heading">
        <h1>TOP<br><em>Postagens</em></h1>
        <p>
            Confira nossas postagens mais populares de todos os tempos.
            <br>
            Leia as paradas ai que o bagulho tá dahora.
        </p>
    </div>
    <div class="section-content">
        <div class="owl-carousel owl-theme">
            @foreach ($topPosts as $post)
                <div class="item">
                    <div class="image">
                        <img src="{{ asset(str_replace('public/', '', $post->image)) }}" alt="">
                        <div class="featured-button button">
                            <a href="#projects">Continue Lendo</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4>{{ $post->title }}</h4>
                        <span>{{ $post->created_at->format('d \d\e M \d\e Y \á\s H:i') . ' - ' . $post->author->name }}</span>
                        <p>
                            {{ Str::limit($post->content, 100) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
