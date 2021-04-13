<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChannelRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        // TODO Write validation rules location
        // TODO Write validation rules locationRadius
        // TODO Write validation rules
        // TODO Write regex for regionCode, relevanceLanguage
        return [
            'q' => 'string',
            'type' => 'string|required',
            'maxResults' => 'required|max:50|integer',
            'location' => 'required_with:locationRadius|string',
            'locationRadius' => 'required_with:location|string',
            'order' => [
                'string',
                Rule::in(['date','rating','relevance','title','viewCount'])
            ],
            'pageToken' => 'string',
            'publishedAfter' => 'before:publishedBefore',
            'publishedBefore' => 'after:publishedAfter',
            'regionCode' => 'string',
            'relevanceLanguage' => 'string',
            'safeSearch' => [
                'string',
                Rule::in(['moderate','none','strict'])
            ],
            'topicId' => 'string'
        ];
    }
}
