<x-main>
    <div id="description-container-edit">
        <span>
            <form action="/editInfoData" method="POST">
                @csrf
                @method('PUT')
                <textarea class="description-text-input" name="description" id="text-area">{{ $enterpriseDescription }}</textarea>
                <input class="description-submit" type="submit" value="AKTUALIZUJ">
            </form>
        </span>
    </div>
</x-main>
