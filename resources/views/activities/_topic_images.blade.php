@if (count($images) && array_key_exists($activity->indentifier, $images))
    <div class="media-body markdown-reply content-body">
        @foreach ($images[$activity->indentifier] as $image)
            <a href="{{ $activity->data['topic_link'] }}"><img src="{{ img_crop($image->link, 0, 100, 0) }}" alt="" style="height:100px; width:auto!important" class="emoji"></a>
        @endforeach
    </div>
@endif