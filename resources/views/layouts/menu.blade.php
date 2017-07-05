<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Posts</span> </a>
    <ul>
    	<li> <a href="{!! route('posts.index') !!}"> <i class="fa fa-file-text"></i> <span>Posts</span> </a> </li>
    	<li> <a href="{!! route('posts.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Post</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Services</span> </a>
    <ul>
    	<li> <a href="{!! route('services.index') !!}"> <i class="fa fa-file-text"></i> <span>Services</span> </a> </li>
    	<li> <a href="{!! route('services.create') !!}"> <i class="fa fa-file-text"></i> <span>New</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Pages</span> </a>
    <ul>
    	<li> <a href="{!! route('pages.index') !!}"> <i class="fa fa-file-text"></i> <span>Pages</span> </a> </li>
    	<li> <a href="{!! route('pages.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Page</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('attorneys*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Attorneys</span> </a>
    <ul>
    	<li> <a href="{!! route('attorneys.index') !!}"> <i class="fa fa-file-text"></i> <span>Attorneys</span> </a> </li>
    	<li> <a href="{!! route('attorneys.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Attorney</span> </a> </li>
    </ul>
</li>

