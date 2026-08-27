<?php

namespace App\Support;

final class AssessmentInstrument
{
    public const LIKERT_SCALE = [
        1 => 'Sangat Tidak Setuju',
        2 => 'Tidak Setuju',
        3 => 'Netral',
        4 => 'Setuju',
        5 => 'Sangat Setuju',
    ];

    /**
     * Returns the single official definition of the Self-Assessment instrument.
     *
     * @return array<string, mixed>
     */
    public static function definition(): array
    {
        return [
            'likert_scale' => self::LIKERT_SCALE,
            'variables' => [
                [
                    'code' => 'X',
                    'label' => 'Persepsi Personalisasi Algoritma Rekomendasi TikTok',
                    'response_type' => 'likert',
                    'dimensions' => [
                        [
                            'label' => 'Relevansi Konten',
                            'items' => [
                                ['code' => 'X01', 'question' => 'Konten yang muncul di FYP TikTok sesuai dengan minat saya.'],
                                ['code' => 'X02', 'question' => 'Konten yang direkomendasikan TikTok sesuai dengan ketertarikan saya.'],
                                ['code' => 'X03', 'question' => 'Sebagian besar konten yang muncul di FYP TikTok relevan dengan apa yang saya sukai.'],
                            ],
                        ],
                        [
                            'label' => 'Akurasi Prediksi Algoritma',
                            'items' => [
                                ['code' => 'X04', 'question' => 'TikTok mampu memperkirakan jenis konten yang kemungkinan besar akan saya sukai.'],
                                ['code' => 'X05', 'question' => 'Rekomendasi TikTok sesuai dengan preferensi konten yang saya miliki.'],
                                ['code' => 'X06', 'question' => 'Saya merasa TikTok dapat mengenali jenis konten yang menarik bagi saya.'],
                            ],
                        ],
                        [
                            'label' => 'Kecepatan Personalisasi',
                            'items' => [
                                ['code' => 'X07', 'question' => 'Setelah saya mulai tertarik pada suatu jenis konten, TikTok dengan cepat menyesuaikan rekomendasinya.'],
                                ['code' => 'X08', 'question' => 'Setelah saya berinteraksi dengan suatu jenis konten, TikTok dengan cepat menampilkan konten yang serupa.'],
                                ['code' => 'X09', 'question' => 'Ketika minat saya terhadap suatu jenis konten berubah, FYP TikTok segera menyesuaikan konten yang ditampilkan.'],
                            ],
                        ],
                        [
                            'label' => 'Kesadaran terhadap Filter Bubble',
                            'items' => [
                                ['code' => 'X10', 'question' => 'Saya menyadari bahwa rekomendasi TikTok dapat membuat saya lebih sering melihat jenis konten tertentu.'],
                                ['code' => 'X11', 'question' => 'Saya menyadari bahwa aktivitas saya di TikTok memengaruhi konten yang muncul di FYP.'],
                                ['code' => 'X12', 'question' => 'Saya menyadari bahwa personalisasi rekomendasi TikTok dapat membatasi keberagaman konten yang saya lihat.'],
                            ],
                        ],
                    ],
                ],
                [
                    'code' => 'Y1',
                    'label' => 'Screen Time TikTok',
                    'response_type' => 'numeric',
                    'unit' => 'minutes_per_day',
                    'items' => [
                        ['code' => 'Y1', 'question' => 'Berapa rata-rata durasi penggunaan TikTok Anda per hari berdasarkan data Screen Time di minggu sebelumnya?'],
                    ],
                ],
                [
                    'code' => 'Y2',
                    'label' => 'Kesejahteraan Digital',
                    'response_type' => 'likert',
                    'dimensions' => [
                        [
                            'label' => 'Kontrol Diri Digital',
                            'items' => [
                                ['code' => 'Y201', 'question' => 'Saya dapat mengendalikan lama waktu yang saya gunakan untuk bermain TikTok.'],
                                ['code' => 'Y202', 'question' => 'Saya dapat berhenti menggunakan TikTok ketika saya merasa sudah cukup.'],
                                ['code' => 'Y203', 'question' => 'Saya dapat mengatur penggunaan TikTok sesuai dengan batas waktu yang saya tetapkan sendiri.'],
                            ],
                        ],
                        [
                            'label' => 'Kondisi Mental-Emosional',
                            'items' => [
                                ['code' => 'Y204', 'question' => 'Secara umum, kondisi emosional saya tetap stabil setelah menggunakan TikTok.'],
                                ['code' => 'Y205', 'question' => 'Saya tidak merasa cemas atau gelisah setelah menggunakan TikTok.'],
                                ['code' => 'Y206', 'question' => 'Suasana hati saya tidak memburuk dalam waktu lama setelah menggunakan TikTok.'],
                            ],
                        ],
                        [
                            'label' => 'Keseimbangan Daring-Luring',
                            'items' => [
                                ['code' => 'Y207', 'question' => 'Saya tetap dapat menjalankan aktivitas sehari-hari meskipun menggunakan TikTok.'],
                                ['code' => 'Y208', 'question' => 'Penggunaan TikTok tidak membuat saya mengabaikan aktivitas penting di dunia nyata.'],
                                ['code' => 'Y209', 'question' => 'Saya tetap memiliki cukup waktu untuk melakukan aktivitas di luar penggunaan TikTok.'],
                            ],
                        ],
                        [
                            'label' => 'Kepuasan Subjektif',
                            'items' => [
                                ['code' => 'Y210', 'question' => 'Saya merasa puas dengan durasi waktu yang saya gunakan untuk TikTok.'],
                                ['code' => 'Y211', 'question' => 'Saya merasa pola penggunaan TikTok saya sesuai dengan kebutuhan saya sehari-hari.'],
                                ['code' => 'Y212', 'question' => 'Secara keseluruhan, saya puas dengan cara saya mengelola penggunaan TikTok saya.'],
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * Returns items in their official display and storage order.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function items(): array
    {
        $items = [];

        foreach (self::definition()['variables'] as $variable) {
            $groups = $variable['dimensions'] ?? [[
                'label' => null,
                'items' => $variable['items'],
            ]];

            foreach ($groups as $group) {
                foreach ($group['items'] as $item) {
                    $normalizedItem = [
                        'code' => $item['code'],
                        'question' => $item['question'],
                        'variable' => $variable['code'],
                        'variable_label' => $variable['label'],
                        'dimension' => $group['label'],
                        'response_type' => $variable['response_type'],
                    ];

                    if ($variable['response_type'] === 'likert') {
                        $normalizedItem['scale'] = self::LIKERT_SCALE;
                    }

                    if (array_key_exists('unit', $variable)) {
                        $normalizedItem['unit'] = $variable['unit'];
                    }

                    $items[] = $normalizedItem;
                }
            }
        }

        return $items;
    }

    /**
     * @return array<int, string>
     */
    public static function itemCodes(): array
    {
        return array_column(self::items(), 'code');
    }
}
