<button {{ $attributes->merge(['type'         =>  ($type ?? 'button')])  }}
        {{ $attributes->merge(['class'         => 'btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 mt-5'])  }}
>

    {{ $slot }}
</button>
