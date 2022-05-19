@extends('layouts.innerFront')
@section('content')

    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry format-standard">

                    <div class="s-content__media">
                        <div class="s-content__post-thumb text-center">
                            <img src="{{ asset('images/' . $post->image) }}" alt="">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title s-content__title--post">{{ $post->title }}</h1>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__entry-content">

                            <p class="lead">
                                {{ $post->body }}
                            </p>


                        </div> <!-- end s-entry__entry-content -->

                        <div class="s-content__entry-meta">

                            <div class="entry-author meta-blk">
                                <div class="byline">
                                    <span class="bytext">Автор</span>
                                    <a href="#">{{ $post->user->name }}</a>
                                </div>
                            </div>
                            <div class="meta-bottom">
                                <div class="entry-tags meta-blk">
                                    <span class="tagtext">Категорії</span>
                                     <!-- <a href="{{ route('categories.view', $categories->first()->id) }}">{{ $categories->first()->title }}</a>  -->
                                </div>

                            </div>

                        </div> <!-- s-content__entry-meta -->

                        <div class="s-content__pagenav">
                            @if ($post->previousPost())
                                <div class="prev-nav">
                                    <a href="{{route('categories.view', $categories->first()->id) }}" rel="prev">
                                    {{ $post->previousPost()->title }}
                                    <span>Попередній</span>
                                        
                                    </a>
                                </div>
                            @endif
                            @if ($post->nextPost())
                                <div class="next-nav">
                                    <a href="{{ route('categories.view', $categories->first()->id) }} }}" rel="next">
                                        <span>Наступний</span>
                                        {{ $post->nextPost()->title }}
                                    </a>
                                </div>
                            @endif
                        </div> <!-- end s-content__pagenav -->

                    </div> <!-- end s-content__primary -->
                </article> <!-- end entry -->

            </div> <!-- end column -->
        </div> <!-- end row -->
    </section> <!-- end s-content -->
@endsection
