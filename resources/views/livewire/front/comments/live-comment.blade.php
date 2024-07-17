<div class="comments">
  
    <h4 class="comments-count">{{ $commentsCount }} {{ __('global.comments') }}</h4>
    {{-- @dd($comments) --}}
    @if ($comments)
        @foreach ($comments as $key => $comment)
            <div id="comment-{{ $key }}" class="comment">
                <div class="d-flex">
                    <div class="comment-img">
                        <img src="{{ $comment->user->getFirstMediaUrl('avatar') ?: "/Impact/assets/img/blog/comments-2.jpg" }}" alt="{{ $comment->user?->full_name }}">
                    </div>
                    <div>
                        <h5>
                            <a href="">{{ $comment->user?->full_name }}
                            </a> <a href="#reply-form" wire:click="setReply({{ $comment->id }}, '{{ $comment->user?->full_name }}')" class="reply"><i class="bi bi-reply-fill"></i> Reply</a>
                        </h5>
                        <time datetime="2020-01-01">{{ $comment->created_at }}</time>
                        <p>
                            {!! $comment->message !!}
                        </p>
                    </div>
                </div>
                @foreach ($comment->children as $chldKey => $child)
                    <div id="comment-reply-{{ $chldKey }}" class="comment comment-reply">
                        <div class="d-flex">
                            <div class="comment-img"><img src="{{ $child->user->getFirstMediaUrl('avatar') ?: "/Impact/assets/img/blog/comments-3.jpg" }}" alt="{{ $child->user?->full_name }}"></div>
                            <div>
                                <h5><a href="">{{ $child->user?->full_name }}</a> <a href="#reply-form" wire:click="setReply({{ $child->id }}, '{{ $child->user?->full_name }}')" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">{{ $child->created_at }}</time>
                                <p>
                                    {!! $child->message !!}
                                </p>
                            </div>
                        </div>
                        @foreach ($child->children as $subKey => $subChild)
                            <div id="comment-reply-{{ $subKey }}" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ $subChild->user->getFirstMediaUrl('avatar') ?: "/Impact/assets/img/blog/comments-3.jpg" }}" alt="{{ $subChild->user?->full_name }}"></div>
                                    <div>
                                        <h5><a href="">{{ $subChild->user?->full_name }}</a> <a href="#reply-form" wire:click="setReply({{ $subChild->id }}, '{{ $subChild->user?->full_name }}')" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">{{ $subChild->created_at }}</time>
                                        <p>
                                            {!! $subChild->message !!}
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment reply #2-->
                        @endforeach
                    </div><!-- End comment reply #1-->
                @endforeach
                 

            </div><!-- End comment #{{ $key }}-->
        @endforeach
    @endif

    {{-- <div id="comment-1" class="comment">
        <div class="d-flex">
        <div class="comment-img"><img src="/Impact/assets/img/blog/comments-1.jpg" alt=""></div>
        <div>
            <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
            <time datetime="2020-01-01">01 Jan,2022</time>
            <p>
            Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
            Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
            </p>
        </div>
        </div>
    </div><!-- End comment #1 -->

    <div id="comment-2" class="comment">
        <div class="d-flex">
        <div class="comment-img"><img src="/Impact/assets/img/blog/comments-2.jpg" alt=""></div>
        <div>
            <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
            <time datetime="2020-01-01">01 Jan,2022</time>
            <p>
            Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
            </p>
        </div>
        </div>

        <div id="comment-reply-1" class="comment comment-reply">
            <div class="d-flex">
                <div class="comment-img"><img src="/Impact/assets/img/blog/comments-3.jpg" alt=""></div>
                <div>
                <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan,2022</time>
                <p>
                    Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                    Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                    Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                </p>
                </div>
            </div>

            <div id="comment-reply-2" class="comment comment-reply">
                <div class="d-flex">
                <div class="comment-img"><img src="/Impact/assets/img/blog/comments-4.jpg" alt=""></div>
                <div>
                    <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                    Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                    </p>
                </div>
                </div>

            </div><!-- End comment reply #2-->

        </div><!-- End comment reply #1-->

    </div><!-- End comment #2-->

    <div id="comment-3" class="comment">
        <div class="d-flex">
        <div class="comment-img"><img src="/Impact/assets/img/blog/comments-5.jpg" alt=""></div>
        <div>
            <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
            <time datetime="2020-01-01">01 Jan,2022</time>
            <p>
            Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
            Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
            </p>
        </div>
        </div>

    </div><!-- End comment #3 -->

    <div id="comment-4" class="comment">
        <div class="d-flex">
        <div class="comment-img"><img src="/Impact/assets/img/blog/comments-6.jpg" alt=""></div>
        <div>
            <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
            <time datetime="2020-01-01">01 Jan,2022</time>
            <p>
            Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
            </p>
        </div>
        </div>

    </div><!-- End comment #4 --> --}}

    <div class="reply-form" id="reply-form">

        <h4>{{ __('global.leave_a_reply') }}</h4>
        @if ($parentCommentId)
        {{-- <p>Your email address will not be published. Required fields are marked * </p> --}}
            <p>{!! __('global.reply_to', ['name' => $userName]) !!}</p>
        @endif
        <form wire:submit.prevent="submit">
        {{-- <div class="row">
            <div class="col-md-6 form-group">
            <input name="name" type="text" class="form-control" placeholder="Your Name*">
            </div>
            <div class="col-md-6 form-group">
            <input name="email" type="text" class="form-control" placeholder="Your Email*">
            </div>
        </div> --}}
            <div class="row">
                <div class="col form-group">
                <input wire:model.live="title" type="text" class="form-control" placeholder="{{ __('global.title') }}">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                <textarea wire:model.live="message" class="form-control" placeholder="{{ __('global.your_comment') }}"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('global.post_comment') }}</button>

        </form>

    </div>
  
</div><!-- End blog comments -->