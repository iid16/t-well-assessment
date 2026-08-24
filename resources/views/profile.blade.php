<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Peneliti — T-Well Assessment</title>

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
                    href="{{ route('home') }}"
                    class="tw-nav-link"
                >
                    Beranda
                </a>


                <a
                    href="{{ route('home') }}#process"
                    class="tw-nav-link"
                >
                    Proses
                </a>


                <a
                    href="{{ route('profile') }}"
                    class="tw-nav-link active"
                >
                    Peneliti
                </a>


                <a
                    href="{{ route('home') }}#result"
                    class="tw-nav-link"
                >
                    Lihat Hasil
                </a>

            </div>

        </div>

    </nav>


    <!-- HERO -->
    <section class="relative overflow-hidden pb-24 pt-40">

        <div class="pointer-events-none absolute left-1/2 top-20 h-96 w-96 -translate-x-1/2 rounded-full bg-violet-700/10 blur-3xl"></div>


        <div class="relative mx-auto max-w-6xl px-6 lg:px-10">

            <div class="reveal text-center">

                <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-violet-400/30 bg-violet-500/5 px-5 py-2 text-sm text-violet-200">

                    <span class="h-1.5 w-1.5 rounded-full bg-violet-300"></span>

                    PROFIL PENELITI

                </span>


                <h1 class="mx-auto max-w-4xl text-4xl font-bold leading-tight tracking-tight sm:text-5xl lg:text-6xl">

                    Mengenal Peneliti

                    <span class="tw-gradient-text">
                        T-Well Assessment.
                    </span>

                </h1>


                <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-gray-400 sm:text-lg">

                    T-Well Assessment merupakan implementasi dari penelitian
                    mengenai persepsi personalisasi algoritma TikTok,
                    screen time, dan kesejahteraan digital pengguna.

                </p>

            </div>

        </div>

    </section>


    <!-- PROFILE -->
    <section class="pb-28">

        <div class="mx-auto max-w-6xl px-6 lg:px-10">

            <div class="reveal tw-card overflow-hidden rounded-3xl p-8 shadow-2xl shadow-purple-950/10 lg:p-12">

                <div class="grid items-center gap-12 lg:grid-cols-[220px_1fr]">


                    <!-- FOTO -->
                    <div class="flex justify-center">

                        <div class="relative">

                            <div class="absolute inset-0 scale-110 rounded-full bg-violet-600/20 blur-2xl"></div>


                            <div class="relative flex h-40 w-40 items-center justify-center overflow-hidden rounded-full border border-violet-300/30 bg-[#0d0918] shadow-xl shadow-violet-950/20">

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


                        <h2 class="mt-3 text-3xl font-bold text-white sm:text-4xl">
                            Hizbullah Nurwahid
                        </h2>


                        <p class="mt-3 text-lg text-gray-400">
                            Mahasiswa Program Studi Teknik Informatika
                        </p>


                        <p class="mt-1 text-gray-500">
                            STMIK BINA MULIA PALU
                        </p>


                        <div class="mt-8 h-px w-full bg-white/10"></div>


                        <p class="mt-8 text-base leading-8 text-gray-400">

                            Penelitian ini dilakukan sebagai bagian dari
                            pengembangan pemahaman mengenai hubungan antara
                            personalisasi algoritma berbasis kecerdasan buatan
                            pada TikTok, durasi penggunaan atau screen time,
                            dan kesejahteraan digital pengguna.

                        </p>


                        <p class="mt-5 text-base leading-8 text-gray-400">

                            T-Well Assessment dikembangkan sebagai implementasi
                            dari hasil penelitian tersebut dalam bentuk sistem
                            yang dapat membantu pengguna memahami kondisi
                            penggunaan digitalnya secara lebih sederhana.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- TENTANG PENELITIAN -->
    <section class="pb-28">

        <div class="mx-auto max-w-6xl px-6 lg:px-10">

            <div class="reveal mb-12 text-center">

                <span class="text-sm font-medium tracking-[0.2em] text-violet-300">
                    TENTANG PENELITIAN
                </span>


                <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                    Mengapa Penelitian Ini Dilakukan?
                </h2>


                <p class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400">

                    Penelitian ini berangkat dari ketertarikan terhadap
                    bagaimana algoritma kecerdasan buatan pada TikTok
                    mempelajari preferensi pengguna dan menyesuaikan
                    konten yang ditampilkan.

                </p>

            </div>


            <div class="grid gap-6 md:grid-cols-2">


                <!-- CARD 1 -->
                <div class="reveal-left tw-card rounded-3xl p-8">

                    <div class="tw-icon mb-6 h-12 w-12 rounded-2xl text-xl">
                        ◉
                    </div>


                    <h3 class="text-xl font-semibold text-white">
                        Personalisasi Algoritma
                    </h3>


                    <p class="mt-4 leading-8 text-gray-400">

                        Algoritma TikTok menggunakan berbagai sinyal interaksi
                        pengguna untuk menyesuaikan konten yang ditampilkan
                        berdasarkan preferensi masing-masing pengguna.

                    </p>

                </div>


                <!-- CARD 2 -->
                <div class="reveal-right tw-card rounded-3xl p-8">

                    <div class="tw-icon mb-6 h-12 w-12 rounded-2xl text-xl">
                        ◷
                    </div>


                    <h3 class="text-xl font-semibold text-white">
                        Screen Time
                    </h3>


                    <p class="mt-4 leading-8 text-gray-400">

                        Konten yang semakin sesuai dengan minat pengguna dapat
                        menciptakan pengalaman penggunaan yang nyaman, tetapi
                        juga dapat berkaitan dengan durasi penggunaan platform.

                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- KENAPA T-WELL -->
    <section class="pb-28">

        <div class="mx-auto max-w-6xl px-6 lg:px-10">

            <div class="reveal tw-card rounded-3xl border border-violet-400/10 bg-gradient-to-br from-violet-500/[0.08] to-transparent p-8 lg:p-12">

                <div class="flex gap-5">

                    <div class="mt-1 text-xl text-violet-300">
                        ✓
                    </div>


                    <div>

                        <h2 class="text-2xl font-semibold text-white">
                            Kenapa T-Well Dibuat?
                        </h2>


                        <p class="mt-5 leading-8 text-gray-400">

                            Dari hal tersebut, penelitian ini mencoba memahami
                            hubungan antara pengalaman pengguna terhadap
                            personalisasi TikTok, durasi penggunaan, dan
                            kesejahteraan digital.

                        </p>


                        <p class="mt-5 leading-8 text-gray-400">

                            T-Well Assessment kemudian dikembangkan sebagai
                            implementasi dari hasil penelitian tersebut agar
                            pengguna dapat mengenali kondisi penggunaan
                            digitalnya dengan cara yang lebih sederhana.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="pb-32">

        <div class="mx-auto max-w-4xl px-6 text-center">

            <div class="reveal">

                <span class="text-sm font-medium tracking-[0.2em] text-violet-300">
                    T-WELL ASSESSMENT
                </span>


                <h2 class="mt-4 text-3xl font-bold sm:text-4xl">
                    Lihat Hasil Assessment Anda
                </h2>


                <p class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400">

                    Gunakan Assessment Code yang telah Anda peroleh
                    untuk melihat hasil assessment dan memahami kondisi
                    penggunaan TikTok serta kesejahteraan digital Anda.

                </p>


                <div class="mt-8">

                    <a
                        href="{{ route('home') }}#result"
                        class="tw-button inline-flex items-center rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-7 py-3.5 font-semibold text-white shadow-lg shadow-purple-950/30"
                    >

                        Lihat Hasil Assessment

                        <span class="ml-2">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="tw-footer border-t">

        <div class="mx-auto flex max-w-6xl flex-col gap-3 px-6 py-8 text-center text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between lg:px-10 sm:text-left">

            <p>
                © {{ date('Y') }} T-Well Assessment
            </p>


            <p>
                Implementasi Penelitian — Teknik Informatika
            </p>

        </div>

    </footer>


</body>

</html>