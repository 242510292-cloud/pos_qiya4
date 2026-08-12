<?php

namespace App\Http\Requests\Produk;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'name' => 'required',
        'jenis' => 'required|string|max:100',
        'purchase_price' => 'required|numeric',
        'selling_price' => 'required|numeric',
        'stock' => 'required|integer',
        'foto' => 'nullable|image',
    ];
}

    public function messages(): array
    {
        return [
            'foto.image'    => 'File yang diupload harus gambar.',
            'foto.mimes'    => 'Extensi gambar harus JPG, JPEG, PNG.',
            'foto.max'      => 'Maxsimal ukuran gambar 2MB.',
            'name.required' => 'Nama wajib diisi.',
            'email.email'   => 'Format email tidak valid.',
            'purchase_price.required' => 'Purchase price wajib diisi.',
            'purchase_price.integer'  => 'Purchase price harus diisi bilangan bulat.',
            'selling_price.required'  => 'Selling price wajib diisi.',
            'selling_price.integer'   => 'Selling price harus diisi bilangan bulat.',
            'stock.required' => 'Stock wajib diisi.',
            'stock.integer' => 'Stock harus diisi angka.',
        ];
    }
}
