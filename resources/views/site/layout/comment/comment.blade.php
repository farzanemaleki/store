<div class="reviews">
    @if($allcomments->count() > 0)

        {{--        <h3>نظر {{$allcomments->count()}}</h3>--}}
        @foreach($allcomments as $comment)
            <div class="review">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <h4><a href="#">کاربر {{$comment->user->name}}</a></h4>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                                <!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                        </div><!-- End .rating-container -->
                        <span class="review-date"> {{ $comment->diffForHumans($comment->updated_at) }} </span>
                    </div><!-- End .col -->
                    <div class="col-12">
                        <div class="review-content">
                            <p>{!! $comment->comment_body !!}</p>
                        </div><!-- End .review-content -->

                        <div class="review-action col-md-3">
                            <a href="#"><i class="icon-thumbs-up"></i>مثبت (2)</a>
                            <a href="#"><i class="icon-thumbs-down"></i>منفی (0)</a>
                            <a type="button" class="comment-reply d-inline-block" data-toggle="modal"
                               data-target="#SendReplyCommentModal"
                               data-parent_id="{{ $comment->id }}">پاسخ
                            </a>
                        </div><!-- End .review-action -->
                        @if($comment->comments->count()>0)
                        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample{{$comment->id }}" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample{{$comment->id }}">
                            <i class="icon-mail-reply"></i>پاسخ های مرتبط
                        </a>
                        @endif

                        <div class="collapse multi-collapse" id="multiCollapseExample{{$comment->id }}">
                            <div class="card card-body">
                                <hr/>
                                <ul class="javab">
                                    @foreach($comment->comments as $child)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-user">
                                                        <h4><a href="#">{{ $child->user->name }}</a></h4>
                                                        <span
                                                            class="comment-date">{{ $child->diffForHumans($child->created_at) }}</span>
                                                    </div><!-- End .comment-user -->

                                                    <div class="comment-content">
                                                        <p>{!! $child->comment_body !!}</p>
                                                    </div><!-- End .comment-content -->
                                                </div><!-- End .comment-body -->
                                                <div class="review-action col-md-3">
                                                    <a href="#"><i class="icon-thumbs-up"></i>مثبت (2)</a>
                                                    <a href="#"><i class="icon-thumbs-down"></i>منفی (0)</a>
                                                    <a type="button" class="comment-reply d-inline-block"
                                                       data-toggle="modal"
                                                       data-target="#SendReplyCommentModal2"
                                                       data-parent_id="{{ $child->id }}">پاسخ
                                                    </a>
                                                </div><!-- End .review-action -->
                                            </div><!-- End\  .comment -->

                                            <hr/>
                                            @foreach($child->comments  as $chi)
                                                <div class="comment pr-5">
                                                    <div class="comment-body">
                                                        <div class="comment-user">
                                                            <h4><a href="#">{{ $chi->user->name }}</a></h4>
                                                            <span
                                                                class="comment-date">{{ $chi->diffForHumans($chi->created_at) }}</span>
                                                        </div><!-- End .comment-user -->

                                                        <div class="comment-content">
                                                            <p>{!! $chi->comment_body !!}</p>
                                                        </div><!-- End .comment-content -->
                                                    </div><!-- End .comment-body -->
                                                    <div class="review-action col-md-3">
                                                        <a href="#"><i class="icon-thumbs-up"></i>مثبت (2)</a>
                                                        <a href="#"><i class="icon-thumbs-down"></i>منفی (0)</a>

                                                    </div><!-- End .review-action -->
                                                </div><!-- End .comment -->
                                            @endforeach
                                        </li>


                                        <div class="modal fade" id="SendReplyCommentModal2" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">پاسخ به نظر</h5>
                                                    </div>
                                                    <form method="post" action="{{ route('site.comment') }}">
                                                        <div class="modal-body">
                                                            <div class="col-sm-12">
                                                                @csrf
                                                                <input type="hidden" name="parent_id"
                                                                       value="{{ $child->id }}">
                                                                <input type="hidden" name="commentable_id"
                                                                       value="{{ $subject->id }}">
                                                                <input type="hidden" name="commentable_type"
                                                                       value="{{ get_class($subject) }}">
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">متن
                                                                        پیام:</label>
                                                                    <textarea class="form-control" name="comment_body"
                                                                              id="comment_body"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">انصراف
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">ارسال پاسخ
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div><!-- End .col-auto -->
                </div><!-- End .row -->
            </div><!-- End .review -->
        @endforeach
    @else
        <div style="margin: 30px">
            هیچ نظری تا به حال درباره این محصول ثبت نشده است.
        </div>
    @endif
</div><!-- End .نظر -->



@if(auth()->check())
    <div class="reviews">
        <div class="reply">
            <div class="heading">
                <h3 class="title">ارسال دیدگاه</h3>
            </div>
            <form action="{{route('site.comment')}}" method="POST">
                @csrf
                <input type="hidden" name="parent_id" value="0">
                <input type="hidden" name="commentable_id" value="{{$subject->id}}">
                <input type="hidden" name="commentable_type" value="{{ get_class($subject) }}">
                <lable for="comment_body" class="sr-only">دیدگاه</lable>
                <textarea name="comment_body" id="comment_body" cols="30" rows="4"
                          class="form-control" placeholder="دیدگاه شما"></textarea>
                <button type="submit" class="btn btn-outline-primary-2 float-right">
                    <span>ارسال دیدگاه</span>
                    <i class="icon-long-arrow-left"></i>
                </button>
            </form>
        </div>
    </div>
@else
    <div class="alert alert-warning col-sm-12 m-2">
        <li>
            برای ثبت نظر لطفا ابتدا وارد حساب کابری خود شوید
        </li>
    </div>
@endif

<div class="modal fade" id="SendReplyCommentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">پاسخ به نظر</h5>
            </div>
            <form method="post" action="{{ route('site.comment') }}">
                <div class="modal-body">
                    <div class="col-sm-12">
                        @csrf
                        <input type="hidden" name="parent_id" value="0">
                        <input type="hidden" name="commentable_id" value="{{ $subject->id }}">
                        <input type="hidden" name="commentable_type" value="{{ get_class($subject) }}">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">متن پیام:</label>
                            <textarea class="form-control" name="comment_body" id="comment_body"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                    <button type="submit" class="btn btn-primary">ارسال پاسخ</button>
                </div>
            </form>
        </div>
    </div>
</div>


