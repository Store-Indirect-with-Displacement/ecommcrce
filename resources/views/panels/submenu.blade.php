{{-- For submenu --}}
<ul class="menu-content">
    <?php foreach ($menu as $submenu): ?>
        <?php
        $submenuTranslation = "";
        if (isset($menu->i18n)) {
            $submenuTranslation = $menu->i18n;
        }
        ?>
        <li class="<?= (request()->is($submenu->url)) ? 'active' : '' ?>">
            <a    <a
            <?php if ($submenu->url != "#"): ?>
                      href=" <?= route($submenu->url) ?>"
                  <?php else: ?>
                      href=" <?= $submenu->url ?>"
                  <?php endif; ?>
                  >
                <i class="{{ isset($submenu->icon) ? $submenu->icon : "" }}"></i>
                       <span class="menu-title" data-i18n="<?= $submenuTranslation ?>"><?= $submenu->name ?></span>
                   </a>
                   <?php if (isset($submenu->submenu)): ?>
                       @include('panels/submenu', ['menu' => $submenu->submenu])
                   <?php endif; ?>
                 </li>
             <?php endforeach; ?>
            </ul>