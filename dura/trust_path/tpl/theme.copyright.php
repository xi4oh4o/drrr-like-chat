			<div class="copyright">

				<?php if (Dura::$controller == 'default'): ?>
					<a href="#page_admin" data-rel="dialog"><?php e("Admin") ?></a> |
				<?php endif ?>

				Durarara-like-chat Copyright (c) 2010 <a href="http://suin.asia/" target="_blank" rel="external">Suin</a> | Fork (c) <?php echo gmdate('Y', time()); ?> <a href="http://bluelovers.net/" target="_blank" rel="external">bluelovers</a>
				<?php if ( !defined('DURA_HIDE_FORK' ) || !DURA_HIDE_FORK ) : ?>
				 | <a href="https://github.com/bluelovers/drrr-like-chat" target="_blank" rel="external">get this chat?</a>
				<?php endif ?>
			</div>