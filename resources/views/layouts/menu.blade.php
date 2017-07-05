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
    	<li> <a href="{!! route('pages.create') !!}"> <i class="fa fa-file-text"></i> <span>New Page</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('attorneys*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Attorneys</span> </a>
    <ul>
    	<li> <a href="{!! route('attorneys.index') !!}"> <i class="fa fa-file-text"></i> <span>Attorneys</span> </a> </li>
    	<li> <a href="{!! route('attorneys.create') !!}"> <i class="fa fa-file-text"></i> <span>New Attorney</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('staff*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Staff</span> </a>
    <ul>
    	<li> <a href="{!! route('staff.index') !!}"> <i class="fa fa-file-text"></i> <span>Staff</span> </a> </li>
    	<li> <a href="{!! route('staff.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Staff</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('cases*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Cases</span> </a>
    <ul>
    	<li> <a href="{!! route('cases.index') !!}"> <i class="fa fa-file-text"></i> <span>Cases</span> </a> </li>
    	<li> <a href="{!! route('cases.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Case</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('courthouses*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Courthouses</span> </a>
    <ul>
    	<li> <a href="{!! route('courthouses.index') !!}"> <i class="fa fa-file-text"></i> <span>Courthouses</span> </a> </li>
    	<li> <a href="{!! route('courthouses.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Courthouse</span> </a> </li>
    </ul>
</li>

