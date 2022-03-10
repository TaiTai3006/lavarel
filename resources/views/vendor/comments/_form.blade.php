<div class="card w-4/5 m-auto">
    <div class="card-body ">
        @if($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if(isset($guest_commenting) and $guest_commenting == true)
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_name_here')</label>
                    <input type="text" class="form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name" />
                    @error('guest_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_email_here')</label>
                    <input type="email" class="form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email" />
                    @error('guest_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endif

            <br><br>

            <div class="form-group">
                <label for="message">@lang('comments::comments.enter_your_message_here')</label>
                <br><br>
                <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                
        
            </div>
            <br>
            <button type="submit" class="bg-pink-600 px-5 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 rounded-3xl">@lang('comments::comments.submit')</button>
        </form>
    </div>
</div>
<br />