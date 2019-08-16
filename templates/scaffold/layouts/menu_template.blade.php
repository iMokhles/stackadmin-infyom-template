<li class="nav-item {{ Request::is('$ROUTE_PREFIX$$MODEL_NAME_PLURAL_CAMEL$*') ? 'active' : '' }}">
    <a href="{!! route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.index') !!}">
        <i class="ft-edit"></i>
        <span class="menu-title" data-i18n="">
            $MODEL_NAME_PLURAL_HUMAN$
        </span>
    </a>
</li>