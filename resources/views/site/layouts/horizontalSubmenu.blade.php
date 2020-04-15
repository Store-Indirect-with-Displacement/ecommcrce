{{-- For Horizontal submenu --}}
<ul class="dropdown-menu">
    <?php foreach ($menu as $submenu): ?>
        <?php
        $custom_classes = "";
        if (isset($submenu->classlist)) {
            $custom_classes = $submenu->classlist;
        }
        $submenuTranslation = "";
        if (isset($menu->i18n)) {
            $submenuTranslation = $menu->i18n;
        }
        ?>
        <li class="<?= (request()->is($submenu->url)) ? 'active' : '' ?> <?= (isset($submenu->submenu)) ? "dropdown dropdown-submenu" : '' ?> <?= $custom_classes ?>">
            <a
            <?php if ($submenu->url != "#"): ?>
                    href=" <?= route($submenu->url) ?>"
                <?php else: ?>
                    href=" <?= $submenu->url ?>"
                <?php endif; ?>
                class="dropdown-item {{ (isset($submenu->submenu)) ? "dropdown-toggle" : '' }}" <?= (isset($submenu->submenu)) ? 'data-toggle=dropdown' : '' ?>>
                <i class="{{ isset($submenu->icon) ? $submenu->icon : "" }}"></i>
                <span data-i18n="{{ $submenuTranslation }}">{{ $submenu->name }}</span>
            </a>
            <?php if (isset($submenu->submenu)): ?>
                @include('site/layouts/horizontalSubmenu', ['menu' => $submenu->submenu])
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>