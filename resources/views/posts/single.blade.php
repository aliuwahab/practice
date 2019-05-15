<html>
<div class="text-right"> <a href="/posts" class="btn btn-primary">Back</a> </div>
<div class="text-right"> <a href="/" class="btn btn-primary">Home</a> </div>
    <div class="panel"> <h1>{{$posts[0]->title}}</h1></div>
    <h2>{{$posts[0]->body}}</h2>


<h4>Comments</h4>

@foreach($comments as $comment)
    <div>{{$comment->name}}</div>
    <div>{{$comment->body}}</div>
    <h5>Sent By {{$comment->email}}</h5>
    <hr>
    @endforeach

</html>