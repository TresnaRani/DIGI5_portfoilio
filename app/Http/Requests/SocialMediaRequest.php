<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialMediaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "twitter" => ['nullable', 'string'],
            "instagram" => ['nullable', 'string'],
            "facebook" => ['nullable', 'string'],
            "whatsapp" => ['nullable', 'string'],
            "linkedin" => ['nullable', 'string'],
            "dribble" => ['nullable', 'string'],
            "youtube" => ['nullable', 'string'],
            "tumble" => ['nullable', 'string'],
            "kik" => ['nullable', 'string'],
            "vine" => ['nullable', 'string'],
            "telegram" => ['nullable', 'string'],
            "behance" => ['nullable', 'string'],
            "reddit" => ['nullable', 'string'],
            "vimeo" => ['nullable', 'string'],
            "snapchat" => ['nullable', 'string'],
            "steam" => ['nullable', 'string'],
            "pinterest" => ['nullable', 'string'],
            "imo" => ['nullable', 'string'],
            "skype" => ['nullable', 'string'],
            "askme" => ['nullable', 'string'],
            "blogger" => ['nullable', 'string'],
            "tiktok" => ['nullable', 'string'],
            "spotify" => ['nullable', 'string'],
            "quora" => ['nullable', 'string'],
            "wechat" => ['nullable', 'string'],
            "stackoverflow" => ['nullable', 'string'],
        ];
    }
}
