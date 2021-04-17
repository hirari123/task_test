<!-- 記事詳細画面 -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    showです
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $gender }}
                    {{ $age }}
                    {{ $contact->contact }}
                    <form action="{{ route('contact.edit', ['id' => $contact->id ]) }}" method="GET">
                        @csrf

                        <input type="submit" class="btn btn-info" value="変更する">
                    </form>

                    <!-- 削除処理 -->
                    <form action="{{ route('contact.destroy', ['id' => $contact->id ]) }}" method="POST" id="delete_{{ $contact->id }}">
                    @csrf
                    <!-- JavaScriptで確認メッセージを呼び出す -->
                    <a href="#" class="btn btn-danger" data-id='{{ $contact->id }}' onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか??')) {
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>

@endsection
