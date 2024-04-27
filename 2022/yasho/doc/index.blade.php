@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="steps" class="step-7">
                @include('/pages/administrator/includes/left-nav')
                <div class="content">
                    <h1>マスターデータ管理</h1>
                    <div class="page-row">
                        @include('/pages/administrator/includes/collapse-nav')
                        <div class="card page">
                            <h1>(７) 実行スケジュール【表】</h1>
                            <form action="{{ route('administrator.seven.store') }}" id="form_introduction" method="POST"
                                enctype="multipart/form-data" onsubmit="event.preventDefault()">
                                @csrf
                                <div class="form-group with-border">
                                    <label for="" class="text-md-end">{{ __('メッセージ') }}</label>
                                    <div class="">
                                        @isset($stepSheduleFormat)
                                            <textarea name="introduction_message" id="introduction_message" class="form-control">{{ $stepSheduleFormat->introduction_message ? $stepSheduleFormat->introduction_message : '' }}</textarea>
                                        @else
                                            <textarea name="introduction_message" id="introduction_message" class="form-control"></textarea>
                                        @endisset
                                    </div>
                                    <div class="btn-area">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile1"
                                                name="introduction_file">
                                            <label class="btn btn-outline-primary sml" for="customFile1">
                                                <img src="{{ asset('images/icon-attachment.svg') }}" alt="">ファイルを選択
                                            </label>
                                            @isset($stepSheduleFormat)
                                                <label id="label_introduction_file"
                                                    class="custom-file-label align-items-center">{{ $stepSheduleFormat->introduction_file}}</label>
                                            @else
                                                <label id="label_introduction_file"
                                                    class="custom-file-label align-items-center">ファイルが選択されていません</label>
                                            @endisset
                                        </div>
                                        <button type="button" class="btn btn-secondary sml" onclick="clearForm()">
                                            <img src="{{ asset('images/icon-bin.svg') }}" alt="">削除
                                        </button>
                                    </div>
                                </div>
                                <!--  -->

                                <div class="form-group mb-2 pb-0">
                                    <div class="">
                                        <button type="button" onclick="submit()" class="btn btn-success">保存する</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="empty-text">
                                        現在提供している機能はありません。
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });


        function clearForm() {
            // document.getElementById("introduction_message").value = '';
            document.getElementById("label_introduction_file").innerHTML = 'ファイルが選択されていません';
        }

        function submit() {
            document.getElementById("form_introduction").submit();
        }
    </script>
@endpush
