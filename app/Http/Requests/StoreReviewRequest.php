<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    /**
     * Menentukan apakah user diizinkan melakukan request ini.
     */
    public function authorize(): bool
    {
        // Ubah menjadi 'true' agar siapa saja bisa mengisi form.
        // (Jika nanti Anda membuat sistem login, bisa diganti jadi: return auth()->check(); )
        return true; 
    }

    /**
     * Aturan validasi (Rules) untuk inputan form.
     */
    public function rules(): array
    {
        return [
            'umkm_id' => 'required|exists:umkms,id', // Harus diisi & ID-nya harus ada di tabel umkms
            'rating'  => 'required|integer|min:1|max:10', // Harus angka dari 1 sampai 10
            'comment' => 'required|string|max:1000', // Ulasan berupa teks, maksimal 1000 huruf
        ];
    }

    /**
     * Kustomisasi pesan error ke Bahasa Indonesia (Opsional tapi sangat disarankan)
     */
    public function messages(): array
    {
        return [
            'umkm_id.required' => 'Silakan pilih tempat tongkrongan terlebih dahulu.',
            'umkm_id.exists'   => 'Tempat tongkrongan yang dipilih tidak terdaftar.',
            'rating.required'  => 'Anda belum memberikan rating (1-10).',
            'rating.min'       => 'Rating paling kecil adalah 1.',
            'rating.max'       => 'Rating paling besar adalah 10.',
            'comment.required' => 'Tolong ceritakan sedikit pengalaman Anda di kolom ulasan.',
            'comment.max'      => 'Ulasan terlalu panjang, maksimal 1000 karakter.',
        ];
    }
}