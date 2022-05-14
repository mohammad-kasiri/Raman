<a  {{ $attributes->merge(['class' => 'text-muted text-hover-primary' ])}}
    {{ $attributes->merge(['href' => ""])}}
    >
    {{ $slot }}
</a>
