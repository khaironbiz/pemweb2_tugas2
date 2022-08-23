<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_penyelenggara'  => 'required',
            'judul'             => 'required',
            'ringkasan'         => 'required',
            'isi'               => 'required',
            'date_publish'      => 'required|date',
            'harga'             => 'required|numeric',
            'kuota'             => 'required|numeric',
            'date_mulai'        => 'required|date',
            'date_selesai'      => 'required|date',
            'tempat'            => 'required',
            'status'            => 'required',
        ];
    }
}
