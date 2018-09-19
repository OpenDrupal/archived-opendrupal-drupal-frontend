# Preprocess and Hooks

--vv--

# Preprocess
- Only 'preprocess' (no more 'process').
- Available for templates. Not for inline templates.
- Put the theme's PHP code in the THEME.theme file.
- Function names:
  - THEME_preprocess_HOOK()
  - THEME_preprocess_RENDER_ELEMENT()

--vv--

# Theme Suggestions

```php
function node_theme_suggestions_node(array $variables) {
  $suggestions = array();
  $node = $variables['elements']['#node'];
  $sanitized_view_mode = strtr($variables['elements']['#view_mode'], '.', '_');

  $suggestions[] = 'node__' . $sanitized_view_mode;
  $suggestions[] = 'node__' . $node->bundle();
  $suggestions[] = 'node__' . $node->bundle() . '__' . $sanitized_view_mode;
  $suggestions[] = 'node__' . $node->id();
  $suggestions[] = 'node__' . $node->id() . '__' . $sanitized_view_mode;
  return $suggestions;
}
```

- $variables['theme_hook_suggestion'] no longer exists. 
- Theme suggestions via hooks:
  - hook_theme_suggestions_HOOK()
  - hook_theme_suggestions_HOOK_alter()
  - hook_theme_suggestions_alter()

--vv--

# Exercise
Advanced CSS and JS handling in the theme.

- Only to load CSS rules for logged-in users when a user is logged in.
- Move as much JavaScript to the page footer as possible.
- See 'exercise/06 preprocess/exercises.txt' for details
