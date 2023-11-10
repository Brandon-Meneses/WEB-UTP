
<div class="my-8  flex items-center justify-center">
    <div class="max-w-[950px] carousel carousel-center rounded-box">
        @foreach ($cursos as $curso)
            @foreach ($curso as $item)
                <div class="carousel-item">
                    <img src="{{ $item->url_imagen }}" alt="{{ $item->nombre }}" />
                </div>
            @endforeach
        @endforeach
    </div>
</div>
