@props([
    'for',
])

<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'tw-password-toggle',
        'data-password-toggle' => '',
        'aria-controls' => $for,
        'aria-label' => 'Tampilkan password',
        'aria-pressed' => 'false',
    ]) }}
>
    <span data-password-icon="show" aria-hidden="true">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1.8"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12s-3.75 6.75-9.75 6.75S2.25 12 2.25 12Z"
            />
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 15.75A3.75 3.75 0 1 0 12 8.25a3.75 3.75 0 0 0 0 7.5Z"
            />
        </svg>
    </span>

    <span data-password-icon="hide" hidden aria-hidden="true">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1.8"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.98 8.223A10.477 10.477 0 0 0 1.93 12S5.68 18.75 12 18.75c1.87 0 3.563-.43 5.02-1.152M6.228 6.228A10.45 10.45 0 0 1 12 5.25c6.32 0 10.07 6.75 10.07 6.75a10.52 10.52 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3.75 3.75 0 1 0-5.304-5.304m5.304 5.304-5.304-5.304"
            />
        </svg>
    </span>
</button>
