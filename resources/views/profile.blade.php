<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Peneliti — T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="min-h-screen bg-[#05030a] text-white antialiased">


    <!-- NAVBAR -->

    <nav
        class="fixed left-0 right-0 top-0 z-50 border-b border-white/5 bg-[#05030a]/85 backdrop-blur-xl"
    >

        <div
            class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10"
        >

            <!-- LOGO -->

            <a
                href="{{ route('home') }}"
                class="group flex items-center gap-2 text-lg font-semibold tracking-tight text-white"
            >

                <span
                    class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br from-violet-400 to-purple-700 text-sm transition duration-300 group-hover:scale-110"
                >
                    ✦
                </span>

                <span>
                    T-Well Assessment
                </span>

            </a>


            <!-- NAVIGATION -->

            <div class="hidden items-center gap-8 text-sm md:flex">

                <a
                    href="{{ route('home') }}"
                    class="tw-nav-link text-gray-400"
                >
                    Beranda
                </a>


                <a
                    href="{{ route('home') }}#process"
                    class="tw-nav-link text-gray-400"
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
                    class="tw-nav-link text-gray-400"
                >
                    Lihat Hasil
                </a>

            </div>

        </div>

    </nav>



    <!-- HERO -->

    <section
        class="relative overflow-hidden pb-24 pt-40"
    >

        <div
            class="pointer-events-none absolute left-1/2 top-20 h-96 w-96 -translate-x-1/2 rounded-full bg-violet-700/10 blur-3xl"
        >
        </div>


        <div
            class="relative mx-auto max-w-6xl px-6 lg:px-10"
        >

            <div class="reveal text-center">

                <span
                    class="mb-6 inline-flex items-center gap-2 rounded-full border border-violet-400/40 bg-violet-500/5 px-5 py-2 text-sm text-violet-200"
                >

                    <span
                        class="h-1.5 w-1.5 rounded-full bg-violet-300"
                    ></span>

                    PROFIL PENELITI

                </span>


                <h1
                    class="mx-auto max-w-4xl text-4xl font-bold leading-tight tracking-tight sm:text-5xl lg:text-6xl"
                >

                    Mengenal Peneliti

                    <span class="tw-gradient-text">
                        T-Well Assessment.
                    </span>

                </h1>


                <p
                    class="mx-auto mt-6 max-w-2xl text-base leading-8 text-gray-400 sm:text-lg"
                >

                    T-Well Assessment merupakan implementasi dari penelitian
                    mengenai persepsi personalisasi algoritma TikTok,
                    screen time, dan kesejahteraan digital pengguna.

                </p>

            </div>

        </div>

    </section>



    <!-- PROFILE -->

    <section class="pb-28">

        <div
            class="mx-auto max-w-6xl px-6 lg:px-10"
        >

            <div
                class="reveal tw-card overflow-hidden rounded-3xl p-8 shadow-2xl shadow-purple-950/10 lg:p-12"
            >

                <div
                    class="grid items-center gap-12 lg:grid-cols-[220px_1fr]"
                >

                    <!-- FOTO -->

                    <div class="flex justify-center">

                        <div class="relative">

                            <div
                                class="absolute inset-0 scale-110 rounded-full bg-violet-600/20 blur-2xl"
                            >
                            </div>


                            <div
                                class="relative flex h-40 w-40 items-center justify-center overflow-hidden rounded-full border border-violet-300/30 bg-[#0d0918] shadow-xl shadow-violet-950/20"
                            >

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

                        <span
                            class="text-sm font-medium uppercase tracking-[0.2em] text-violet-300"
                        >
                            Peneliti
                        </span>


                        <h2
                            class="mt-3 text-3xl font-bold text-white sm:text-4xl"
                        >
                            Hizbullah Nurwahid
                        </h2>


                        <p class="mt-3 text-lg text-gray-400">
                            Mahasiswa Program Studi Teknik Informatika
                        </p>


                        <p class="mt-1 text-gray-500">
                            STMIK BINA MULIA PALU
                        </p>


                        <div class="my-8 h-px bg-white/10"></div>


                        <div class="grid gap-8 md:grid-cols-2">

                            <div>

                                <p
                                    class="text-xs font-semibold uppercase tracking-wider text-violet-300"
                                >
                                    Fokus Penelitian
                                </p>


                                <p
                                    class="mt-3 leading-8 text-gray-400"
                                >
                                    Persepsi personalisasi algoritma berbasis
                                    kecerdasan buatan, screen time, dan
                                    kesejahteraan digital pengguna TikTok.
                                </p>

                            </div>


                            <div>

                                <p
                                    class="text-xs font-semibold uppercase tracking-wider text-violet-300"
                                >
                                    Pengembangan Sistem
                                </p>


                                <p
                                    class="mt-3 leading-8 text-gray-400"
                                >
                                    T-Well Assessment dikembangkan sebagai
                                    implementasi hasil penelitian dalam bentuk
                                    sistem berbasis web.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- TENTANG PENELITIAN -->

    <section class="pb-28">

        <div
            class="mx-auto max-w-6xl px-6 lg:px-10"
        >

            <div class="reveal mb-12 text-center">

                <span
                    class="text-sm font-medium tracking-[0.2em] text-violet-300"
                >
                    TENTANG PENELITIAN
                </span>


                <h2
                    class="mt-3 text-3xl font-bold sm:text-4xl"
                >
                    Memahami Fokus Penelitian
                </h2>


                <p
                    class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400"
                >
                    Penelitian ini membahas pengalaman pengguna TikTok
                    terhadap personalisasi algoritma serta kaitannya
                    dengan screen time dan kesejahteraan digital.
                </p>

            </div>



            <!-- TWO CARDS -->

            <div class="grid gap-6 md:grid-cols-2">


                <!-- PERSONALISASI -->

                <div
                    class="reveal-left tw-card group flex flex-col rounded-3xl p-8"
                >

                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300 transition duration-300 group-hover:scale-110 group-hover:border-violet-300/40"
                    >
                        ◉
                    </div>


                    <h3
                        class="text-xl font-semibold text-white"
                    >
                        Personalisasi Algoritma
                    </h3>


                    <p
                        class="mt-4 leading-8 text-gray-400"
                    >
                        Penelitian membahas persepsi pengguna terhadap
                        kemampuan algoritma TikTok dalam menyesuaikan
                        konten berdasarkan preferensi dan interaksi
                        pengguna.
                    </p>


                    <!-- BUTTON -->

                    <a
                        href="{{ route('personalization') }}"
                        class="tw-detail-button mt-8"
                    >

                        <span>
                            Pelajari Lebih Lanjut
                        </span>

                        <span class="tw-detail-arrow">
                            →
                        </span>

                    </a>

                </div>



                <!-- SCREEN TIME -->

                <div
                    class="reveal-right tw-card group flex flex-col rounded-3xl p-8"
                >

                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300 transition duration-300 group-hover:scale-110 group-hover:border-violet-300/40"
                    >
                        ◷
                    </div>


                    <h3
                        class="text-xl font-semibold text-white"
                    >
                        Screen Time & Digital Wellbeing
                    </h3>


                    <p
                        class="mt-4 leading-8 text-gray-400"
                    >
                        Penelitian juga mengkaji durasi penggunaan TikTok
                        dan kesejahteraan digital pengguna sebagai bagian
                        dari pemahaman terhadap pengalaman penggunaan
                        platform.
                    </p>


                    <!-- BUTTON -->

                    <a
                        href="{{ route('screen.wellbeing') }}"
                        class="tw-detail-button mt-8"
                    >

                        <span>
                            Pelajari Lebih Lanjut
                        </span>

                        <span class="tw-detail-arrow">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- KENAPA T-WELL -->

    <section class="pb-28">

        <div
            class="mx-auto max-w-6xl px-6 lg:px-10"
        >

            <div
                class="reveal rounded-3xl border border-white/10 bg-gradient-to-br from-violet-500/[0.08] to-transparent p-8 lg:p-12"
            >

                <div class="flex gap-5">

                    <div class="mt-1 text-xl text-violet-300">
                        ✓
                    </div>


                    <div>

                        <h2
                            class="text-2xl font-semibold text-white"
                        >
                            Kenapa T-Well Dibuat?
                        </h2>


                        <p
                            class="mt-5 leading-8 text-gray-400"
                        >
                            Penelitian ini mencoba memahami hubungan antara
                            pengalaman pengguna terhadap personalisasi TikTok,
                            durasi penggunaan, dan kesejahteraan digital.
                        </p>


                        <p
                            class="mt-5 leading-8 text-gray-400"
                        >
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

        <div
            class="mx-auto max-w-4xl px-6 text-center"
        >

            <div class="reveal">

                <span
                    class="text-sm font-medium tracking-[0.2em] text-violet-300"
                >
                    T-WELL ASSESSMENT
                </span>


                <h2
                    class="mt-4 text-3xl font-bold sm:text-4xl"
                >
                    Lihat Hasil Assessment Anda
                </h2>


                <p
                    class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400"
                >
                    Gunakan Assessment Code yang telah Anda peroleh
                    untuk melihat hasil assessment dan memahami kondisi
                    penggunaan TikTok serta kesejahteraan digital Anda.
                </p>


                <div class="mt-8">

                    <a
                        href="{{ route('home') }}#result"
                        class="inline-flex items-center rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-7 py-3.5 font-semibold text-white shadow-lg shadow-purple-950/30 transition duration-300 hover:-translate-y-1 hover:from-violet-600 hover:to-purple-500"
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

    <footer class="border-t border-white/5 py-8">

        <div
            class="mx-auto flex max-w-6xl flex-col gap-3 px-6 text-center text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between lg:px-10 sm:text-left"
        >

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