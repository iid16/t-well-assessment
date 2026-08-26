<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrasi — T-Well Assessment</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#05030a] text-white antialiased">

    <!-- BACKGROUND -->
    <div class="tw-background">
        <div class="tw-glow tw-glow-1"></div>
        <div class="tw-glow tw-glow-2"></div>
        <div class="tw-glow tw-glow-3"></div>
    </div>


    <!-- CONTENT -->
    <main class="relative flex min-h-screen items-center justify-center px-6 py-12">

        <div class="w-full max-w-md">

            <!-- LOGO -->
            <div class="mb-8 text-center">

                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-3"
                >

                    <span
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-violet-400 to-purple-700 font-bold shadow-lg shadow-purple-950/30"
                    >
                        T
                    </span>

                    <span class="text-xl font-bold">
                        T-Well Assessment
                    </span>

                </a>

            </div>


            <!-- CARD -->
            <div class="tw-card rounded-[2rem] p-8 sm:p-10">

                <div class="text-center">

                    <p
                        class="text-xs font-semibold uppercase tracking-[0.2em] text-violet-300"
                    >
                        Buat Akun
                    </p>

                    <h1 class="mt-3 text-3xl font-bold">
                        Daftar ke T-Well
                    </h1>

                    <p class="mt-3 text-sm leading-6 text-gray-400">
                        Buat akun untuk menggunakan T-Well Assessment
                        dan menyimpan hasil assessment Anda.
                    </p>

                </div>


                <!-- FORM -->
                <form
                    action="{{ route('register') }}"
                    method="POST"
                    class="mt-8 space-y-5"
                >

                    @csrf


                    <!-- NAME -->
                    <div>

                        <label
                            for="name"
                            class="mb-2 block text-sm font-medium text-gray-300"
                        >
                            Nama
                        </label>

                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            autocomplete="name"
                            required
                            autofocus
                            placeholder="Masukkan nama Anda"
                            class="h-12 w-full rounded-xl border border-white/10 bg-black/20 px-4 text-sm text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                        >

                        @error('name')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- EMAIL -->
                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-sm font-medium text-gray-300"
                        >
                            Email
                        </label>

                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            required
                            placeholder="nama@email.com"
                            class="h-12 w-full rounded-xl border border-white/10 bg-black/20 px-4 text-sm text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                        >

                        @error('email')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- PASSWORD -->
                    <div>

                        <label
                            for="password"
                            class="mb-2 block text-sm font-medium text-gray-300"
                        >
                            Password
                        </label>

                        <input
                            id="password"
                            name="password"
                            type="password"
                            autocomplete="new-password"
                            required
                            placeholder="Minimal 8 karakter"
                            class="h-12 w-full rounded-xl border border-white/10 bg-black/20 px-4 text-sm text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                        >

                        @error('password')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- CONFIRM PASSWORD -->
                    <div>

                        <label
                            for="password_confirmation"
                            class="mb-2 block text-sm font-medium text-gray-300"
                        >
                            Konfirmasi Password
                        </label>

                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            autocomplete="new-password"
                            required
                            placeholder="Ulangi password"
                            class="h-12 w-full rounded-xl border border-white/10 bg-black/20 px-4 text-sm text-white outline-none transition placeholder:text-gray-600 focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                        >

                    </div>


                    <!-- SUBMIT -->
                    <button
                        type="submit"
                        class="h-12 w-full rounded-xl bg-gradient-to-r from-violet-700 to-purple-600 text-sm font-semibold text-white shadow-lg shadow-purple-950/30 transition duration-300 hover:-translate-y-0.5 hover:from-violet-600 hover:to-purple-500 focus:outline-none focus:ring-4 focus:ring-violet-500/20"
                    >
                        Buat Akun
                    </button>

                </form>


                <!-- LOGIN LINK -->
                <div class="mt-7 text-center text-sm text-gray-500">

                    Sudah memiliki akun?

                    <a
                        href="{{ route('login') }}"
                        class="font-semibold text-violet-300 transition hover:text-violet-200"
                    >
                        Masuk
                    </a>

                </div>

            </div>


            <!-- BACK -->
            <div class="mt-6 text-center">

                <a
                    href="{{ route('home') }}"
                    class="text-sm text-gray-500 transition hover:text-gray-300"
                >
                    ← Kembali ke Beranda
                </a>

            </div>

        </div>

    </main>

</body>

</html>