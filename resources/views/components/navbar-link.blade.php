@props(['active' => false])

<li>
    <a {{$attributes}} @class([
        'block py-2 px-3 lg:p-0 hover:text-pink_template max-lg:text-center max-lg:border-b-2',
        'bg-white text-pink_template underline' => $active,
        'text-purple_template' => !$active
    ])>
        {{ $slot }}
    </a>
</li>