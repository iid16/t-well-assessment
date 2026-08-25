<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Screen Time & Digital Wellbeing - T-Well Assessment</title>

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
            <a href="{{ route('home') }}" class="group flex items-center gap-3">

                <span
                    class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-violet-400 to-purple-700 text-sm font-bold text-white shadow-lg shadow-purple-950/30 transition duration-300 group-hover:scale-105">
                    T
                </span>

                <div class="flex flex-col">

                    <span class="text-lg font-bold tracking-tight text-white">
                        T-Well Assessment
                    </span>

                    <span class="hidden text-[9px] font-medium tracking-[0.15em] text-gray-500 sm:block">
                        TIKTOK DIGITAL WELLBEING
                    </span>

                </div>

            </a>


            <!-- NAVIGATION -->
            <div class="hidden items-center gap-8 text-sm font-medium md:flex">

                <a href="{{ route('home') }}" class="tw-nav-link">
                    Beranda
                </a>

                <a href="{{ route('profile') }}" class="tw-nav-link active">
                    Peneliti
                </a>

                <a href="{{ route('home') }}#process" class="tw-nav-link">
                    Proses
                </a>

                <a href="{{ route('home') }}#about" class="tw-nav-link">
                    Tentang
                </a>

                <a href="{{ route('home') }}#result"
                    class="rounded-lg border border-violet-400/20 bg-violet-500/10 px-4 py-2 text-violet-200 transition duration-300 hover:scale-105 hover:border-violet-400/40 hover:bg-violet-500/20 hover:text-white">
                    Lihat Hasil
                </a>

            </div>

        </div>

    </nav>


    <!-- MAIN -->
    <main>

        <!-- HEADER -->
        <section class="relative overflow-hidden pb-16 pt-36 lg:pb-20 lg:pt-44">

            <div
                class="pointer-events-none absolute left-1/2 top-20 h-[450px] w-[450px] -translate-x-1/2 rounded-full bg-violet-700/10 blur-[120px]">
            </div>

            <div class="relative mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal text-center">

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-2xl text-violet-300">
                        ◷
                    </div>

                    <p class="mt-7 text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Variabel Penelitian
                    </p>

                    <h1 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                        Screen Time & Digital Wellbeing
                    </h1>

                    <p class="mx-auto mt-6 max-w-3xl text-base leading-8 text-gray-400 sm:text-lg">
                        Memahami durasi penggunaan TikTok dan aspek
                        kesejahteraan digital sebagai bagian dari pengalaman
                        penggunaan platform.
                    </p>

                </div>

            </div>

        </section>


        <!-- SCREEN TIME -->
        <section class="pb-20">

            <div class="mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal tw-card rounded-[2rem] p-8 sm:p-10 lg:p-12">

                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-violet-300">
                        Screen Time
                    </p>

                    <h2 class="mt-4 text-2xl font-bold sm:text-3xl">
                        Apa yang dimaksud dengan Screen Time?
                    </h2>

                    <p class="mt-6 leading-8 text-gray-400">
                        Screen time dalam penelitian ini merujuk pada durasi
                        waktu yang digunakan pengguna untuk menggunakan TikTok.
                        Informasi tersebut digunakan sebagai salah satu aspek
                        untuk menggambarkan pola penggunaan platform.
                    </p>

                    <p class="mt-5 leading-8 text-gray-400">
                        Semakin lama seseorang menggunakan suatu platform,
                        semakin besar pula waktu yang dihabiskan untuk
                        berinteraksi dengan konten digital. Oleh karena itu,
                        durasi penggunaan menjadi salah satu informasi penting
                        dalam memahami pengalaman penggunaan TikTok.
                    </p>

                </div>

            </div>

        </section>


        <!-- DIGITAL WELLBEING -->
        <section class="border-y border-white/[0.06] py-20 lg:py-24">

            <div class="mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal tw-card rounded-[2rem] p-8 sm:p-10 lg:p-12">

                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-violet-300">
                        Digital Wellbeing
                    </p>

                    <h2 class="mt-4 text-2xl font-bold sm:text-3xl">
                        Apa yang dimaksud dengan Digital Wellbeing?
                    </h2>

                    <p class="mt-6 leading-8 text-gray-400">
                        Digital wellbeing atau kesejahteraan digital
                        menggambarkan kondisi ketika penggunaan teknologi
                        dapat berlangsung secara seimbang dan tetap mendukung
                        kondisi serta aktivitas pengguna.
                    </p>

                    <p class="mt-5 leading-8 text-gray-400">
                        Dalam konteks penelitian ini, digital wellbeing
                        digunakan untuk melihat kondisi kesejahteraan digital
                        pengguna TikTok berdasarkan indikator yang telah
                        ditetapkan dalam instrumen penelitian.
                    </p>

                </div>

            </div>

        </section>


        <!-- HUBUNGAN SCREEN TIME DAN WELLBEING -->
        <section class="py-20 lg:py-24">

            <div class="mx-auto max-w-6xl px-6 lg:px-8">

                <div class="reveal mx-auto max-w-3xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Dua Aspek yang Dikaji
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Screen Time dan Digital Wellbeing
                    </h2>

                    <p class="mt-5 leading-8 text-gray-400">
                        Kedua aspek ini memberikan gambaran yang berbeda
                        mengenai pengalaman penggunaan TikTok.
                    </p>

                </div>


                <div class="mt-14 grid gap-6 md:grid-cols-2">


                    <!-- SCREEN TIME CARD -->
                    <div class="reveal-left tw-card rounded-3xl p-8">

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300">
                            ◷
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Screen Time
                        </h3>

                        <p class="mt-4 leading-7 text-gray-400">
                            Menggambarkan berapa lama pengguna menggunakan
                            TikTok dalam suatu periode penggunaan.
                        </p>

                    </div>


                    <!-- WELLBEING CARD -->
                    <div class="reveal-right tw-card rounded-3xl p-8">

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300">
                            ✓
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Digital Wellbeing
                        </h3>

                        <p class="mt-4 leading-7 text-gray-400">
                            Menggambarkan kondisi kesejahteraan digital
                            pengguna berdasarkan indikator yang digunakan
                            dalam penelitian.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- CONTOH -->
        <section class="border-y border-white/[0.06] py-20 lg:py-24">

            <div class="mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal rounded-[2rem] border border-violet-400/10 bg-violet-500/[0.05] p-8 sm:p-10">

                    <div class="flex gap-5">

                        <div class="mt-1 text-xl text-violet-300">
                            ◎
                        </div>

                        <div>

                            <p class="text-sm font-semibold uppercase tracking-[0.15em] text-violet-300">
                                Contoh Sederhana
                            </p>

                            <h2 class="mt-3 text-2xl font-bold">
                                Mengapa kedua aspek ini penting?
                            </h2>

                            <p class="mt-5 leading-8 text-gray-400">
                                Dua pengguna dapat memiliki durasi penggunaan
                                TikTok yang berbeda dan memiliki pengalaman
                                kesejahteraan digital yang berbeda pula.
                                Karena itu, durasi penggunaan dan kondisi
                                digital wellbeing perlu dilihat sebagai aspek
                                yang berbeda dalam assessment.
                            </p>

                            <p class="mt-4 leading-8 text-gray-400">
                                T-Well Assessment menyajikan kedua informasi
                                tersebut agar pengguna dapat memahami kondisi
                                penggunaan TikTok mereka secara lebih
                                menyeluruh.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- DALAM PENELITIAN -->
        <section class="py-20 lg:py-24">

            <div class="mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Dalam T-Well Assessment
                    </p>

                    <h2 class="mt-4 text-3xl font-bold sm:text-4xl">
                        Bagaimana Data Digunakan?
                    </h2>

                    <p class="mx-auto mt-6 max-w-3xl leading-8 text-gray-400">
                        Data screen time dan hasil pengukuran digital wellbeing
                        digunakan sebagai bagian dari informasi assessment
                        untuk memberikan gambaran mengenai kondisi penggunaan
                        TikTok pengguna.
                    </p>

                </div>


                <div class="mt-12 flex justify-center">

                    <a href="{{ route('profile') }}"
                        class="inline-flex items-center gap-3 rounded-xl border border-violet-400/20 bg-violet-500/10 px-6 py-3.5 text-sm font-semibold text-violet-200 transition duration-300 hover:-translate-y-0.5 hover:border-violet-400/40 hover:bg-violet-500/20 hover:text-white">

                        <span>
                            Kembali ke Profil Peneliti
                        </span>

                        <span>
                            ←
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="border-t border-white/[0.06] bg-black/20">

        <div
            class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between lg:px-8">

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