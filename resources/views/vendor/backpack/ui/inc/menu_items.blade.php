{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Attachments" icon="la la-question" :link="backpack_url('attachment')" />
<x-backpack::menu-item title="Authors" icon="la la-question" :link="backpack_url('author')" />
<x-backpack::menu-item title="Books" icon="la la-question" :link="backpack_url('book')" />