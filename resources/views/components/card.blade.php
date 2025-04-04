
@php
    $rating = (float) (string) $vote; // Usa __toString() implicitamente per ottenere il contenuto

@endphp
<div class="card h-100">

    <div class="card-body">
        <h4 class="card-title ">{{$title}}</h4>
        <h5>{{$original_title}}</h5>
        <div>{{$nationality}}</div>
        <div>{{$date}}</div>
        <div>
        
            <x-stars :rating="$rating" />
            <span>({{$vote}})</span>

        </div>

    </div>
</div>