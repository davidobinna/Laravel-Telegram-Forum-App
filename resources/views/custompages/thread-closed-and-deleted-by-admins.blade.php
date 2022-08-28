@extends('layouts.app')

@section('title', __('Post Closed & Deleted'))

@push('styles')
    <link href="{{ asset('css/left-panel.css') }}" rel="stylesheet">
@endpush

@section('header')
    @guest
        @include('partials.hidden-login-viewer')
    @endguest
    @include('partials.header')
@endsection
@section('content')
    @include('partials.left-panel', ['page' => 'threads'])
    <div id="middle-container" class="index-middle-width">
        <div class="flex flex-column align-center" style="padding-top: 130px">
            <svg width="100px" height="100px" fill="#202020" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M104.6,2.43h24.74c.16.27.29.75.47.77a107.74,107.74,0,0,1,33.61,8.94,3.59,3.59,0,0,0,3.27.25c9.22-4.6,19.15-7.12,29-10h13.86c4.14,1.77,8.71,2.5,12.32,5.55,9,7.57,10.21,17.6,9,28.32-1.13,10.07-4.46,19.53-8.59,28.71-.91,2-1.34,3.75-.38,6,13,30.94,12.6,61.82-.93,92.48-1.59,3.61.09,3.32,2.54,3.31,8.73-.06,17.47.1,26.2-.1a8.59,8.59,0,0,1,7.34,3.05v83.17c-1.68,1.54-3.19,3-5.86,3q-68.26-.1-136.53,0c-4.07,0-6.09-1.94-6.08-6,0-5.44-.18-10.89.08-16.33.14-3-.79-4-3.74-4.25a101,101,0,0,1-32.33-8.43,7.13,7.13,0,0,0-6.46.27,103.63,103.63,0,0,1-29.2,8.69c-21.1,2.78-34.25-9.09-33.16-30.31.57-11,4.12-21.29,8.72-31.19a9.31,9.31,0,0,0,0-8.31C-14.15,96.62,21.66,23.92,88.15,6.33,93.6,4.89,99.11,3.72,104.6,2.43Zm4,217.56V175.12c0-7.27,1-8.32,8.23-8.32,29,0,58.05-.08,87.08.09,3.5,0,5.13-1.17,6.64-4.19,24.62-49,6-109.9-41.72-136.77-2.7-1.51-4.52-1.37-7.11,0C140.38,37.47,121.3,52,103.22,68c-2.72,2.39-5.58,4.27-8.48.84s-.76-5.93,2-8.36C113.56,45.6,131.32,32,150.78,20.7c.81-.47,1.92-.7,2-1.94C115,3.49,67.39,15.82,39.44,47.67,10.86,80.23,8.3,124.73,20.54,151.93a305,305,0,0,1,28.34-41.18C53.46,105.13,58.2,99.63,63,94.17c2-2.33,4.62-2.64,7-.68s2.43,4.56.51,7c-1.43,1.81-3,3.5-4.52,5.24-14.82,17.11-28.29,35.17-39,55.2-1,1.92-1.84,3.45-.46,5.81C44.91,198.06,72.14,215.56,108.55,220Zm73.74,26c20.28,0,40.57-.07,60.85.08,3.21,0,4.08-.79,4.06-4q-.24-30.68,0-61.37c0-3.22-.8-4.06-4-4.05q-60.36.17-120.72,0c-3.21,0-4.09.78-4.06,4q.23,30.69,0,61.38c0,3.22.81,4.08,4,4.05C142.38,245.93,162.33,246,182.29,246ZM58.52,213.66C42.34,203.79,30.11,191,20.07,175.48c-3.52,9.15-6.39,17.56-6.48,26.6q-.16,18.39,18.21,18.12C40.81,220.06,49.25,217.25,58.52,213.66Zm118-194.74a119.55,119.55,0,0,1,38.31,38.19c3.63-9.23,6.51-17.93,6.48-27.26,0-11.52-5.91-17.38-17.36-17.46C194.58,12.32,185.89,15.29,176.52,18.92Zm-8.64,103.36a24.74,24.74,0,1,1,0-49.47,24.74,24.74,0,0,1,0,49.47ZM153,97.45a14.72,14.72,0,0,0,14.51,14.92,14.83,14.83,0,1,0,.24-29.65A14.86,14.86,0,0,0,153,97.45ZM81.41,131a17.14,17.14,0,1,1-17.43,17A17,17,0,0,1,81.41,131Zm-.21,9.91a7.22,7.22,0,1,0,.15,14.43A7.42,7.42,0,0,0,88.49,148,7.3,7.3,0,0,0,81.2,140.88Zm1-64.73a4.54,4.54,0,0,0-4.84,5A4.43,4.43,0,0,0,82,85.8c3.14.07,4.78-1.62,5.07-4.55C86.92,78,85.12,76.17,82.16,76.15ZM168,211.35c0-3.29-.09-6.59,0-9.88.26-8.38,6.65-14.79,14.7-14.85,8.26-.06,14.79,6.46,14.94,15.11q.16,9.63,0,19.26c-.15,8.64-6.7,15.18-15,15.11-8-.06-14.43-6.49-14.7-14.87C167.86,217.94,168,214.65,168,211.35Zm9.9-.41c0,3.28-.06,6.57,0,9.85s1.77,5.41,5.12,5.31c3.07-.09,4.69-2.14,4.72-5.21,0-6.4.08-12.81,0-19.21,0-3.07-1.78-5-4.86-5.07s-4.82,1.92-5,5S177.85,207.82,177.85,210.94ZM160.52,192.7c0-3.36-1.24-6-5-6s-4.89,2.76-4.88,6.12c0,5.27-.08,10.55,0,15.82.08,4.63-3.37,2.44-5.27,2.6s-4.86,1.53-4.69-2.7c.22-5.27.07-10.55.05-15.82,0-3.36-1.24-6.05-5-6s-4.9,2.74-4.9,6.1q0,11.12,0,22.25c0,4.28,2,6.43,6.37,6.22,1.48-.07,3,0,4.45,0,8.64,0,8.69,0,9,8.37.11,3.53,1,6.47,5.13,6.38,3.77-.08,4.79-2.9,4.79-6.22v-18.3C160.53,205.23,160.54,199,160.52,192.7Zm74.24.65c0-3.46-.77-6.57-4.87-6.64s-5.06,2.94-5,6.45c0,4.78-.31,9.58.1,14.33.35,4.11-1.83,4.16-4.69,3.87-2.44-.25-5.81,1.35-5.39-3.66s.09-9.88.09-14.83c0-3.33-1.07-6.09-4.84-6.17s-5,2.56-5.05,6c0,7.58,0,15.16,0,22.74,0,4.06,2.1,6.05,6.2,5.88,1.48-.06,3,0,4.45,0,8.63,0,8.67,0,9.1,8.72.17,3.36,1.24,6.06,5,6s4.93-2.73,4.93-6.08c0-6.1,0-12.2,0-18.3S234.74,199.45,234.76,193.35Z"/></svg>
            <h1 class="forum-color fs26 mb8">{{ __('Post Closed & Deleted By Admins') }}</h1>
            <p class="no-margin">{{ __('This post has been closed and deleted by admins as response to guidelines disrespect') }}</p>
        </div>
    </div>
@endsection