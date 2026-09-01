<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Assessment Berhasil — T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#05030a] text-white antialiased">
    <div class="tw-background">
        <div class="tw-glow tw-glow-1"></div>
        <div class="tw-glow tw-glow-2"></div>
        <div class="tw-glow tw-glow-3"></div>
    </div>

    <main class="relative flex min-h-screen items-center justify-center px-4 py-12">
        <div class="w-full max-w-lg">
            <div class="tw-card rounded-3xl p-8 text-center sm:p-12">
                <div
                    class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-emerald-500/20"
                    role="status"
                >
                    <svg
                        class="h-8 w-8 text-emerald-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>

                <p class="mt-6 text-xs font-semibold uppercase tracking-[0.2em] text-violet-300">
                    Self-Assessment
                </p>

                <h1 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Jawab sesuai pengalaman Anda
                </h1>

                <p class="mt-4 leading-7 text-gray-400">
                    Semua jawaban Anda telah berhasil diterima. Terima kasih telah berpartisipasi.
                </p>

                <div class="mt-8 rounded-2xl border border-white/10 bg-white/5 p-5">
                    <p class="text-sm text-gray-400">
                        Kode Assessment Anda
                    </p>
                    <p class="mt-2 text-2xl font-bold tracking-wide text-emerald-300">
                        {{ $assessmentCode }}
                    </p>
                </div>

                <div class="mt-4">
                    <button
                        type="button"
                        data-copy="{{ $assessmentCode }}"
                        class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-gray-300 transition hover:border-violet-400/50 hover:bg-violet-500/10 hover:text-white"
                        aria-label="Salin kode assessment"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9.75a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>
                        <span data-copy-text>Salin Kode</span>
                    </button>
                </div>

                <p class="mt-4 text-sm text-gray-500">
                    Simpan kode ini untuk melihat hasil assessment Anda.
                </p>

                <a
                    href="{{ route('dashboard') }}"
                    class="mt-8 inline-flex h-12 items-center rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-8 text-sm font-semibold text-white shadow-lg shadow-purple-950/30 transition hover:from-violet-600 hover:to-purple-500 focus:outline-none focus:ring-4 focus:ring-violet-500/20"
                >
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('button[data-copy]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var code = btn.getAttribute('data-copy');
                    var label = btn.querySelector('[data-copy-text]');

                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(code).then(function () {
                            if (label) label.textContent = 'Tersalin!';
                            setTimeout(function () {
                                if (label) label.textContent = 'Salin Kode';
                            }, 2000);
                        });
                    } else {
                        var ta = document.createElement('textarea');
                        ta.value = code;
                        ta.style.position = 'fixed';
                        ta.style.opacity = '0';
                        document.body.appendChild(ta);
                        ta.select();
                        document.execCommand('copy');
                        document.body.removeChild(ta);
                        if (label) label.textContent = 'Tersalin!';
                        setTimeout(function () {
                            if (label) label.textContent = 'Salin Kode';
                        }, 2000);
                    }
                });
            });
        });
    </script>
</body>

</html>
