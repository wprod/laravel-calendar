<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Event;

class CalendarEvent extends Model implements Event
{
    protected $fillable = [
        'title',
        'start',
        'end',
        'is_all_day',
        'background_color',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['start', 'end'];

    public function getTitle()
    {
        return $this->title;
    }

    public function isAllDay()
    {
        return $this->is_all_day;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEventOptions()
    {
        return [
            'color' => $this->background_color,
        ];
    }
}