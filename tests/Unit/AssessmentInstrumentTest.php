<?php

namespace Tests\Unit;

use App\Support\AssessmentInstrument;
use PHPUnit\Framework\TestCase;

class AssessmentInstrumentTest extends TestCase
{
    private const QUESTIONS = [
        'X01' => 'Konten yang muncul di FYP TikTok sesuai dengan minat saya.',
        'X02' => 'Konten yang direkomendasikan TikTok sesuai dengan ketertarikan saya.',
        'X03' => 'Sebagian besar konten yang muncul di FYP TikTok relevan dengan apa yang saya sukai.',
        'X04' => 'TikTok mampu memperkirakan jenis konten yang kemungkinan besar akan saya sukai.',
        'X05' => 'Rekomendasi TikTok sesuai dengan preferensi konten yang saya miliki.',
        'X06' => 'Saya merasa TikTok dapat mengenali jenis konten yang menarik bagi saya.',
        'X07' => 'Setelah saya mulai tertarik pada suatu jenis konten, TikTok dengan cepat menyesuaikan rekomendasinya.',
        'X08' => 'Setelah saya berinteraksi dengan suatu jenis konten, TikTok dengan cepat menampilkan konten yang serupa.',
        'X09' => 'Ketika minat saya terhadap suatu jenis konten berubah, FYP TikTok segera menyesuaikan konten yang ditampilkan.',
        'X10' => 'Saya menyadari bahwa rekomendasi TikTok dapat membuat saya lebih sering melihat jenis konten tertentu.',
        'X11' => 'Saya menyadari bahwa aktivitas saya di TikTok memengaruhi konten yang muncul di FYP.',
        'X12' => 'Saya menyadari bahwa personalisasi rekomendasi TikTok dapat membatasi keberagaman konten yang saya lihat.',
        'Y1' => 'Berapa rata-rata durasi penggunaan TikTok Anda per hari berdasarkan data Screen Time di minggu sebelumnya?',
        'Y201' => 'Saya dapat mengendalikan lama waktu yang saya gunakan untuk bermain TikTok.',
        'Y202' => 'Saya dapat berhenti menggunakan TikTok ketika saya merasa sudah cukup.',
        'Y203' => 'Saya dapat mengatur penggunaan TikTok sesuai dengan batas waktu yang saya tetapkan sendiri.',
        'Y204' => 'Secara umum, kondisi emosional saya tetap stabil setelah menggunakan TikTok.',
        'Y205' => 'Saya tidak merasa cemas atau gelisah setelah menggunakan TikTok.',
        'Y206' => 'Suasana hati saya tidak memburuk dalam waktu lama setelah menggunakan TikTok.',
        'Y207' => 'Saya tetap dapat menjalankan aktivitas sehari-hari meskipun menggunakan TikTok.',
        'Y208' => 'Penggunaan TikTok tidak membuat saya mengabaikan aktivitas penting di dunia nyata.',
        'Y209' => 'Saya tetap memiliki cukup waktu untuk melakukan aktivitas di luar penggunaan TikTok.',
        'Y210' => 'Saya merasa puas dengan durasi waktu yang saya gunakan untuk TikTok.',
        'Y211' => 'Saya merasa pola penggunaan TikTok saya sesuai dengan kebutuhan saya sehari-hari.',
        'Y212' => 'Secara keseluruhan, saya puas dengan cara saya mengelola penggunaan TikTok saya.',
    ];

    public function test_the_instrument_has_the_official_25_items_in_order(): void
    {
        $items = AssessmentInstrument::items();
        $codes = AssessmentInstrument::itemCodes();

        $this->assertCount(25, $items);
        $this->assertSame(array_keys(self::QUESTIONS), $codes);
        $this->assertSame($codes, array_values(array_unique($codes)));
        $this->assertSame(self::QUESTIONS, array_column($items, 'question', 'code'));
    }

    public function test_likert_items_and_screen_time_use_the_specified_response_types(): void
    {
        $itemsByCode = array_column(AssessmentInstrument::items(), null, 'code');

        $this->assertSame([
            1 => 'Sangat Tidak Setuju',
            2 => 'Tidak Setuju',
            3 => 'Netral',
            4 => 'Setuju',
            5 => 'Sangat Setuju',
        ], AssessmentInstrument::LIKERT_SCALE);

        foreach (array_merge(range(1, 12), range(201, 212)) as $number) {
            $code = $number <= 12 ? sprintf('X%02d', $number) : 'Y'.$number;

            $this->assertSame('likert', $itemsByCode[$code]['response_type']);
            $this->assertSame(AssessmentInstrument::LIKERT_SCALE, $itemsByCode[$code]['scale']);
        }

        $this->assertSame('numeric', $itemsByCode['Y1']['response_type']);
        $this->assertSame('minutes_per_day', $itemsByCode['Y1']['unit']);
        $this->assertArrayNotHasKey('scale', $itemsByCode['Y1']);
        $this->assertArrayNotHasKey('min', $itemsByCode['Y1']);
        $this->assertArrayNotHasKey('max', $itemsByCode['Y1']);
    }
}
