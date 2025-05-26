<div>
    @props(['user'])
    @if ($user->image)
        <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="w-12 h-12 rounded-full">
    @else
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541"
            class="w-12 h-12 rounded-full" alt="Avatar Default">
    @endif

</div>
