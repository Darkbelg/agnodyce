<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SearchRequest extends FormRequest
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
            'type' => [
                'string',
                Rule::in(['channel', 'playlist', 'video'])
            ],
            'maxResults' => 'required|max:50|integer',
            'channelId' =>
                'string|prohibited_unless:type,video',
            'channelType' => [
                'string',
                Rule::in(['any', 'show']),
                'string|prohibited_unless:type,channel'
            ],
            'eventType' => [
                'string',
                Rule::in(['completed', 'live', 'upcoming']),
                'prohibited_unless:type,video'
            ],
            'location' => 'required_with:locationRadius|string|prohibited_unless:type,video',
            'locationRadius' => 'required_with:location|string|prohibited_unless:type,video',
            'order' => [
                'string',
                Rule::in(['date', 'rating', 'relevance', 'title', 'viewCount'])
            ],
            'pageToken' => 'string',
            'publishedAfter' => 'before:publishedBefore',
            'publishedBefore' => 'after:publishedAfter',
            'regionCode' => 'string',
            'relevanceLanguage' => 'string',
            'safeSearch' => [
                'string',
                Rule::in(['moderate', 'none', 'strict'])
            ],
            'topicId' => 'string',
            'videoCaption' => [
                'string',
                Rule::in(['any', 'closedCaption', 'none']),
                'prohibited_unless:type,video'
            ],
            'videoCategoryId' => 'string|prohibited_unless:type,video',
            'videoDefinition' => [
                'string',
                Rule::in(['any', 'high', 'standard']),
                'prohibited_unless:type,video'
            ],
            'videoDimension' => [
                'string',
                Rule::in(['2d', '3d', 'any']),
                'prohibited_unless:type,video'
            ],
            'videoDuration' => [
                'string',
                Rule::in(['any', 'long', 'medium', 'short']),
                'prohibited_unless:type,video'
            ],
            'videoEmbeddable' => [
                'string',
                Rule::in(['any', 'true']),
                'prohibited_unless:type,video'
            ],
            'videoLicense' => [
                'string',
                Rule::in(['any', 'creativeCommon', 'youtube']),
                'prohibited_unless:type,video'
            ],
            'videoSyndicated' => [
                'string',
                Rule::in(['any', 'true']),
                'prohibited_unless:type,video'
            ],
            'videoType' => [
                'string',
                Rule::in(['any', 'episode', 'movie']),
                'prohibited_unless:type,video'
            ]
        ];
    }
}
