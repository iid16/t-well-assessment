<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasil T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="tw-result-page min-h-screen text-white antialiased">


    <!-- BACKGROUND -->
    <div class="tw-background">

        <div class="tw-glow tw-glow-1"></div>

        <div class="tw-glow tw-glow-2"></div>

        <div class="tw-glow tw-glow-3"></div>

    </div>


    <!-- NAVBAR -->
    <nav class="fixed left-0 right-0 top-0 z-50 border-b border-white/[0.08] bg-[#05030a]/80 backdrop-blur-xl">

        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">


            <!-- LOGO -->
            <a
                href="{{ route('home') }}"
                class="group flex items-center gap-3"
            >

                <span
                    class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-violet-400 to-purple-700 text-sm font-bold text-white shadow-lg shadow-purple-950/30 transition duration-300 group-hover:scale-105"
                >
                    T
                </span>


                <div class="flex flex-col">

                    <span class="text-lg font-bold tracking-tight text-white">
                        T-Well
                    </span>


                    <span class="hidden text-[9px] font-medium tracking-[0.15em] text-gray-500 sm:block">
                        TIKTOK DIGITAL WELLBEING
                    </span>

                </div>

            </a>


            <!-- NAVIGATION -->
            <div class="hidden items-center gap-8 text-sm font-medium md:flex">

                <a
                    href="{{ route('home') }}"
                    class="tw-nav-link"
                >
                    Beranda
                </a>


                <a
                    href="#result"
                    class="tw-nav-link active"
                >
                    Hasil Saya
                </a>


                <a
                    href="#recommendations"
                    class="tw-nav-link"
                >
                    Rekomendasi
                </a>


                <a
                    href="#education"
                    class="tw-nav-link"
                >
                    Edukasi
                </a>

            </div>

        </div>

    </nav>


    <!-- MAIN -->
    <main id="result" class="pt-20">


        <!-- HEADER -->
        <section class="mx-auto max-w-7xl px-6 pb-10 pt-14 lg:px-8">

            <div class="reveal flex flex-col justify-between gap-6 sm:flex-row sm:items-end">


                <div>

                    <p class="text-sm font-semibold uppercase tracking-wider text-violet-300">
                        Hasil Assessment
                    </p>


                    <h1 class="mt-3 text-4xl font-bold tracking-tight text-white">
                        Profil T-Well Anda
                    </h1>


                    <p class="mt-3 max-w-2xl leading-7 text-gray-400">

                        Berikut merupakan ringkasan hasil assessment
                        terkait penggunaan TikTok, persepsi personalisasi
                        algoritma, dan kesejahteraan digital Anda.

                    </p>

                </div>


                <!-- ASSESSMENT CODE -->
                <div class="tw-result-card rounded-xl px-4 py-3">

                    <p class="text-xs font-medium text-gray-500">
                        Assessment Code
                    </p>


                    <p class="mt-1 text-sm font-bold tracking-wider text-violet-200">
                        {{ $assessment->assessment_code }}
                    </p>

                </div>

            </div>

        </section>


        <!-- SCORE CARDS -->
        <section class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid gap-5 md:grid-cols-3">


                <!-- SCREEN TIME -->
                <div class="reveal-left tw-result-card rounded-2xl p-6">

                    <div class="flex items-center justify-between">

                        <div class="tw-icon h-11 w-11 rounded-xl text-lg">
                            ◷
                        </div>


                        <span class="text-xs font-medium text-gray-500">
                            Y1
                        </span>

                    </div>


                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Screen Time
                    </p>


                    <p class="mt-2 text-3xl font-bold tracking-tight text-white">

                        {{ intdiv($assessment->screen_time, 60) }}h
                        {{ $assessment->screen_time % 60 }}m

                    </p>


                    <p class="mt-2 text-sm text-gray-500">
                        Rata-rata penggunaan TikTok per hari
                    </p>

                </div>


                <!-- AI PERSONALIZATION -->
                <div class="reveal tw-result-card rounded-2xl p-6">

                    <div class="flex items-center justify-between">

                        <div class="tw-icon h-11 w-11 rounded-xl text-sm font-bold">
                            AI
                        </div>


                        <span class="text-xs font-medium text-gray-500">
                            X
                        </span>

                    </div>


                    <p class="mt-6 text-sm font-medium text-gray-500">
                        AI Personalization
                    </p>


                    <p class="mt-2 text-3xl font-bold tracking-tight text-white">
                        {{ number_format($assessment->x_score, 2) }}
                    </p>


                    <p class="mt-2 text-sm text-gray-500">
                        Skor persepsi personalisasi
                    </p>

                </div>


                <!-- DIGITAL WELLBEING -->
                <div class="reveal-right tw-result-card rounded-2xl p-6">

                    <div class="flex items-center justify-between">

                        <div class="tw-icon h-11 w-11 rounded-xl text-lg">
                            ✓
                        </div>


                        <span class="text-xs font-medium text-gray-500">
                            Y2
                        </span>

                    </div>


                    <p class="mt-6 text-sm font-medium text-gray-500">
                        Digital Wellbeing
                    </p>


                    <p class="mt-2 text-3xl font-bold tracking-tight text-white">
                        {{ number_format($assessment->y2_score, 2) }}
                    </p>


                    <p class="mt-2 text-sm text-gray-500">
                        Skor kesejahteraan digital
                    </p>

                </div>

            </div>

        </section>


        <!-- DIGITAL WELLBEING -->
        <section class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

            <div class="grid gap-6 lg:grid-cols-3">


                <!-- MAIN SCORE -->
                <div class="reveal-left tw-result-card rounded-3xl p-8 lg:col-span-1">

                    <p class="text-sm font-semibold uppercase tracking-wider text-violet-300">
                        Digital Wellbeing
                    </p>


                    <div class="mt-8 text-center">

                        <div class="mx-auto flex h-44 w-44 items-center justify-center rounded-full border-[12px] border-violet-500/20">

                            <div>

                                <p class="text-5xl font-bold tracking-tight tw-gradient-text">
                                    {{ number_format($assessment->y2_score, 2) }}
                                </p>


                                <p class="mt-1 text-sm font-semibold text-gray-500">
                                    Skor
                                </p>

                            </div>

                        </div>


                        <p class="mt-6 text-lg font-bold text-white">
                            {{ $assessment->y2_category }}
                        </p>


                        <p class="mt-2 text-sm leading-6 text-gray-500">

                            Hasil assessment menunjukkan kondisi
                            kesejahteraan digital berdasarkan indikator
                            yang digunakan dalam T-Well.

                        </p>

                    </div>

                </div>


                <!-- INTERPRETATION -->
                <div class="reveal-right tw-result-card rounded-3xl p-8 lg:col-span-2">

                    <p class="text-sm font-semibold uppercase tracking-wider text-violet-300">
                        Interpretasi
                    </p>


                    <h2 class="mt-3 text-2xl font-bold text-white">
                        Memahami Hasil Anda
                    </h2>


                    <div class="mt-6 text-sm leading-7 text-gray-400">

                        <p>
                            {{ $assessment->interpretation }}
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- AI PERSONALIZATION -->
        <section class="mx-auto max-w-7xl px-6 pb-10 lg:px-8">

            <div class="reveal tw-result-card rounded-3xl p-8">

                <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">


                    <div>

                        <p class="text-sm font-semibold uppercase tracking-wider text-violet-300">
                            AI Personalization
                        </p>


                        <h2 class="mt-3 text-2xl font-bold text-white">
                            Persepsi Anda terhadap Personalisasi AI
                        </h2>


                        <p class="mt-3 max-w-2xl text-sm leading-7 text-gray-400">

                            Skor ini merepresentasikan persepsi personalisasi
                            konten TikTok berdasarkan indikator penelitian.

                        </p>

                    </div>


                    <div class="text-left md:text-right">

                        <p class="text-4xl font-bold tw-gradient-text">
                            {{ number_format($assessment->x_score, 2) }}
                        </p>


                        <p class="mt-1 text-sm font-semibold text-gray-500">
                            {{ $assessment->x_category }}
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- RECOMMENDATIONS -->
        <section
            id="recommendations"
            class="tw-result-section border-y py-20"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="reveal max-w-2xl">

                    <p class="text-sm font-semibold uppercase tracking-wider text-violet-300">
                        Insight
                    </p>


                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        Rekomendasi
                    </h2>


                    <p class="mt-4 leading-7 text-gray-400">

                        Beberapa langkah sederhana yang dapat membantu
                        membangun kebiasaan digital yang lebih sadar.

                    </p>

                </div>


                <div class="mt-10 grid gap-6 md:grid-cols-3">


                    <!-- RECOMMENDATION 1 -->
                    <div class="reveal-left tw-result-card rounded-2xl p-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-violet-300">
                            01
                        </span>


                        <h3 class="mt-4 text-lg font-bold text-white">
                            Sadari Penggunaan Anda
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-gray-400">

                            Perhatikan berapa lama waktu yang Anda gunakan
                            untuk mengonsumsi konten video pendek.

                        </p>

                    </div>


                    <!-- RECOMMENDATION 2 -->
                    <div class="reveal tw-result-card rounded-2xl p-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-violet-300">
                            02
                        </span>


                        <h3 class="mt-4 text-lg font-bold text-white">
                            Perhatikan Feed Anda
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-gray-400">

                            Perhatikan bagaimana konten yang dipersonalisasi
                            memengaruhi konten yang terus Anda tonton.

                        </p>

                    </div>


                    <!-- RECOMMENDATION 3 -->
                    <div class="reveal-right tw-result-card rounded-2xl p-6">

                        <span class="text-xs font-bold uppercase tracking-wider text-violet-300">
                            03
                        </span>


                        <h3 class="mt-4 text-lg font-bold text-white">
                            Ambil Jeda
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-gray-400">

                            Pertimbangkan untuk mengambil jeda secara sadar
                            dari aktivitas scrolling secara terus-menerus.

                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- EDUCATION -->
        <section
            id="education"
            class="py-20"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="reveal max-w-2xl">

                    <p class="text-sm font-semibold uppercase tracking-wider text-violet-300">
                        Pelajari Lebih Lanjut
                    </p>


                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        Edukasi Digital Wellbeing
                    </h2>


                    <p class="mt-4 leading-7 text-gray-400">

                        Informasi mengenai penggunaan TikTok,
                        konten yang dipersonalisasi, dan kesejahteraan digital.

                    </p>

                </div>


                <div class="mt-10 grid gap-6 md:grid-cols-3">


                    <!-- EDUCATION 1 -->
                    <article class="reveal-left tw-result-card rounded-2xl p-6">

                        <p class="text-xs font-semibold uppercase tracking-wider text-violet-300">
                            Kebiasaan Digital
                        </p>


                        <h3 class="mt-3 text-lg font-bold text-white">
                            Memahami Screen Time
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-gray-400">

                            Kesadaran terhadap durasi penggunaan teknologi
                            dapat membantu membangun kebiasaan digital
                            yang lebih terarah.

                        </p>

                    </article>


                    <!-- EDUCATION 2 -->
                    <article class="reveal tw-result-card rounded-2xl p-6">

                        <p class="text-xs font-semibold uppercase tracking-wider text-violet-300">
                            AI & Konten
                        </p>


                        <h3 class="mt-3 text-lg font-bold text-white">
                            Bagaimana Feed yang Dipersonalisasi Bekerja
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-gray-400">

                            Memahami peran personalisasi konten dalam
                            membentuk pengalaman penggunaan media digital.

                        </p>

                    </article>


                    <!-- EDUCATION 3 -->
                    <article class="reveal-right tw-result-card rounded-2xl p-6">

                        <p class="text-xs font-semibold uppercase tracking-wider text-violet-300">
                            Wellbeing
                        </p>


                        <h3 class="mt-3 text-lg font-bold text-white">
                            Membangun Kebiasaan Digital yang Seimbang
                        </h3>


                        <p class="mt-3 text-sm leading-6 text-gray-400">

                            Memahami cara menjaga hubungan yang lebih
                            seimbang dengan media digital.

                        </p>

                    </article>

                </div>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="tw-footer border-t">

        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between lg:px-8">

            <div>

                <p class="font-semibold text-gray-300">
                    T-Well Assessment
                </p>


                <p class="mt-1">
                    TikTok Digital Wellbeing Assessment
                </p>

            </div>


            <p>
                © {{ date('Y') }} T-Well Assessment
            </p>

        </div>

    </footer>


</body>

</html>