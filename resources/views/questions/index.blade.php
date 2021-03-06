@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <div class="columns">
                    <div class="column is-8">
                        <div class="question-head box">
                            <li><a href="#" style="color:#7a7a7a;"><span style="margin-right: 5px" class="icon"><i
                                                class="fa fa-question-circle-o"></i></span>提问</a>
                            </li>
                            <li><a href="#" style="color:#7a7a7a;"><span style="margin-right: 5px" class="icon"><i
                                                class="fa fa-navicon"></i></span>回答</a></li>
                            <li><a href="#" style="color:#7a7a7a;"><span style="margin-right: 5px" class="icon"><i
                                                class="fa fa-edit"></i></span>写文章</a></li>
                        </div>
                        <div class="question-lists">
                            <div class="new-action"><h4 class="ui dividing header"><i class="fa fa-list fa-icon-lg"
                                                                                      style="margin-right: 10px;vertical-align: bottom"></i>最新动态
                                </h4></div>
                            <hr>
                            @foreach($lists as $list)
                                <article class="media">
                                    <figure class="media-left">
                                        <p class="image is-64x64 border-radius">
                                            <img src="{{$list->user->avatar}}">
                                        </p>
                                    </figure>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <strong><a href="{{url('questions/'.$list->id)}}">{{$list->title}}</a></strong>
                                                <br>
                                                <strong><a href=""
                                                           class="user-name-a">{{$list->user->name}}</a></strong>
                                                <small>发表于{{$list->created_at->diffForHumans()}}</small>
                                                <br>
                                            <div class="article-body">
                                                {{mb_substr(strip_tags($list->body),0,66,"utf-8")}}
                                            </div>
                                            </p>
                                        </div>
                                        <nav class="level is-mobile">
                                            <div class="level-left">
                                                <a class="level-item">
                                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                                </a>
                                                <a class="level-item">
                                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                                </a>
                                                <a class="level-item">
                                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="column is-3 is-offset-1">
                        <div style="margin-bottom: 10px"> 推荐列表</div>
                        <div class="box">
                            <ul>
                                <li>Laravel中文文档</li>
                                <li>Lumen中文文档</li>
                                <li>Laravel速查表</li>
                                <li>Laravel远程工作</li>
                                <li>vtr的由来</li>
                                <li>Composer中文镜像</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script src="{{asset('js/plugins/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('js/plugins/readmore.min.js')}}"></script>
<script>
    //    $('.article-body').readmore();
</script>
@endpush
