<?php
queue_js_file('vendor/tinymce/tinymce.min');
$head = array('bodyclass' => 'babela primary',
    'title' => __('Babela | Translate Simple Vocab Fields'));
echo head($head);
echo flash();
?>
    <nav id="section-nav" class="navigation vertical">
        <ul class="dropdown">
            <li>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/help'>Fonctionnement du plugin</a>
            </li>
            <li>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/menus'>Menus</a>
            </li>
            <li>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/simple-vocab'>Simple Vocab</a>
            </li>
            <li>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/list-simple-pages'>Simple Pages</a>
            </li>
            <li class='active'>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/terms'>Termes</a>
            </li>
            <li>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/list-exhibits-pages'>Expositions</a>
            </li>
            <li>
                <a href='<?php echo WEB_ROOT; ?>/admin/babela/tags'>Tags</a>
            </li>
        </ul>
    </nav>
    <h2>Saisissez les traductions des éléments de menus</h2>

<?php
echo $form;
echo foot();
?>