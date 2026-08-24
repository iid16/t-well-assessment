<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#05030a] text-white antialiased">

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
        href="#home"
        class="tw-nav-link active"
    >
        Beranda
    </a>

    <a
        href="#researcher"
        class="tw-nav-link"
    >
        Peneliti
    </a>

    <a
        href="#process"
        class="tw-nav-link"
    >
        Proses
    </a>

    <a
        href="#about"
        class="tw-nav-link"
    >
        Tentang
    </a>

    <a
        href="#result"
        class="rounded-lg border border-violet-400/20 bg-violet-500/10 px-4 py-2 text-violet-200 transition duration-300 hover:scale-105 hover:border-violet-400/40 hover:bg-violet-500/20 hover:text-white"
    >
        Lihat Hasil
    </a>

</div>

        </div>

    </nav>


    <!-- MAIN -->
    <main>


        <!-- =========================================================
             SECTION 1 — HOME
        ========================================================== -->
        <section
            id="home"
            class="relative overflow-hidden pb-24 pt-36 lg:pb-32 lg:pt-44"
        >

            <!-- HERO GLOW -->
            <div class="pointer-events-none absolute left-1/2 top-20 h-[500px] w-[500px] -translate-x-1/2 rounded-full bg-violet-700/10 blur-[120px]"></div>


            <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

                <div class="grid items-center gap-16 lg:grid-cols-[1.05fr_0.95fr]">


                    <!-- HERO CONTENT -->
                    <div class="reveal-left">

                        <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-violet-400/20 bg-violet-500/[0.07] px-4 py-2 text-sm font-medium text-violet-200">

                            <span class="h-2 w-2 rounded-full bg-violet-400 shadow-lg shadow-violet-500/50"></span>

                            TikTok Digital Wellbeing Assessment

                        </div>


                        <h1 class="max-w-3xl text-4xl font-bold leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl">

                            Pahami

                            <span class="tw-gradient-text">
                                Penggunaan Digital
                            </span>

                            Anda.

                        </h1>


                        <p class="mt-7 max-w-2xl text-base leading-8 text-gray-400 sm:text-lg">

                            T-Well Assessment membantu pengguna memahami
                            penggunaan TikTok, persepsi terhadap personalisasi
                            algoritma berbasis kecerdasan buatan, dan kondisi
                            kesejahteraan digital berdasarkan hasil penelitian.

                        </p>


                        <!-- HERO BUTTONS -->
                        <div class="mt-9 flex flex-col gap-3 sm:flex-row">

                            <a
                                href="#result"
                                class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-purple-950/30 transition duration-300 hover:-translate-y-0.5 hover:from-violet-600 hover:to-purple-500"
                            >
                                Lihat Hasil Assessment

                                <span class="ml-2">
                                    →
                                </span>
                            </a>


                            <a
                                href="#researcher"
                                class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/[0.03] px-6 py-3.5 text-sm font-semibold text-gray-300 transition duration-300 hover:border-violet-400/30 hover:bg-violet-500/[0.06] hover:text-white"
                            >
                                Tentang Penelitian
                            </a>

                        </div>

                    </div>


                    <!-- HERO PREVIEW -->
                    <div class="reveal-right">

                        <div class="relative">

                            <!-- DECORATIVE GLOW -->
                            <div class="absolute -inset-5 rounded-[2rem] bg-violet-700/10 blur-3xl"></div>


                            <!-- PREVIEW CARD -->
                            <div class="tw-card relative rounded-[2rem] p-6 sm:p-8">

                                <div class="flex items-center justify-between">

                                    <div>

                                        <p class="text-sm font-medium text-gray-500">
                                            T-Well Profile
                                        </p>

                                        <h2 class="mt-1 text-xl font-bold text-white">
                                            Assessment Overview
                                        </h2>

                                    </div>


                                    <div class="rounded-full border border-violet-400/20 bg-violet-500/10 px-3 py-1 text-xs font-semibold text-violet-300">
                                        Preview
                                    </div>

                                </div>


                                <!-- SCORE -->
                                <div class="mt-8 rounded-2xl border border-white/[0.06] bg-black/20 p-7 text-center">

                                    <p class="text-sm font-medium text-gray-500">
                                        Digital Wellbeing
                                    </p>

                                    <p class="mt-2 text-6xl font-bold tracking-tight tw-gradient-text">
                                        76
                                    </p>

                                    <p class="mt-2 text-sm font-medium text-gray-500">
                                        Assessment Score
                                    </p>

                                </div>


                                <!-- SCORE DETAILS -->
                                <div class="mt-5 grid gap-4 sm:grid-cols-2">

                                    <div class="rounded-2xl border border-white/[0.07] bg-white/[0.025] p-5">

                                        <p class="text-xs font-medium text-gray-500">
                                            Screen Time
                                        </p>

                                        <p class="mt-2 text-xl font-bold text-white">
                                            1h 25m
                                        </p>

                                        <p class="mt-1 text-xs text-gray-600">
                                            Daily usage
                                        </p>

                                    </div>


                                    <div class="rounded-2xl border border-white/[0.07] bg-white/[0.025] p-5">

                                        <p class="text-xs font-medium text-gray-500">
                                            AI Personalization
                                        </p>

                                        <p class="mt-2 text-xl font-bold text-white">
                                            78
                                        </p>

                                        <p class="mt-1 text-xs text-gray-600">
                                            Perception score
                                        </p>

                                    </div>

                                </div>


                                <!-- BOTTOM -->
                                <div class="mt-5 flex items-center justify-between rounded-2xl border border-violet-400/10 bg-violet-500/[0.06] px-5 py-4">

                                    <div>

                                        <p class="text-xs font-medium text-violet-300">
                                            Your T-Well Profile
                                        </p>

                                        <p class="mt-1 text-sm font-semibold text-gray-300">
                                            Understand your digital wellbeing
                                        </p>

                                    </div>


                                    <div class="flex h-10 w-10 items-center justify-center rounded-full border border-violet-400/10 bg-violet-500/10 text-violet-300">
                                        →
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================================
             SECTION 2 — PROFIL PENELITI
        ========================================================== -->
        <section
            id="researcher"
            class="relative border-y border-white/[0.06] py-24 lg:py-32"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">


                <!-- TITLE -->
                <div class="reveal mx-auto max-w-3xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Profil Peneliti
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">
                        Mengenal Peneliti T-Well
                    </h2>

                    <p class="mt-5 leading-8 text-gray-400">
                        T-Well Assessment dikembangkan sebagai implementasi
                        dari penelitian pada bidang Teknik Informatika.
                    </p>

                </div>


                <!-- PROFILE CARD -->
                <div class="reveal mt-14">

                    <div class="tw-card overflow-hidden rounded-[2rem] p-7 sm:p-10 lg:p-12">

                        <div class="grid items-center gap-12 lg:grid-cols-[220px_1fr]">


                            <!-- FOTO -->
                            <div class="flex justify-center">

                                <div class="relative">

                                    <div class="absolute inset-0 scale-110 rounded-full bg-violet-700/20 blur-3xl"></div>

                                    <div class="relative flex h-44 w-44 items-center justify-center overflow-hidden rounded-full border border-violet-400/30 bg-[#0d0918] shadow-2xl shadow-purple-950/30">

                                        <img
                                            src="{{ asset('images/profile.jpeg') }}"
                                            alt="Foto Peneliti"
                                            class="h-full w-full object-contain"
                                        >

                                    </div>

                                </div>

                            </div>


                            <!-- INFORMASI -->
                            <div>

                                <span class="text-sm font-medium uppercase tracking-[0.2em] text-violet-300">
                                    Peneliti
                                </span>


                                <h3 class="mt-3 text-3xl font-bold text-white sm:text-4xl">
                                    Hizbullah Nurwahid
                                </h3>


                                <p class="mt-3 text-lg text-gray-400">
                                    Mahasiswa Program Studi Teknik Informatika
                                </p>

                                <p class="mt-1 text-gray-500">
                                    STMIK BINA MULIA PALU
                                </p>


                                <div class="my-8 h-px bg-white/[0.08]"></div>


                                <div class="grid gap-6 md:grid-cols-2">

                                    <div>

                                        <p class="text-xs font-semibold uppercase tracking-wider text-violet-300">
                                            Fokus Penelitian
                                        </p>

                                        <p class="mt-3 leading-7 text-gray-400">
                                            Persepsi personalisasi algoritma
                                            berbasis kecerdasan buatan,
                                            screen time, dan kesejahteraan
                                            digital pengguna TikTok.
                                        </p>

                                    </div>


                                    <div>

                                        <p class="text-xs font-semibold uppercase tracking-wider text-violet-300">
                                            Pengembangan Sistem
                                        </p>

                                        <p class="mt-3 leading-7 text-gray-400">
                                            T-Well Assessment dikembangkan
                                            sebagai implementasi hasil
                                            penelitian dalam bentuk sistem
                                            berbasis web.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- RESEARCH DESCRIPTION -->
                <div class="mt-8 grid gap-6 md:grid-cols-2">

                    <div class="reveal-left tw-card rounded-3xl p-8">

                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300">
                            ◉
                        </div>

                        <h3 class="text-xl font-semibold text-white">
                            Personalisasi Algoritma
                        </h3>

                        <p class="mt-4 leading-8 text-gray-400">
                            Penelitian membahas persepsi pengguna terhadap
                            kemampuan algoritma TikTok dalam menyesuaikan
                            konten berdasarkan preferensi dan interaksi
                            pengguna.
                        </p>

                    </div>


                    <div class="reveal-right tw-card rounded-3xl p-8">

                        <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300">
                            ◷
                        </div>

                        <h3 class="text-xl font-semibold text-white">
                            Screen Time & Digital Wellbeing
                        </h3>

                        <p class="mt-4 leading-8 text-gray-400">
                            Penelitian juga mengkaji durasi penggunaan TikTok
                            dan kesejahteraan digital pengguna sebagai bagian
                            dari pemahaman terhadap pengalaman penggunaan
                            platform.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================================
             SECTION 3 — PROCESS
        ========================================================== -->
        <section
            id="process"
            class="py-24 lg:py-32"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">


                <div class="reveal mx-auto max-w-3xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Proses Sederhana
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Bagaimana T-Well Bekerja?
                    </h2>

                    <p class="mt-5 leading-8 text-gray-400">
                        Akses hasil assessment Anda melalui tiga langkah sederhana.
                    </p>

                </div>


                <div class="mt-14 grid gap-6 md:grid-cols-3">


                    <!-- STEP 1 -->
                    <div class="reveal-left tw-card rounded-3xl p-8">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-600 to-purple-700 text-sm font-bold text-white shadow-lg shadow-purple-950/30">
                            01
                        </div>

                        <h3 class="mt-7 text-xl font-bold text-white">
                            Ikuti Penelitian
                        </h3>

                        <p class="mt-3 leading-8 text-gray-400">
                            Isi kuesioner penelitian dan berikan jawaban
                            sesuai dengan pengalaman penggunaan TikTok Anda.
                        </p>

                    </div>


                    <!-- STEP 2 -->
                    <div class="reveal tw-card rounded-3xl p-8">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-600 to-purple-700 text-sm font-bold text-white shadow-lg shadow-purple-950/30">
                            02
                        </div>

                        <h3 class="mt-7 text-xl font-bold text-white">
                            Dapatkan Assessment Code
                        </h3>

                        <p class="mt-3 leading-8 text-gray-400">
                            Setelah mengikuti penelitian, Anda memperoleh
                            kode assessment yang digunakan untuk mengakses
                            hasil penelitian.
                        </p>

                    </div>


                    <!-- STEP 3 -->
                    <div class="reveal-right tw-card rounded-3xl p-8">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-600 to-purple-700 text-sm font-bold text-white shadow-lg shadow-purple-950/30">
                            03
                        </div>

                        <h3 class="mt-7 text-xl font-bold text-white">
                            Lihat Hasil Assessment
                        </h3>

                        <p class="mt-3 leading-8 text-gray-400">
                            Masukkan kode assessment untuk melihat hasil,
                            interpretasi, edukasi, dan informasi terkait.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================================
             SECTION 4 — WHAT YOU'LL DISCOVER
        ========================================================== -->
        <section
            id="education"
            class="border-y border-white/[0.06] py-24 lg:py-32"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">


                <div class="reveal max-w-3xl">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Hasil Assessment
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Apa yang Akan Anda Ketahui?
                    </h2>

                    <p class="mt-5 leading-8 text-gray-400">
                        T-Well menyajikan beberapa aspek hasil assessment
                        terkait penggunaan TikTok dalam satu profil yang jelas.
                    </p>

                </div>


                <div class="mt-14 grid gap-6 md:grid-cols-3">


                    <!-- SCREEN TIME -->
                    <div class="reveal-left tw-card rounded-3xl p-8">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300">
                            ◷
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-white">
                            Screen Time
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Mengetahui durasi penggunaan TikTok harian
                            berdasarkan data assessment Anda.
                        </p>

                    </div>


                    <!-- AI -->
                    <div class="reveal tw-card rounded-3xl p-8">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-sm font-bold text-violet-300">
                            AI
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-white">
                            AI Personalization
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Melihat persepsi Anda terhadap personalisasi
                            konten yang ditampilkan oleh TikTok.
                        </p>

                    </div>


                    <!-- WELLBEING -->
                    <div class="reveal-right tw-card rounded-3xl p-8">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300">
                            ✓
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-white">
                            Digital Wellbeing
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Memahami kondisi kesejahteraan digital
                            berdasarkan hasil assessment.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================================================
             SECTION 5 — ABOUT
        ========================================================== -->
        <section
            id="about"
            class="relative overflow-hidden py-24 lg:py-32"
        >

            <div class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-700/10 blur-[120px]"></div>


            <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-8">

                <div class="reveal">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Tentang T-Well
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Assessment Kesejahteraan Digital Berbasis Penelitian
                    </h2>

                    <p class="mt-7 leading-8 text-gray-400">

                        T-Well Assessment merupakan sistem berbasis web
                        yang dikembangkan sebagai implementasi dari penelitian
                        mengenai penggunaan TikTok, persepsi personalisasi
                        algoritma berbasis kecerdasan buatan, screen time,
                        dan kesejahteraan digital pengguna.

                    </p>

                </div>

            </div>

        </section>


        <!-- =========================================================
             SECTION 6 — ASSESSMENT CODE
        ========================================================== -->
        <section
            id="result"
            class="relative border-t border-white/[0.06] py-24 lg:py-32"
        >

            <div class="pointer-events-none absolute left-1/2 top-1/2 h-[450px] w-[450px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-700/10 blur-[120px]"></div>


            <div class="relative mx-auto max-w-3xl px-6 lg:px-8">

                <div class="reveal tw-card rounded-[2rem] p-8 text-center sm:p-12">


                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Assessment Code
                    </p>


                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Lihat Hasil Assessment Anda
                    </h2>


                    <p class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400">

                        Sudah mengikuti kuesioner penelitian?

                        Masukkan Assessment Code yang Anda terima
                        untuk melihat hasil assessment Anda.

                    </p>


                    <!-- FORM -->
                    <form
                        action="{{ route('assessment.show') }}"
                        method="POST"
                        class="mx-auto mt-9 max-w-xl"
                    >

                        @csrf


                        <label
                            for="assessment_code"
                            class="mb-3 block text-left text-sm font-semibold text-gray-300"
                        >
                            Assessment Code
                        </label>


                        <div class="flex flex-col gap-3 sm:flex-row">

                            <input
                                id="assessment_code"
                                name="assessment_code"
                                type="text"
                                value="{{ old('assessment_code') }}"
                                placeholder="Contoh: TW-7K4P-92XM"
                                maxlength="20"
                                autocomplete="off"
                                required
                                class="h-12 w-full rounded-xl border border-white/10 bg-black/20 px-4 text-sm font-medium uppercase tracking-wider text-white outline-none transition placeholder:normal-case placeholder:tracking-normal placeholder:text-gray-600 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                            >


                            <button
                                type="submit"
                                class="h-12 whitespace-nowrap rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-7 text-sm font-semibold text-white shadow-lg shadow-purple-950/30 transition duration-300 hover:-translate-y-0.5 hover:from-violet-600 hover:to-purple-500 focus:outline-none focus:ring-4 focus:ring-violet-500/20"
                            >
                                Lihat Hasil
                            </button>

                        </div>


                        @if ($errors->has('assessment_code'))

                            <p class="mt-3 text-left text-sm font-medium text-red-400">
                                {{ $errors->first('assessment_code') }}
                            </p>

                        @endif

                    </form>


                    <p class="mt-6 text-xs leading-6 text-gray-600">
                        Gunakan kode assessment yang diberikan setelah mengikuti penelitian.
                    </p>

                </div>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="border-t border-white/[0.06] bg-black/20">

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