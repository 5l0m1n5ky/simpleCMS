<x-main>
    <div id="questions-container">
        <div id="table">
            @foreach ($questions as $question)
                <div class="table-row">
                    <div class="offer-name">{{ $question->question }}</div>
                    <div class="offer-price">{{ $question->created_at }}</div>
                </div>
            @endforeach
        </div>
    </div>
</x-main>
