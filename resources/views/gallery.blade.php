<x-main>
    <div id="gallery-container">
        <div id="gallery-search-space">

            <form action="/gallery">
                <input type="text" id="text-field" name="search" placeholder="Znajdź po tagu...">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>

        </div>

        <div id="gallery-content-space">
            @if (count($images) > 0)
                @foreach ($images as $image)
                    <div class="gallery-item">
                        <img src="{{ asset('storage/' . $image->file_path) }}">
                        <div class="tag-space">
                            <span class="tag">
                                <x-tags :tagsArray="$image->tags">
                                </x-tags>
                            </span>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No results found.</p>
            @endif
        </div>

        <div id="gallery-paginate-space">
        </div>
    </div>
</x-main>
