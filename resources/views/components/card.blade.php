<div {!! $attributes->merge(['class' => 'shadow rounded-md p-4 mb-4 border-2 border-red-500']) !!}>
    <div class="h-24 w-auto flex justify-center"><img src="{{ $src }}" alt="{{ $title }}" class="h-24 w-24 object-cover"></div>
    <h1 class="text-lg w-full text-center">{{ $title }}</h1>
</div>
