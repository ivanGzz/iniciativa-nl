<?php get_header(); ?>
<div class="container">
    <?php get_header('nav'); ?>
    <?php if ( bp_has_members(bp_ajax_querystring( 'members' ) ) ) : ?>
        <p><?php bp_members_pagination_count(); ?></p>
        <p><?php bp_members_pagination_links(); ?></p>
        <?php while ( bp_members() ) : bp_the_member(); ?>
            <div class="panel panel-default">
                <div class="panel-body container">
                    <div class="row">
                        <div class="col col-sm-1 text-center">
                            <?php bp_member_avatar(); ?>
                        </div>
                        <div class="col col-sm-11">
                            <p><?php bp_member_name(); ?></p>
                            <p><?php bp_member_last_active(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php bp_member_hidden_fields(); ?>
        <p><?php bp_members_pagination_count(); ?></p>
        <p><?php bp_members_pagination_links(); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
