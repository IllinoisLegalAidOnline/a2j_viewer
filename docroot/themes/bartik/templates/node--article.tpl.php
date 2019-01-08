<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>

  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>

  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    ?>
  <!--  <div id="viewer-app"></div>
  <script>window.pushState = function () { debugger } </script>
  <script>global = window;</script>
  <script>window.less = { async: true };</script>

  <script>
    localStorage.setItem('a2jConfig', JSON.stringify({
      // path (or url) to the interview XML file
      templateURL: '/sites/all/libraries/a2j-viewer/guides/default/Guide.xml',

      // folder containing images, templates and other assets related to the interview
      // path can be relative or fully qualified but requires a trailing slash
      fileDataURL: '/sites/all/libraries/a2j-viewer/guides/default/',

      // endpoint to load an answer file at start, used for RESUME
      getDataURL: '',

      // endpoint to save the answer's file and leaves the viewer (its response replaces viewer's frame)
      setDataURL: './answers.php',

      // (Optional) ajax endpoint to silently save the answer file periodically
      autoSetDataURL: '',

      // use to replace the viewer's frame on EXIT (user 'fails' interview)
      exitURL: 'http://www.a2jauthor.org/',

      // endpoint to silent log data
      // E.g., https://lawhelpinteractive.org/a2j_logging
      logURL: '',

      // errRepURL accepts user's public submission of an error to which they can add an optional comment.
      // E.g., 'https://lawhelpinteractive.org/problem_reporting_form'
      errRepURL: ''
    }));
  </script>

  <script main="@empty"
          env="production"
          config="/sites/all/libraries/a2j-viewer/package.json!npm"
          src="/sites/all/libraries/a2j-viewer/dist/bundles/caja/viewer/app.js"
          base-url="/sites/all/libraries/a2j-viewer">
  </script>
  //  print render($content);
    ?>
  </div>-->
<!--  <h3>Go to <a href="http://ilao2019hackathon.dev.dd:8083/sites/all/libraries/a2j-viewer/viewer/viewer.html#!view/pages/page/1-Introduction" target="_blank">file</a></h3>
-->
    <iframe style="min-height:500px; width:100%" src="http://ilao2019hackathon.dev.dd:8083/sites/all/libraries/a2j-viewer/viewer/viewer.html#!view/pages/page/1-Introduction"></iframe>

    <?php
  // Remove the "Add new comment" link on the teaser page or if the comment
  // form is being displayed on the same page.
  if ($teaser || !empty($content['comments']['comment_form'])) {
    unset($content['links']['comment']['#links']['comment-add']);
  }
  // Only display the wrapper div if there are links.
  $links = render($content['links']);
  if ($links):
    ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>
