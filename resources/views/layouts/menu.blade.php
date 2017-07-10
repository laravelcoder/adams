
<li class="{{ Request::is('lawyers*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Lawyers</span> </a>
    <ul>
        <li> <a href="{!! route('lawyers.index') !!}"> <i class="fa fa-file-text"></i> <span>Lawyers</span> </a> </li>
        <li> <a href="{!! route('lawyers.create') !!}"> <i class="fa fa-plus"></i> <span>Lawyer</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('staff*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Staff</span> </a>
    <ul>
        <li> <a href="{!! route('staff.index') !!}"> <i class="fa fa-file-text"></i> <span>Staff</span> </a> </li>
        <li> <a href="{!! route('staff.create') !!}"> <i class="fa fa-plus"></i> <span>Staff</span> </a> </li>
    </ul>
</li>


<li class="{{ Request::is('secure/posts*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Posts</span> </a>
    <ul>
        <li> <a href="{!! route('posts.index') !!}"> <i class="fa fa-file-text"></i> <span>Posts</span> </a> </li>
        <li> <a href="{!! route('posts.create') !!}"> <i class="fa fa-plus"></i> <span>Post</span> </a> </li>
        <li> <a href="{!! route('categories.index') !!}"> <i class="fa fa-file-text"></i> <span>Categories</span> </a> </li>
        <li> <a href="{!! route('categories.create') !!}"> <i class="fa fa-plus"></i> <span>Category</span> </a>
    </ul>
</li>

{{-- <li class="{{ Request::is('secure/categories*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Categories</span> </a>
    <ul>
        <li> <a href="{!! route('categories.index') !!}"> <i class="fa fa-file-text"></i> <span>Categories</span> </a> </li>
        <li> <a href="{!! route('categories.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Category</span> </a> </li>
    </ul>
</li> --}}

<li class="{{ Request::is('secure/services*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Services</span> </a>
    <ul>
    	<li> <a href="{!! route('services.index') !!}"> <i class="fa fa-file-text"></i> <span>Services</span> </a> </li>
    	<li> <a href="{!! route('services.create') !!}"> <i class="fa fa-plus"></i> <span>New</span> </a> </li>
    </ul>
</li>

<li class="{{ Request::is('secure/pages*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Pages</span> </a>
    <ul>
    	<li> <a href="{!! route('pages.index') !!}"> <i class="fa fa-file-text"></i> <span>Pages</span> </a> </li>
    	<li> <a href="{!! route('pages.create') !!}"> <i class="fa fa-plus"></i> <span>New Page</span> </a> </li>
    </ul>
</li>

{{-- <li class="{{ Request::is('secure/cases*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Cases</span> </a>
    <ul>
    	<li> <a href="{!! route('cases.index') !!}"> <i class="fa fa-file-text"></i> <span>Cases</span> </a> </li>
    	<li> <a href="{!! route('cases.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Case</span> </a> </li>
    </ul>
</li> --}}

{{-- <li class="{{ Request::is('secure/courthouses*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Courthouses</span> </a>
    <ul>
    	<li> <a href="{!! route('courthouses.index') !!}"> <i class="fa fa-file-text"></i> <span>Courthouses</span> </a> </li>
    	<li> <a href="{!! route('courthouses.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Courthouse</span> </a> </li>
    </ul>
</li> --}}

{{-- <li class="{{ Request::is('secure/courtdates*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Courtdates</span> </a>
    <ul>
    	<li> <a href="{!! route('courtdates.index') !!}"> <i class="fa fa-file-text"></i> <span>Courtdates</span> </a> </li>
    	<li> <a href="{!! route('courtdates.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Courtdate</span> </a> </li>
    </ul>
</li> --}}

{{-- <li class="{{ Request::is('secure/timelines*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Timelines</span> </a>
    <ul>
    	<li> <a href="{!! route('timelines.index') !!}"> <i class="fa fa-file-text"></i> <span>Timelines</span> </a> </li>
    	<li> <a href="{!! route('timelines.create') !!}"> <i class="fa fa-file-text"></i> <span>Create Timeline</span> </a> </li>
    </ul>
</li> --}}



<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="#"> <i class="fa fa-file-text"></i> <span>Users</span> </a>
    <ul>
    	<li> <a href="{!! route('users.index') !!}"> <i class="fa fa-file-text"></i> <span>Users</span> </a> </li>
    	<li> <a href="{!! route('users.create') !!}"> <i class="fa fa-plus"></i> <span>User</span> </a> </li>
    </ul>
</li>

