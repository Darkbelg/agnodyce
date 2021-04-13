<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VideoRequest extends FormRequest
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
            'channelId' => [
                'string'
            ],
            'eventType' => [
                'string',
                Rule::in(['completed','live','upcoming'])
            ],
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
            'topicId' => 'string',
            'videoCaption' => [
                'string',
                Rule::in(['any','closedCaption','none'])
            ],
            'videoCategoryId' => 'string',
            'videoDefinition' => [
                'string',
                Rule::in(['any','high','standard'])
            ],
            'videoDimension' => [
                'string',
                Rule::in(['2d','3d','any'])
            ],
            'videoDuration' => [
                'string',
                Rule::in(['any','long','medium','short'])
            ],
            'videoEmbeddable' => [
                'string',
                Rule::in(['any','true'])
            ],
            'videoLicense' => [
                'string',
                Rule::in(['any','creativeCommon','youtube'])
            ],
            'videoSyndicated' => [
                'string',
                Rule::in(['any','true'])
            ],
            'videoType' => [
                'string',
                Rule::in(['any','episode','movie'])
            ]
        ];
    }
}
