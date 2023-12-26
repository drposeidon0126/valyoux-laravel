@extends('layouts.master')

@section('title') @lang('translation.Calendar') @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/tui-time-picker/tui-time-picker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/tui-date-picker/tui-date-picker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/tui-calendar/tui-calendar.min.css') }}" />
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Calendar @endslot
        @slot('li_1') Calendar @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="lnb">
                        <div class="lnb-new-schedule float-sm-right ml-sm-3">
                            <button id="btn-new-schedule" type="button" class="btn btn-primary lnb-new-schedule-btn" data-toggle="modal">
                                New schedule</button>
                        </div>
                        <div id="calendarList" class="lnb-calendars-d1 mt-4 mr-sm-0 mb-4"></div>
                        
                        
                        <div id="calendar" style="height: 800px;"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div id="right" class="d-none">
        <div id="menu">
            <div class="dropdown">
                <button id="dropdownMenu-calendarType" class="btn btn-primary btn-sm dropdown-toggle" type="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month" style="margin-right: 4px;"></i>
                    <span id="calendarTypeName">Dropdown</span>&nbsp;
                    <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily">
                            <i class="calendar-icon ic_view_day"></i>Daily
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly">
                            <i class="calendar-icon ic_view_week"></i>Weekly
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly">
                            <i class="calendar-icon ic_view_month"></i>Month
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2">
                            <i class="calendar-icon ic_view_week"></i>2 weeks
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3">
                            <i class="calendar-icon ic_view_week"></i>3 weeks
                        </a>
                    </li>
                    <li role="presentation" class="dropdown-divider"></li>
                    <li role="presentation">
                        <a role="menuitem" data-action="toggle-workweek">
                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek"
                                checked>
                            <span class="checkbox-title"></span>Show weekends
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" data-action="toggle-start-day-1">
                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1">
                            <span class="checkbox-title"></span>Start Week on Monday
                        </a>
                    </li>
                    <li role="presentation">
                        <a role="menuitem" data-action="toggle-narrow-weekend">
                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                            <span class="checkbox-title"></span>Narrower than weekdays
                        </a>
                    </li>
                </ul>
            </div>
            <span id="menu-navi">
                <button type="button" class="btn btn-primary btn-sm move-today" data-action="move-today">Today</button>
                <button type="button" class="btn btn-primary btn-sm move-day" data-action="move-prev">
                    <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm move-day" data-action="move-next">
                    <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
                </button>
            </span>
            <span id="renderRange" class="render-range"></span>
        </div>
    </div>
@endsection

@section('script')

    <script src="{{ URL::asset('assets/libs/tui-code-snippet/tui-code-snippet.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/tui-dom/tui-dom.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/tui-time-picker/tui-time-picker.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/tui-date-picker/tui-date-picker.min.js') }}"></script>

    <!-- plugin js -->
    <script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/chance/chance.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/tui-calendar/tui-calendar.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/calendars.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/schedules.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/calendar.init.js') }}"></script>

@endsection
