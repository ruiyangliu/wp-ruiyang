<div id="sidebar">
  <ul><!-- open whole list -->

    <li>Title of Section One
    <ul>
    <li>Apple</li>
    <li>Orange</li>
    <li>Banana</li>
    </ul>
    <ul>
    <?php wp_get_archives('type=monthly'); ?>
    </ul>
    </li><!-- closing list under section one -->
    <li>Title of Section Two
    <ul>
    <li>Beef</li>
    <li>Chicken</li>
    <li>Fish</li>
    </ul>
    </li><!-- closing list under section two -->
    <li>Title of Section Three
    <ul>
    <li>Carrot</li>
    <li>Celery</li>
    </ul>

    </li><!-- closing list under section three -->
    <li>Search</li>
    <li><?php get_search_form('searchform.php'); ?></li>

  </ul><!-- closing whole list -->
</div>
