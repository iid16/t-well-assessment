```blade
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="min-h-screen bg-[#05030a] text-white antialiased">


    <!-- =========================================================
         BACKGROUND
    ========================================================== -->

    <div class="tw-background">

        <div class="tw-glow tw-glow-1"></div>

        <div class="tw-glow tw-glow-2"></div>

        <div class="tw-glow tw-glow-3"></div>

    </div>



    <!-- =========================================================
         NAVBAR
    ========================================================== -->

    <nav
        class="fixed left-0 right-0 top-0 z-50 border-b border-white/[0.08] bg-[#05030a]/80 backdrop-blur-xl"
    >

        <div
            class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8"
        >

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

                    <span
                        class="text-lg font-bold tracking-tight text-white"
                    >
                        T-Well Assessment
                    </span>

                    <span
                        class="hidden text-[9px] font-medium tracking-[0.15em] text-gray-500 sm:block"
                    >
                        TIKTOK DIGITAL WELLBEING
                    </span>

                </div>

            </a>



            <!-- NAVIGATION -->

            <div
                class="hidden items-center gap-8 text-sm font-medium md:flex"
            >

                <a
                    href="{{ route('home') }}"
                    class="tw-nav-link active"
                >
                    Beranda
                </a>


                <a
                    href="{{ route('home') }}#researcher"
                    class="tw-nav-link"
                >
                    Peneliti
                </a>


                <a
                    href="{{ route('home') }}#process"
                    class="tw-nav-link"
                >
                    Proses
                </a>


                <a
                    href="{{ route('home') }}#about"
                    class="tw-nav-link"
                >
                    Tentang
                </a>


                <a
                    href="{{ route('home') }}#result"
                    class="rounded-lg border border-violet-400/20 bg-violet-500/10 px-4 py-2 text-violet-200 transition duration-300 hover:scale-105 hover:border-violet-400/40 hover:bg-violet-500/20 hover:text-white"
                >
                    Lihat Hasil
                </a>

            </div>

        </div>

    </nav>



    <!-- =========================================================
         MAIN
    ========================================================== -->

    <main>


        <!-- =========================================================
             SECTION 1 — HERO / HOME
        ========================================================== -->

        <section
            class="relative flex min-h-[720px] items-center overflow-hidden pt-28"
        >

            <!-- HERO GLOW -->

            <div
                class="pointer-events-none absolute left-1/2 top-20 h-[550px] w-[550px] -translate-x-1/2 rounded-full bg-violet-700/10 blur-[130px]"
            ></div>


            <div
                class="pointer-events-none absolute left-1/4 top-1/2 h-[300px] w-[300px] -translate-y-1/2 rounded-full bg-purple-800/10 blur-[100px]"
            ></div>


            <div
                class="relative mx-auto max-w-6xl px-6 py-24 text-center lg:px-8"
            >

                <div class="reveal">

                    <!-- LABEL -->

                    <div
                        class="mx-auto inline-flex items-center gap-2 rounded-full border border-violet-400/20 bg-violet-500/[0.06] px-4 py-2"
                    >

                        <span
                            class="h-2 w-2 rounded-full bg-violet-400 shadow-lg shadow-violet-500/50"
                        ></span>


                        <span
                            class="text-xs font-semibold uppercase tracking-[0.18em] text-violet-300"
                        >
                            TikTok Digital Wellbeing
                        </span>

                    </div>



                    <!-- TITLE -->

                    <h1
                        class="mx-auto mt-8 max-w-4xl text-4xl font-bold leading-tight tracking-tight sm:text-5xl lg:text-6xl"
                    >

                        Kenali Pengalaman Digital Anda
                        <span
                            class="bg-gradient-to-r from-violet-300 via-purple-400 to-fuchsia-300 bg-clip-text text-transparent"
                        >
                            di TikTok
                        </span>

                    </h1>



                    <!-- DESCRIPTION -->

                    <p
                        class="mx-auto mt-7 max-w-2xl text-base leading-8 text-gray-400 sm:text-lg"
                    >
                        T-Well Assessment merupakan sistem berbasis web
                        yang dikembangkan berdasarkan hasil penelitian
                        mengenai persepsi personalisasi algoritma,
                        screen time, dan kesejahteraan digital pengguna TikTok.
                    </p>



                    <!-- CTA -->

                    <div
                        class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row"
                    >

                        <a
                            href="{{ route('home') }}#researcher"
                            class="group inline-flex h-12 items-center justify-center gap-3 rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 px-7 text-sm font-semibold text-white shadow-lg shadow-purple-950/30 transition duration-300 hover:-translate-y-0.5 hover:from-violet-600 hover:to-purple-500"
                        >

                            <span>
                                Pelajari Penelitian
                            </span>

                            <span
                                class="transition duration-300 group-hover:translate-x-1"
                            >
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('home') }}#result"
                            class="inline-flex h-12 items-center justify-center rounded-xl border border-white/10 bg-white/[0.03] px-7 text-sm font-semibold text-gray-300 transition duration-300 hover:border-violet-400/30 hover:bg-violet-500/[0.08] hover:text-white"
                        >
                            Lihat Hasil Assessment
                        </a>

                    </div>



                    <!-- SMALL INFORMATION -->

                    <div
                        class="mx-auto mt-12 flex max-w-xl flex-col items-center justify-center gap-4 text-xs text-gray-600 sm:flex-row sm:gap-8"
                    >

                        <span>
                            Berbasis hasil penelitian
                        </span>


                        <span class="hidden h-1 w-1 rounded-full bg-gray-700 sm:block"></span>


                        <span>
                            Fokus pada pengguna TikTok
                        </span>


                        <span class="hidden h-1 w-1 rounded-full bg-gray-700 sm:block"></span>


                        <span>
                            Assessment berbasis web
                        </span>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================================
             SECTION 2 — RESEARCHER
        ========================================================== -->

        <section
            id="researcher"
            class="relative overflow-hidden border-t border-white/[0.06] py-24 lg:py-28"
        >

            <div
                class="pointer-events-none absolute left-1/2 top-20 h-[500px] w-[500px] -translate-x-1/2 rounded-full bg-violet-700/10 blur-[120px]"
            ></div>


            <div
                class="relative mx-auto max-w-6xl px-6 lg:px-8"
            >


                <!-- HEADER PENELITIAN -->

                <div class="reveal text-center">

                    <p
                        class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300"
                    >
                        Tentang Penelitian
                    </p>


                    <h2
                        class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl"
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



                <!-- =====================================================
                     PROFILE PENELITI
                ====================================================== -->

                <div
                    class="reveal tw-card mt-14 overflow-hidden rounded-[2rem]"
                >

                    <div
                        class="grid items-center gap-10 p-8 lg:grid-cols-[220px_1fr] lg:p-10"
                    >


                        <!-- FOTO -->

                        <div class="flex justify-center lg:justify-start">

                            <div
                                class="relative h-48 w-48 rounded-full p-[2px] bg-gradient-to-br from-violet-400/70 to-purple-700/20 shadow-2xl shadow-purple-950/40"
                            >

                                <div
                                    class="h-full w-full overflow-hidden rounded-full bg-[#08050e]"
                                >

                                    <img
                                        src="{{ asset('images/profile.jpeg') }}"
                                        alt="Profil Peneliti"
                                        class="h-full w-full object-cover"
                                    >

                                </div>

                            </div>

                        </div>



                        <!-- INFORMASI PENELITI -->

                        <div>

                            <p
                                class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300"
                            >
                                Peneliti
                            </p>


                            <h2
                                class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl"
                            >
                                Hizbullah Nurwahid
                            </h2>


                            <p
                                class="mt-4 text-lg text-gray-400"
                            >
                                Mahasiswa Program Studi Teknik Informatika
                            </p>


                            <p
                                class="mt-1 text-base text-gray-500"
                            >
                                STMIK BINA MULIA PALU
                            </p>


                            <div
                                class="my-7 h-px w-full bg-gradient-to-r from-violet-500/40 to-transparent"
                            ></div>


                            <div
                                class="grid gap-8 md:grid-cols-2"
                            >

                                <div>

                                    <p
                                        class="text-xs font-semibold uppercase tracking-[0.18em] text-violet-300"
                                    >
                                        Fokus Penelitian
                                    </p>


                                    <p
                                        class="mt-3 leading-7 text-gray-400"
                                    >
                                        Persepsi personalisasi algoritma
                                        berbasis kecerdasan buatan,
                                        screen time, dan kesejahteraan
                                        digital pengguna TikTok.
                                    </p>

                                </div>


                                <div>

                                    <p
                                        class="text-xs font-semibold uppercase tracking-[0.18em] text-violet-300"
                                    >
                                        Pengembangan Sistem
                                    </p>


                                    <p
                                        class="mt-3 leading-7 text-gray-400"
                                    >
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



                <!-- =====================================================
                     TWO VARIABLE CARDS
                ====================================================== -->

                <div
                    class="mt-8 grid gap-6 md:grid-cols-2"
                >


                    <!-- PERSONALISASI ALGORITMA -->

                    <div
                        class="reveal-left tw-card group flex flex-col rounded-3xl p-8"
                    >

                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300 transition duration-300 group-hover:scale-110 group-hover:border-violet-300/40"
                        >
                            ◉
                        </div>


                        <h2
                            class="text-xl font-semibold text-white"
                        >
                            Personalisasi Algoritma
                        </h2>


                        <p
                            class="mt-4 leading-8 text-gray-400"
                        >
                            Penelitian membahas persepsi pengguna terhadap
                            kemampuan algoritma TikTok dalam menyesuaikan
                            konten berdasarkan preferensi dan interaksi
                            pengguna.
                        </p>


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



                    <!-- SCREEN TIME & DIGITAL WELLBEING -->

                    <div
                        class="reveal-right tw-card group flex flex-col rounded-3xl p-8"
                    >

                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-2xl border border-violet-400/20 bg-violet-500/10 text-xl text-violet-300 transition duration-300 group-hover:scale-110 group-hover:border-violet-300/40"
                        >
                            ◷
                        </div>


                        <h2
                            class="text-xl font-semibold text-white"
                        >
                            Screen Time & Digital Wellbeing
                        </h2>


                        <p
                            class="mt-4 leading-8 text-gray-400"
                        >
                            Penelitian juga mengkaji durasi penggunaan TikTok
                            dan kesejahteraan digital pengguna sebagai
                            bagian dari pemahaman terhadap pengalaman
                            penggunaan platform.
                        </p>


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



        <!-- =========================================================
             SECTION 3 — PROCESS
        ========================================================== -->

        <section
            id="process"
            class="relative border-t border-white/[0.06] py-24 lg:py-28"
        >

            <div
                class="pointer-events-none absolute left-1/2 top-1/2 h-[450px] w-[450px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-700/10 blur-[120px]"
            ></div>


            <div
                class="relative mx-auto max-w-6xl px-6 lg:px-8"
            >

                <div class="reveal text-center">

                    <p
                        class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300"
                    >
                        Proses Sistem
                    </p>


                    <h2
                        class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        Bagaimana T-Well Assessment Bekerja?
                    </h2>


                    <p
                        class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400"
                    >
                        T-Well Assessment memanfaatkan hasil penelitian
                        untuk menyajikan assessment, interpretasi,
                        edukasi, dan informasi mengenai penggunaan TikTok.
                    </p>

                </div>



                <div
                    class="mt-12 grid gap-6 md:grid-cols-3"
                >


                    <!-- STEP 1 -->

                    <div
                        class="reveal-left tw-card rounded-3xl p-7"
                    >

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300"
                        >
                            01
                        </div>


                        <h3
                            class="mt-6 text-xl font-bold"
                        >
                            Pengisian Assessment
                        </h3>


                        <p
                            class="mt-3 leading-7 text-gray-400"
                        >
                            Pengguna mengisi self-assessment berdasarkan
                            indikator yang digunakan dalam penelitian.
                        </p>

                    </div>



                    <!-- STEP 2 -->

                    <div
                        class="reveal tw-card rounded-3xl p-7"
                    >

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300"
                        >
                            02
                        </div>


                        <h3
                            class="mt-6 text-xl font-bold"
                        >
                            Pengolahan Hasil
                        </h3>


                        <p
                            class="mt-3 leading-7 text-gray-400"
                        >
                            Jawaban pengguna diproses berdasarkan aturan
                            assessment yang telah ditetapkan dari hasil
                            penelitian.
                        </p>

                    </div>



                    <!-- STEP 3 -->

                    <div
                        class="reveal-right tw-card rounded-3xl p-7"
                    >

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10 font-bold text-violet-300"
                        >
                            03
                        </div>


                        <h3
                            class="mt-6 text-xl font-bold"
                        >
                            Hasil & Informasi
                        </h3>


                        <p
                            class="mt-3 leading-7 text-gray-400"
                        >
                            Sistem menampilkan hasil assessment,
                            interpretasi, rekomendasi, dan edukasi
                            digital wellbeing.
                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================================
             SECTION 4 — ABOUT
        ========================================================== -->

        <section
            id="about"
            class="relative overflow-hidden border-t border-white/[0.06] py-24 lg:py-28"
        >

            <div
                class="pointer-events-none absolute left-1/2 top-1/2 h-96 w-96 -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-700/10 blur-[120px]"
            ></div>


            <div
                class="relative mx-auto max-w-4xl px-6 text-center lg:px-8"
            >

                <div class="reveal">

                    <p
                        class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300"
                    >
                        Tentang T-Well Assessment
                    </p>


                    <h2
                        class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        Assessment Kesejahteraan Digital
                        Berbasis Penelitian
                    </h2>


                    <p
                        class="mt-7 leading-8 text-gray-400"
                    >
                        T-Well Assessment merupakan sistem berbasis web
                        yang dikembangkan sebagai implementasi dari penelitian
                        mengenai penggunaan TikTok, persepsi personalisasi
                        algoritma berbasis kecerdasan buatan, screen time,
                        dan kesejahteraan digital pengguna.
                    </p>


                    <p
                        class="mt-5 leading-8 text-gray-400"
                    >
                        Sistem ini tidak melakukan analisis statistik
                        penelitian secara langsung. Hasil penelitian
                        digunakan sebagai dasar dalam penyusunan assessment,
                        interpretasi, rekomendasi, dan edukasi bagi pengguna.
                    </p>

                </div>

            </div>

        </section>



        <!-- =========================================================
             SECTION 5 — ASSESSMENT CODE
        ========================================================== -->

        <section
            id="result"
            class="relative border-t border-white/[0.06] py-24 lg:py-28"
        >

            <div
                class="pointer-events-none absolute left-1/2 top-1/2 h-[450px] w-[450px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-700/10 blur-[120px]"
            ></div>


            <div
                class="relative mx-auto max-w-3xl px-6 lg:px-8"
            >

                <div
                    class="reveal tw-card rounded-[2rem] p-8 text-center sm:p-12"
                >

                    <p
                        class="text-sm font-semibold uppercase tracking-[0.2em] text-violet-300"
                    >
                        Assessment Code
                    </p>


                    <h2
                        class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        Lihat Hasil Assessment Anda
                    </h2>


                    <p
                        class="mx-auto mt-5 max-w-2xl leading-8 text-gray-400"
                    >
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


                        <div
                            class="flex flex-col gap-3 sm:flex-row"
                        >

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

                            <p
                                class="mt-3 text-left text-sm font-medium text-red-400"
                            >
                                {{ $errors->first('assessment_code') }}
                            </p>

                        @endif

                    </form>


                    <p
                        class="mt-6 text-xs leading-6 text-gray-600"
                    >
                        Gunakan kode assessment yang diberikan setelah
                        mengikuti penelitian.
                    </p>

                </div>

            </div>

        </section>

    </main>



    <!-- =========================================================
         FOOTER
    ========================================================== -->

    <footer
        class="border-t border-white/[0.06] bg-black/20"
    >

        <div
            class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-8 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between lg:px-8"
        >

            <div>

                <p
                    class="font-semibold text-gray-300"
                >
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
```
