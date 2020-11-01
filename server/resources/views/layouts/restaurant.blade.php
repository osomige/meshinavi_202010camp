    <div class="row">
        <div>
            <img src="{{ url($restaurant->img_path) }}" class="square-img">
        </div>
        <div class="ml-3">
            <div class="mt-3 mb-3">
                <h3>
                    
                    
                    <a href="{{ route('restaurants.show', $restaurant->id) }}">{{ $restaurant->name }}</a>
                    @if ($restaurant->recommend)
                    {{ $restaurant->recommend }}位
                    @endif
                </h3>
            </div>
            <div>
                <div>{{ $restaurant->pr_short }}</div>
                <div>{{ $restaurant->opentime }}</div>
            </div>
        </div>
    </div>