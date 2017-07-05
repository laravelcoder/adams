<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Posts</span> </a>
    <ul>
    	<li> <a href="{!! route('posts.index') !!}"> <i class="fa fa-file-text"></i> <span>Posts</span> </a> </li>
    	<li> <a href="{!! route('posts.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Post</span> </a> </li>
    </ul>
</li>

