@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h5 mb-4">
            投稿編集
        </h1>

        <form method="POST" action="{{route('articles.update', ['article' => $article]) }}">
            @csrf
            @method('PUT')

            <fieldset class="mb-4">
                <div class="form-group">
                    <label for="title">
                        タイトル
                    </label>
                    <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') ?: $article->title }}" type="text">
                    @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{$errors->first('title')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="body">
                        本文
                    </label>

                    <textarea id="body" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="4">{{ old('body') ?: $article->body }}</textarea>
                    @if ($errors->has('body'))
                    <div class="invalid-feedback">
                        {{$errors->first('body')}}
                    </div>
                    @endif
                </div>
                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('articles.show', ['artcle' => $article]) }}">
                        キャンセル
                    </a>
                    <button type="submit" class="btn btn-primary">
                        更新する
                    </button>
                </div>
            </fieldset>


        </form>
    </div>
</div>
@endsection