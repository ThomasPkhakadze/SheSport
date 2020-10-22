<div class="message-wrapper">
    <ul class="messages">
        @foreach ($messages as $message)
        <li class="message clearfix">
            <!-- is either sent or recieved depending on 'from' attr  -->
            <div class="{{ ($message->from === Auth::id() ? 'sent' : 'recieved') }}">
                <p>{{ $message->message }}</p>
                <p class="date">{{ date('D M Y h:i a', strtotime($message->created_at)) }}</p>
            </div>
        </li>
        @endforeach
        <form action="{{ route('sent-message') }}" method="POST">
            @csrf
            <div class="input-text">
                <input type="text" name="message" class="submit">
            <input type="hidden" id="reciever_id" name="reciever_id">
            </div>
            
        </form>
    </ul>
    
</div>

