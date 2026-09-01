<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Self-Assessment — T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#05030a] text-white antialiased">
    <div class="tw-background">
        <div class="tw-glow tw-glow-1"></div>
        <div class="tw-glow tw-glow-2"></div>
        <div class="tw-glow tw-glow-3"></div>
    </div>

    <main class="relative px-4 py-8 sm:px-6 sm:py-12">
        <div class="mx-auto max-w-4xl">
            <a
                href="{{ route('dashboard') }}"
                class="inline-flex items-center text-sm text-gray-400 transition hover:text-violet-200"
            >
                ← Kembali ke Dashboard
            </a>

            <div class="mt-6 tw-card rounded-3xl p-6 sm:p-10">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-violet-300">
                    Self-Assessment
                </p>

                <h1 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Jawab sesuai pengalaman Anda
                </h1>

                <p id="self-assessment-instructions" class="mt-3 max-w-2xl leading-7 text-gray-400">
                    Semua pertanyaan wajib dijawab. Gunakan pengalaman penggunaan TikTok Anda sebagai acuan.
                </p>

                @if ($errors->any())
                    <div
                        class="mt-6 rounded-2xl border border-red-400/30 bg-red-500/10 p-4 text-sm text-red-100"
                        role="alert"
                    >
                        Mohon lengkapi semua jawaban yang wajib diisi.
                    </div>
                @endif

                <form
                    action="{{ route('self-assessment.store') }}"
                    method="POST"
                    class="mt-8 space-y-8"
                    aria-describedby="self-assessment-instructions"
                    data-self-assessment
                >
                    @csrf

                    @php($currentVariable = null)
                    @php($currentDimension = null)

                    @foreach ($items as $index => $item)
                        @if ($currentVariable !== $item['variable'])
                            @php($currentVariable = $item['variable'])
                            @php($currentDimension = null)

                            <section
                                class="{{ $index === 0 ? '' : 'border-t border-white/10 pt-8' }}"
                                aria-labelledby="variable-{{ $item['variable'] }}"
                            >
                                <p class="text-sm font-semibold text-violet-300">
                                    Variabel {{ $item['variable'] }}
                                </p>

                                <h2
                                    id="variable-{{ $item['variable'] }}"
                                    class="mt-1 text-xl font-bold"
                                >
                                    {{ $item['variable_label'] }}
                                </h2>
                        @endif

                        @if ($currentDimension !== $item['dimension'])
                            @php($currentDimension = $item['dimension'])

                            @if ($item['dimension'])
                                <h3 class="mt-6 text-sm font-semibold text-gray-200">
                                    {{ $item['dimension'] }}
                                </h3>
                            @endif
                        @endif

                        <fieldset class="mt-5 rounded-2xl border border-white/10 bg-black/10 p-4 sm:p-5">
                            <legend class="sr-only">
                                {{ $item['code'] }}. {{ $item['question'] }}
                            </legend>

                            <p class="font-medium leading-7 text-white">
                                <span class="mr-2 text-violet-300">{{ $item['code'] }}.</span>{{ $item['question'] }}
                            </p>

                            @if ($item['response_type'] === 'likert')
                                <div class="mt-4 grid gap-2 sm:grid-cols-5" role="radiogroup" aria-label="{{ $item['code'] }} — {{ $item['question'] }}">
                                    @foreach ($likertScale as $value => $label)
                                        <label
                                            for="{{ $item['code'] }}-{{ $value }}"
                                            class="flex cursor-pointer items-center gap-3 rounded-xl border border-white/10 bg-white/5 px-3 py-3 text-sm text-gray-200 transition hover:border-violet-400/50 hover:bg-violet-500/10"
                                        >
                                            <input
                                                id="{{ $item['code'] }}-{{ $value }}"
                                                name="answers[{{ $item['code'] }}]"
                                                type="radio"
                                                value="{{ $value }}"
                                                @checked((string) old('answers.'.$item['code']) === (string) $value)
                                                @required($value === 1)
                                                class="h-4 w-4 border-white/30 bg-transparent text-violet-500 focus:ring-violet-500"
                                            >

                                            <span>
                                                <span class="font-semibold">{{ $value }}</span>
                                                <span class="block text-xs text-gray-400 sm:sr-only">{{ $label }}</span>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>

                                <div class="mt-3 hidden grid-cols-5 gap-2 text-center text-xs text-gray-400 sm:grid">
                                    @foreach ($likertScale as $value => $label)
                                        <span>{{ $label }}</span>
                                    @endforeach
                                </div>
                            @else
                                <div class="mt-4 flex max-w-sm items-center gap-3">
                                    <input
                                        id="{{ $item['code'] }}"
                                        name="answers[{{ $item['code'] }}]"
                                        type="number"
                                        inputmode="numeric"
                                        step="1"
                                        value="{{ old('answers.'.$item['code']) }}"
                                        required
                                        aria-describedby="{{ $item['code'] }}-unit {{ $item['code'] }}-error"
                                        class="h-12 w-full rounded-xl border border-white/10 bg-black/20 px-4 text-white outline-none transition focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                                    >

                                    <span
                                        id="{{ $item['code'] }}-unit"
                                        class="shrink-0 text-sm text-gray-400"
                                    >
                                        menit/hari
                                    </span>
                                </div>
                            @endif

                            @error('answers.'.$item['code'])
                                <p
                                    id="{{ $item['code'] }}-error"
                                    class="mt-3 text-sm text-red-300"
                                    aria-live="polite"
                                >
                                    {{ $message }}
                                </p>
                            @enderror
                        </fieldset>

                        @if ($loop->last || $items[$loop->index + 1]['variable'] !== $item['variable'])
                            </section>
                        @endif
                    @endforeach

                    <div class="border-t border-white/10 pt-6">
                        <button
                            type="submit"
                            class="h-12 w-full rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-6 text-sm font-semibold text-white shadow-lg shadow-purple-950/30 transition hover:from-violet-600 hover:to-purple-500 focus:outline-none focus:ring-4 focus:ring-violet-500/20 sm:w-auto"
                        >
                            Kirim Self-Assessment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.querySelector('form[data-self-assessment]');
            if (!form) return;
            form.addEventListener('submit', function () {
                var btn = form.querySelector('button[type="submit"]');
                if (btn) {
                    btn.disabled = true;
                    btn.textContent = 'Mengirim...';
                    btn.classList.add('pointer-events-none', 'opacity-60');
                }
            });
        });
    </script>
</body>

</html>
