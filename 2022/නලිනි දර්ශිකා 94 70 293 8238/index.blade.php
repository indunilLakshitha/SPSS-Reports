@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="document-steps" class="step7">
                <div class="content">
                    <div class="breadcrumb">
                        <div class="item">プロジェクト名</div>
                        <div class="item">その１ 補助事業の具体的取組内容</div>
                        <div class="item">(７) 実行スケジュール【表】</div>
                    </div>
                    <div class="page-row">
                        @include('/pages/includes/collapse-nav-doc')
                        <div class="card page">
                            <h1>(７) 実行スケジュール【表】</h1>
                            <p class="into-para">
                                @isset($stepSheduleFormat)
                                    {{ $stepSheduleFormat->introduction_message ? $stepSheduleFormat->introduction_message : '' }}
                                @else
                                    ''
                                @endisset
                            </p>
                            <form
                                action="{{ route('project.document.seven.store', ['id' => $id, 'unique_code' => $unique_code]) }}"
                                method="POST" onsubmit="event.preventDefault()" id="sevenForm">
                                @csrf
                                <div class="form-group with-border">
                                    @isset($stepSheduleFormat->introduction_file)
                                        <img src="{{ asset('images/document/' . $stepSheduleFormat->introduction_file) }}"
                                            class="image-default" alt="" width="700px">
                                    @else
                                        <img src="{{ asset('images/document/image-default.svg') }}" class="image-default"
                                            alt="">
                                    @endisset
                                </div>
                                <div class="form-group">
                                    <div class="check-area">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault1" required checked>
                                            <label class="form-check-label" for="flexCheckDefault1">機械設置</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault2" required checked>
                                            <label class="form-check-label" for="flexCheckDefault2">システム開発</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pb-0 mt-50">
                                    <label for="" class="text-md-end">
                                        {{ __('売上高グラフ') }}
                                    </label>
                                    <label for="" class="sml">{{ __('開始月') }}</label>
                                    <div class="">
                                        <select class="form-select w-180" onclick="changeDate(this.value)">
                                            <option value="2021/2" selected>2021年 1月</option>
                                            <option value="2021/2">2021年 2月</option>
                                            <option value="2021/3">2021年 3月</option>
                                            <option value="2021/4">2021年 4月</option>
                                            <option value="2021/5">2021年 5月</option>
                                            <option value="2021/6">2021年 6月</option>
                                            <option value="2021/7">2021年 7月</option>
                                            <option value="2021/8">2021年 8月</option>
                                            <option value="2021/9">2021年 9月</option>
                                            <option value="2021/10">2021年 10月</option>
                                            <option value="2021/11">2021年 11月</option>
                                            <option value="2021/12">2021年 12月</option>
                                            <option value="2022/1">2022年 1月</option>
                                            <option value="2022/2">2022年 2月</option>
                                            <option value="2022/3">2022年 3月</option>
                                            <option value="2022/4">2022年 4月</option>
                                            <option value="2022/5">2022年 5月</option>
                                            <option value="2022/6">2022年 6月</option>
                                            <option value="2022/7">2022年 7月</option>
                                            <option value="2022/8">2022年 8月</option>
                                            <option value="2022/9">2022年 9月</option>
                                            <option value="2022/10">2022年 10月</option>
                                            <option value="2022/11">2022年 11月</option>
                                            <option value="2022/12">2022年 12月</option>
                                            <option value="2023/1">2023年 1月</option>
                                            <option value="2023/2">2023年 2月</option>
                                            <option value="2023/3">2023年 3月</option>
                                            <option value="2023/4">2023年 4月</option>
                                            <option value="2023/5">2023年 5月</option>
                                            <option value="2023/6">2023年 6月</option>
                                            <option value="2023/7">2023年 7月</option>
                                            <option value="2023/8">2023年 8月</option>
                                            <option value="2023/9">2023年 9月</option>
                                            <option value="2023/10">2023年 10月</option>
                                            <option value="2023/11">2023年 11月</option>
                                            <option value="2023/12">2023年 12月</option>
                                            <option value="2024/1">2024年 1月</option>
                                            <option value="2024/2">2024年 2月</option>
                                            <option value="2024/3">2024年 3月</option>
                                            <option value="2024/4">2024年 4月</option>
                                            <option value="2024/5">2024年 5月</option>
                                            <option value="2024/6">2024年 6月</option>
                                            <option value="2024/7">2024年 7月</option>
                                            <option value="2024/8">2024年 8月</option>
                                            <option value="2024/9">2024年 9月</option>
                                            <option value="2024/10">2024年 10月</option>
                                            <option value="2024/11">2024年 11月</option>
                                            <option value="2024/12">2024年 12月</option>
                                            <option value="2025/1">2025年 1月</option>
                                            <option value="2025/2">2025年 2月</option>
                                            <option value="2025/3">2025年 3月</option>
                                            <option value="2025/4">2025年 4月</option>
                                            <option value="2025/5">2025年 5月</option>
                                            <option value="2025/6">2025年 6月</option>
                                            <option value="2025/7">2025年 7月</option>
                                            <option value="2025/8">2025年 8月</option>
                                            <option value="2025/9">2025年 9月</option>
                                            <option value="2025/10">2025年 10月</option>
                                            <option value="2025/11">2025年 11月</option>
                                            <option value="2025/12">2025年 12月</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="row_count"
                                        id="row_count_total"value="{{ count($rounds) }}">
                                    <input type="hidden" name="row_count_system" id="row_count_total_system"
                                        value="{{ count($systemRounds) }}">
                                    <input type="hidden" name="row_max" id="row_max">
                                    <input type="hidden" name="row_max_system" id="row_max_system">

                                    <!--  -->
                                    <label for="" class="sml underlined">
                                        {{ __('機械導入') }}
                                    </label>
                                    <div class="table-area">
                                        <table class="table" id="machine_data">
                                            <thead>
                                                <tr>
                                                    <th class="headcol">&nbsp;</th>
                                                    <th class="headcol2">担当</th>
                                                    <th id="machine_date_1">2022年1月</th>
                                                    <th id="machine_date_2">2022年2月</th>
                                                    <th id="machine_date_3">2022年3月</th>
                                                    <th id="machine_date_4">2022年4月</th>
                                                    <th id="machine_date_5">2022年5月</th>
                                                    <th id="machine_date_6">2022年6月</th>
                                                    <th id="machine_date_7">2022年7月</th>
                                                    <th id="machine_date_8">2022年8月</th>
                                                    <th id="machine_date_9">2022年9月</th>
                                                    <th id="machine_date_10">2022年10月</th>
                                                    <th id="machine_date_11">2022年11月</th>
                                                    <th id="machine_date_12">2022年12月</th>
                                                    <th class="headcol-end">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($flg))
                                                    @foreach ($rounds as $index => $value)
                                                        <script type="text/javascript">
                                                            setTimeout(function() {
                                                                count_row_numbers('{{ $index + 1 }}');
                                                            }, 1000);
                                                        </script>
                                                        <tr id="rw_{{ $index }}">
                                                            <td class="headcol"><input type="text"
                                                                    name="row.{{ $index + 1 }}[]" id=""
                                                                    class="form-control w-150"
                                                                    value="{{ $value[0]['process_name'] }}" />
                                                            </td>
                                                            <td class="headcol2"><input type="text"
                                                                    name="row.{{ $index + 1 }}[]" id=""
                                                                    class="form-control w-150" placeholder="責任者名"
                                                                    value="{{ $value[0]['assignee_name'] }}" /></td>
                                                            @foreach ($value as $key => $item)
                                                                <td>
                                                                    <div class="form-check"><input
                                                                            class="form-check-input" type="checkbox"
                                                                            name="row.{{ $index + 1 }}[]"
                                                                            value="{{ $key + 1 }}" id=""
                                                                            {{ $item['checked'] ? 'checked' : '' }}></div>
                                                                </td>
                                                            @endforeach
                                                            <td class="headcol-end">
                                                                <button class="btn btn-secondary sml" type="button"
                                                                    onclick="removeRow(this)">
                                                                    <img src="{{ asset('images/icon-bin.svg') }}"
                                                                        alt="">削除
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    {{-- when first time --}}
                                                    @foreach ($rounds as $index => $value)
                                                        <tr id="rw_{{ $index }}">
                                                            <td class="headcol"><input type="text"
                                                                    name="row.{{ $index + 1 }}[]" id=""
                                                                    class="form-control w-150"
                                                                    value="{{ $value[0]['process_name'] }}" />
                                                            </td>
                                                            <td class="headcol2"><input type="text"
                                                                    name="row.{{ $index + 1 }}[]" id=""
                                                                    class="form-control w-150"
                                                                    placeholder="{{ $value[0]['assignee_name'] }}"
                                                                    value="" /></td>
                                                            @foreach ($value as $key => $item)
                                                                <td>
                                                                    <div class="form-check"><input
                                                                            class="form-check-input" type="checkbox"
                                                                            name="row.{{ $index + 1 }}[]"
                                                                            value="{{ $key + 1 }}" id=""
                                                                            {{ $item['checked'] ? 'checked' : '' }}></div>
                                                                </td>
                                                                {{-- <input type="hidden" value="{{ $index + 1 }}"
                                                                    name="row_count" id="row_count"> --}}
                                                            @endforeach
                                                            <td class="headcol-end">
                                                                <button class="btn btn-secondary sml" type="button"
                                                                    onclick="removeRow(this)">
                                                                    <img src="{{ asset('images/icon-bin.svg') }}"
                                                                        alt="">削除
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="submit" class="btn btn-primary sml left-center"
                                        onclick="addNewMachinIntroduction()">
                                        <img src="{{ asset('images/icon-plus.svg') }}" />さらに追加する
                                    </button>
                                    <!--  -->
                                    <label for="" class="sml underlined">
                                        {{ __('システム開発') }}
                                    </label>
                                    <div class="table-area">
                                        <table class="table" id="system_data">
                                            <thead>
                                                <tr id="date_system">
                                                    <th class="headcol">&nbsp;</th>
                                                    <th class="headcol2">担当</th>
                                                    <th id="system_date_1">2022年1月</th>
                                                    <th id="system_date_2">2022年2月</th>
                                                    <th id="system_date_3">2022年3月</th>
                                                    <th id="system_date_4">2022年4月</th>
                                                    <th id="system_date_5">2022年5月</th>
                                                    <th id="system_date_6">2022年6月</th>
                                                    <th id="system_date_7">2022年7月</th>
                                                    <th id="system_date_8">2022年8月</th>
                                                    <th id="system_date_9">2022年9月</th>
                                                    <th id="system_date_10">2022年10月</th>
                                                    <th id="system_date_11">2022年11月</th>
                                                    <th id="system_date_12">2022年12月</th>
                                                    <th class="headcol-end">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($flg))
                                                    @foreach ($systemRounds as $index => $value)
                                                        <script type="text/javascript">
                                                            setTimeout(function() {
                                                                count_row_numbers_systems('{{ $index + 1 }}');
                                                            }, 1000);
                                                        </script>
                                                        <tr id="rw_{{ $index }}">
                                                            <td class="headcol"><input type="text"
                                                                    name="system_row.{{ $index + 1 }}[]"
                                                                    id="" class="form-control w-150"
                                                                    value="{{ $value[0]['process_name'] }}" />
                                                            </td>
                                                            <td class="headcol2"><input type="text"
                                                                    name="system_row.{{ $index + 1 }}[]"
                                                                    id="" class="form-control w-150"
                                                                    placeholder=""
                                                                    value="{{ $value[0]['assignee_name'] }}" /></td>
                                                            @foreach ($value as $key => $item)
                                                                <td>
                                                                    <div class="form-check"><input
                                                                            class="form-check-input" type="checkbox"
                                                                            name="system_row.{{ $index + 1 }}[]"
                                                                            value="{{ $key + 1 }}" id=""
                                                                            {{ $item['checked'] ? 'checked' : '' }}></div>
                                                                </td>
                                                            @endforeach
                                                            <td class="headcol-end">
                                                                <button class="btn btn-secondary sml" type="button"
                                                                    onclick="removeRowSystem(this)">
                                                                    <img src="{{ asset('images/icon-bin.svg') }}"
                                                                        alt="">削除
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    {{-- when first time --}}
                                                    @foreach ($systemRounds as $index => $value)
                                                        <tr id="rw_{{ $index }}">
                                                            <td class="headcol"><input type="text"
                                                                    name="system_row.{{ $index + 1 }}[]"
                                                                    id="" class="form-control w-150"
                                                                    value="{{ $value[0]['process_name'] }}" />
                                                            </td>
                                                            <td class="headcol2"><input type="text"
                                                                    name="system_row.{{ $index + 1 }}[]"
                                                                    id="" class="form-control w-150"
                                                                    placeholder="責任者名"
                                                                    value="{{ $value[0]['assignee_name'] }}" /></td>
                                                            @foreach ($value as $key => $item)
                                                                <td>
                                                                    <div class="form-check"><input
                                                                            class="form-check-input" type="checkbox"
                                                                            name="system_row.{{ $index + 1 }}[]"
                                                                            value="{{ $key + 1 }}" id=""
                                                                            {{ $item['checked'] ? 'checked' : '' }}></div>
                                                                </td>
                                                                {{-- <input type="hidden" value="{{ $index + 1 }}"
                                                                    name="row_count" id="row_count"> --}}
                                                            @endforeach
                                                            <td class="headcol-end">
                                                                <button class="btn btn-secondary sml" type="button"
                                                                    onclick="removeRowSystem(this)">
                                                                    <img src="{{ asset('images/icon-bin.svg') }}"
                                                                        alt="">削除
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="submit" class="btn btn-primary sml left-center"
                                        onclick="addNewSystemIntroduction()">
                                        <img src="{{ asset('images/icon-plus.svg') }}" />さらに追加する
                                    </button>
                                </div>
                                <!--  -->
                                <div class="form-group mb-0 pb-0">
                                    <div class="btn-area">
                                        <button class="btn btn-warning" type="button"
                                            onclick="submitFormSeven('temp')">一時保存</button>
                                        <button type="button" onclick="submitFormSeven('fixed')"
                                            class="btn btn-success">完了</button>
                                    </div>
                                </div>
                                <div class="form-group list-group">
                                    <ul id="commentList">
                                        @isset($stepSheduleComments)
                                            @foreach ($stepSheduleComments as $item)
                                                <li id="comment_{{ $item->id }}">
                                                    <div class="list-left">
                                                        <div class="gray-text-area">
                                                            <span class="date-text">{{ $item->created_at }}</span>
                                                            <span class="info-text">高崎幸男
                                                                <span>{{ $item->comment_user_name }}</span></span>
                                                        </div>
                                                        <p>{{ $item->body }}</p>
                                                    </div>
                                                    <div class="list-right">
                                                        <button class="btn btn-outline-primary sml"
                                                            onclick="copyComment('{{ $id }}','{{ $unique_code }}','{{ $item->id }}')">
                                                            <img src="{{ asset('images/icon-copy.svg') }}"
                                                                alt="">リンクをコピー
                                                        </button>
                                                        <button class="btn btn-secondary sml"
                                                            onclick="deleteComment('{{ $id }}','{{ $unique_code }}','{{ $item->id }}')">
                                                            <img src="{{ asset('images/icon-bin.svg') }}" alt="">削除
                                                        </button>
                                                    </div>

                                                </li>
                                            @endforeach
                                        @endisset

                                    </ul>
                                    <textarea name="comment_text" id="comment_text" class="form-control"></textarea>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" 
                                    data-bs-target="#exampleModal">投稿する</button>
                                        {{-- onclick="submitCommentStepSeven('{{ $id }}','{{ $unique_code }}')">投稿する</button> --}}
                                </div>
                            </form>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade alertModal" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        書類の内容に変更を加えた場合、「一時保存」または「完了」をしない限り、入力した内容が保存されないかもしれませんが、操作を続けますか？
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">いいえ</button>
                                        <button type="button" onclick="submitCommentStepSeven('{{ $id }}','{{ $unique_code }}')" data-bs-dismiss="modal"
                                            class="btn btn-primary">はい
                                        </button>
                                    </div>
                                </div>
                            </div>
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

        function showModel() {
            console.log('model');
            $(".exampleModalS").show();
        }

        function submitFormSeven(action) {
            if (action == 'temp') {
                $('#sevenForm').append('<input type="hidden" name="flg" value="1" />');
            } else if (action == 'fixed') {
                $('#sevenForm').append('<input type="hidden" name="flg" value="0" />');
            }
            document.getElementById("sevenForm").submit();
        }

        function removeRow(row_index) {

            var row_count = document.querySelector('#row_count_total').value;
            var i = row_index.parentNode.parentNode.rowIndex;
            document.getElementById("machine_data").deleteRow(i);

            document.querySelector('#row_count_total').value = Number(row_count) - 1;
        }

        function removeRowSystem(row_index) {

            var row_count_system = document.querySelector('#row_count_total_system').value;
            var i = row_index.parentNode.parentNode.rowIndex;
            document.getElementById("system_data").deleteRow(i);

            document.querySelector('#row_count_total_system').value = Number(row_count_system) - 1;
        }

        function count_row_numbers(row_index) {

            row_max = 1;
            if (row_max < row_index) {
                row_max = row_index;
            }
            document.querySelector('#row_max').value = row_max;

        }

        function count_row_numbers_systems(row_index) {

            row_max = 1;
            if (row_max < row_index) {
                row_max = row_index;
            }
            document.querySelector('#row_max_system').value = row_max;

        }

        function addNewSystemIntroduction() {

            row_no = Number(document.querySelector('#row_max_system').value) + 1;
            document.querySelector('#row_max_system').value = Number(document.querySelector('#row_max_system').value) + 1
            row_no = row_no + 1;
            row_one = `<tr id="row_${row_no}">
                        <td class="headcol"><input type="text" name="system_row_${row_no}[]"
                                id="" class="form-control w-150" value="" />
                        </td>
                        <td class="headcol2"><input type="text" name="system_row_${row_no}[]"
                                id="" class="form-control w-150"
                                placeholder="" /></td>`;

            for (i = 1; i <= 12; i++) {
                row_one +=
                    `<td>
                <div class="form-check"><input class="form-check-input" value="${i}"
                                    type="checkbox"  name="system_row_${row_no}[]" id=""></div>
                    </td>`
            }
            row_one += ` <td class="headcol-end">
                            <button class="btn btn-secondary sml" onclick="removeRow(this)">
                                <img src="{{ asset('images/icon-bin.svg') }}"
                                    alt="">削除
                            </button>
                        </td>
                    </tr>`;

            $('#system_data').append(row_one);


        }

        function addNewMachinIntroduction() {

            row_no = Number(document.querySelector('#row_max').value) + 1;
            document.querySelector('#row_max').value = Number(document.querySelector('#row_max').value) + 1
            row_no = row_no + 1;
            row_one = `<tr id="row_${row_no}">
                        <td class="headcol"><input type="text" name="row_${row_no}[]"
                                id="" class="form-control w-150" value="" />
                        </td>
                        <td class="headcol2"><input type="text" name="row_${row_no}[]"
                                id="" class="form-control w-150"
                                placeholder="" /></td>`;

            for (i = 1; i <= 12; i++) {
                row_one +=
                    `<td>
                <div class="form-check"><input class="form-check-input" value="${i}"
                                    type="checkbox"  name="row_${row_no}[]" id=""></div>
                    </td>`
            }
            row_one += ` <td class="headcol-end">
                            <button class="btn btn-secondary sml" onclick="removeRow(this)">
                                <img src="{{ asset('images/icon-bin.svg') }}"
                                    alt="">削除
                            </button>
                        </td>
                    </tr>`;

            $('#machine_data').append(row_one);


        }

        function changeDate(data) {
            var myArray = data.split("/");
            var year = myArray[0];
            var month = myArray[1];
            month = Number(month) - 1;
            // console.log('asd'+month);
            for (i = 1; i <= 12; i++) {
                month = month;
                month = Number(month) + 1;
                if (month > 12) {
                    month = Number(month) - 12;
                    year = Number(year) + 1;
                }
                var tdm = document.getElementById('machine_date_' + i);
                var tdsytem = document.getElementById('system_date_' + i);
                tdm.innerHTML = year + '年' + month + '月';
                tdsytem.innerHTML = year + '年' + month + '月';
                // console.log(tdsytem);
            }

        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });

        function submitCommentStepSeven(id, unique_no) {

            commentValue = document.getElementById("comment_text").value
            if (commentValue != '') {
                // projectId = document.getElementById("project_id").value
                // code = document.getElementById("code").value
                // $(".alertModal").hide();
                let text;
                $.ajax({
                    url: "/projects/" + id + "/documents/" + unique_no + "/step_groups/1/steps/7/comments",
                    method: "POST",
                    data: {
                        "commentValue": commentValue,
                        "projectId": id
                    },
                    type: 'json',
                    success: function(data) {

                        if (data != 'faild') {
                            document.getElementById("comment_text").value = "";
                            $("#commentList").append(`
                            <li id="comment_${data.data.id }">
                                <div class="list-left">
                                    <div class="gray-text-area">
                                        <span class="date-text">${data.time}</span>
                                        <span class="info-text">西田次郎 <span>${data.data.comment_user_name}</span></span>
                                    </div>
                                    <p>${data.data.body}</p>
                                </div>
                                <div class="list-right">
                                    <button class="btn btn-outline-primary sml" onclick="copyComment(${id},${data.unique_no},${ data.data.id })">
                                        <img src="{{ asset('images/icon-copy.svg') }}" alt="">リンクをコピー
                                    </button>
                                    <button class="btn btn-secondary sml" onclick="deleteComment(${id},${data.unique_no},${ data.data.id })">
                                        <img src="{{ asset('images/icon-bin.svg') }}" alt="">削除
                                    </button>
                                </div>
                        </li>
                    `);
                        }
                    }
                });
            }
        }


        function deleteComment(id, unique_no, comment_id) {

            $.ajax({
                url: "/projects/" + id + "/documents/" + unique_no + "/step_groups/1/steps/7/comments/" +
                    comment_id,
                method: "DELETE",
                data: {

                },
                type: 'json',
                success: function(data) {
                    $(`#comment_${comment_id}`).remove();

                }

            })
        }

        function copyComment(id, unique_no, comment_id) {

            var APP_URL = {!! json_encode(url('/')) !!}

            var text =
                `${APP_URL}/projects/${id}/documents/${unique_no}/step_groups/1/steps/7#comment_${comment_id}`;

            var dummy = document.createElement("textarea");

            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);

        }
    </script>
@endpush
