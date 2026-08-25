<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personalisasi Algoritma - T-Well Assessment</title>

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
                        ◉
                    </div>

                    <p class="mt-7 text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Variabel Penelitian
                    </p>

                    <h1 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                        Personalisasi Algoritma
                    </h1>

                    <p class="mx-auto mt-6 max-w-3xl text-base leading-8 text-gray-400 sm:text-lg">
                        Memahami bagaimana algoritma rekomendasi TikTok
                        menyesuaikan konten berdasarkan preferensi dan
                        interaksi pengguna.
                    </p>

                </div>

            </div>

        </section>


        <!-- PENGERTIAN -->
        <section class="pb-20">

            <div class="mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal tw-card rounded-[2rem] p-8 sm:p-10 lg:p-12">

                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-violet-300">
                        Apa Itu Personalisasi Algoritma?
                    </p>

                    <h2 class="mt-4 text-2xl font-bold sm:text-3xl">
                        Sistem yang menyesuaikan konten untuk setiap pengguna
                    </h2>

                    <p class="mt-6 leading-8 text-gray-400">
                        Personalisasi algoritma merupakan kemampuan sistem
                        rekomendasi untuk menyesuaikan konten yang ditampilkan
                        kepada pengguna berdasarkan informasi yang diperoleh
                        dari aktivitas dan interaksi pengguna pada platform.
                    </p>

                    <p class="mt-5 leading-8 text-gray-400">
                        Dalam konteks TikTok, pengalaman setiap pengguna dapat
                        berbeda karena sistem rekomendasi berusaha menampilkan
                        konten yang dianggap sesuai dengan minat dan pola
                        interaksi masing-masing pengguna.
                    </p>

                </div>

            </div>

        </section>


        <!-- ASPEK PENELITIAN -->
        <section class="border-y border-white/[0.06] py-20 lg:py-24">

            <div class="mx-auto max-w-6xl px-6 lg:px-8">

                <div class="reveal mx-auto max-w-3xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Aspek yang Dikaji
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">
                        Bagaimana Personalisasi Algoritma Dipersepsikan?
                    </h2>

                    <p class="mt-5 leading-8 text-gray-400">
                        Penelitian mengukur persepsi pengguna terhadap beberapa
                        aspek personalisasi algoritma TikTok.
                    </p>

                </div>


                <div class="mt-14 grid gap-6 md:grid-cols-2">


                    <!-- 01 -->
                    <div class="reveal-left tw-card rounded-3xl p-7">

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300">
                            01
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Relevansi Konten
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Sejauh mana konten yang ditampilkan TikTok
                            dipersepsikan sesuai dengan minat dan kebutuhan
                            pengguna.
                        </p>

                    </div>


                    <!-- 02 -->
                    <div class="reveal-right tw-card rounded-3xl p-7">

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300">
                            02
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Akurasi Prediksi
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Persepsi pengguna terhadap kemampuan algoritma
                            dalam memprediksi preferensi dan ketertarikan
                            terhadap konten tertentu.
                        </p>

                    </div>


                    <!-- 03 -->
                    <div class="reveal-left tw-card rounded-3xl p-7">

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300">
                            03
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Kecepatan Personalisasi
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Persepsi pengguna terhadap seberapa cepat
                            algoritma menyesuaikan rekomendasi berdasarkan
                            perubahan minat dan interaksi pengguna.
                        </p>

                    </div>


                    <!-- 04 -->
                    <div class="reveal-right tw-card rounded-3xl p-7">

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300">
                            04
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Kesadaran Filter Bubble
                        </h3>

                        <p class="mt-3 leading-7 text-gray-400">
                            Kesadaran pengguna terhadap kemungkinan bahwa
                            personalisasi algoritma dapat memengaruhi variasi
                            konten yang mereka temui.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- CONTOH -->
        <section class="py-20 lg:py-24">

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
                                Bagaimana personalisasi dapat terlihat?
                            </h2>

                            <p class="mt-5 leading-8 text-gray-400">
                                Misalnya, ketika pengguna sering berinteraksi
                                dengan konten mengenai olahraga, sistem
                                rekomendasi dapat menampilkan lebih banyak
                                konten yang memiliki karakteristik serupa.
                            </p>

                            <p class="mt-4 leading-8 text-gray-400">
                                Contoh tersebut menggambarkan konsep
                                personalisasi. Namun, halaman ini tidak
                                menentukan kondisi atau kategori pengguna.
                                Penilaian pengguna dilakukan melalui
                                assessment berdasarkan instrumen penelitian.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- HUBUNGAN DENGAN T-WELL -->
        <section class="border-t border-white/[0.06] py-20 lg:py-24">

            <div class="mx-auto max-w-5xl px-6 lg:px-8">

                <div class="reveal text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300">
                        Dalam T-Well Assessment
                    </p>

                    <h2 class="mt-4 text-3xl font-bold sm:text-4xl">
                        Mengapa Variabel Ini Diukur?
                    </h2>

                    <p class="mx-auto mt-6 max-w-3xl leading-8 text-gray-400">
                        Persepsi personalisasi algoritma merupakan salah satu
                        aspek yang digunakan dalam penelitian untuk memahami
                        pengalaman pengguna terhadap sistem rekomendasi TikTok
                        dan kaitannya dengan screen time serta digital wellbeing.
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