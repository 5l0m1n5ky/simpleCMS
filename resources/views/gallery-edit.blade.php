<x-main>
    <div id="gallery-container">
        <div id="gallery-search-space">

            <form action="/gallery">
                <input type="text" id="text-field" name="search" placeholder="Znajdź po tagu...">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>

        </div>

        <div id="gallery-content-space">

            <div class="gallery-edit-item">
                <form action="/createImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="upload-image-space">
                        <input name="file_path" type="file" id="file_path">
                        <label for="file_path">
                            <i class="bi bi-plus-square"></i>
                        </label>
                    </div>
                    <div class="tag-form-space">
                        <input name="tags" type="text" class="tag" placeholder="Dodaj tagi po przecinku...">
                    </div>
                    <div class="submit-space">
                        <input type="submit" value="DODAJ">
                    </div>
                </form>
            </div>

            @if (count($images) > 0)
                @foreach ($images as $image)
                    <div class="gallery-item">
                        <div class="image-space">
                            <form action="/deleteImage/{{ $image->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                            <img src="{{ asset('storage/' . $image->file_path) }}" alt="">
                        </div>
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
