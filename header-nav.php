<?php $user = wp_get_current_user(); ?>
<ul class="nav nav-pills whitespace-bottom">
    <li role="presentation" <?php if ( is_front_page() ): ?>class="active"<?php endif; ?>>
        <a href="/">Inicio</a>
    </li>
    <?php /*
    <?php if ($user->ID != 0): ?>
        <li role="presentation" <?php if ( is_page( 'activity' ) ): ?>class="active"<?php endif; ?>>
            <a href="/activity">Actividad</a>
        </li>
    <?php endif; ?>
    */ ?>
    <?php if ($user->ID != 0): ?>
        <li role="presentation" <?php if ( is_page( 'modelo-de-participacion' ) ): ?>class="active"<?php endif; ?>>
            <a href="/modelo-de-participacion">Modelo de participación</a>
        </li>
    <?php endif; ?>
    <?php if ($user->ID != 0): ?>
        <li role="presentation" <?php if ( is_page( 'descargas' ) ): ?>class="active"<?php endif; ?>>
            <a href="/descargas">Descargas</a>
        </li>
    <?php endif; ?>
    <?php if ( $user->ID != 0 && (in_array('editor', $user->roles) || in_array('administrator', $user->roles)) ): ?>
        <li role="presentation" <?php if ( is_page( 'costos' ) ): ?>class="active"<?php endif; ?>>
            <a href="/costos">Costos</a>
        </li>
    <?php endif; ?>
</ul>
