# Libraries

--vv--

# Libraries
- Library = Collection of CSS and JS + dependencies
- "Only load what you need, when you need it"
- Can depend on other libraries.
- Can disable or override other libraries.
- Naming: core/*, MODULE/*, THEME/*.
- Definition file: THEME.libraries.yml
  - Can contain multiple library definitions.
- Example core libraries: core/jquery, core/drupal, core/drupalSettings, core/backbone, core/modernizr, core/normalize, core/html5shiv.

--vv--

# Theme-library

```yaml
# File: seven.info.yml
libraries:
  - seven/global-styling
```

```yaml
# File: seven.libraries.yml
global-styling:
  version: VERSION
  css:
    base:
      css/base/elements.css: {}
      ...

install-page:
  version: VERSION
  js:
    ...
  css:
    ...
  dependencies:
   - seven/maintenance-page
```

--vv--

# Library magic

```yaml
{# forums.html.twig #}
{{ attach_library('classy/forum') }}
```

```yaml
libraries-override:
  core/drupal.vertical-tabs:
    css:
      component:
        misc/vertical-tabs.css: false
      theme:
        css/block.admin.css: css/block/block.admin.css

  core/drupal.dropbutton: false
  classy/dialog:
    example/example.drupal.dialog
```

```yaml
libraries-extend:
  core/drupal.vertical-tabs:
    - seven/vertical-tabs
  core/jquery.ui:
    - seven/seven.jquery.ui
```

--vv--

# CSS, JS modify or delete
- THEME.info.yml
  - libraries-extend: Add CSS- and JS files to an existing library.
  - libraries-override: Modify or delete CSS- and JS files of a library.
- THEME.theme
  - Add CSS/JS with '#attached'  - Modify: hook_css_alter(), hook_js_alter().
- *.html.twig
  - Add a library with {{ attach_library(…) ))

--vv--

# CSS, JS modify or delete

```php
/**
 * Implements hook_preprocess_maintenance_page().
 */
function seven_preprocess_maintenance_page(&$variables) {
  // Seven has custom styling for the maintenance page.
  $variables['#attached']['library'][] = 'seven/maintenance-page';
}
```

```php
/**
 * Implements hook_css_alter().
 */
function THEME_css_alter(&$css, AttachedAssetsInterface $assets) {
}

/**
 * Implements hook_js_alter().
 */
function THEME_js_alter(&$javascripts, AttachedAssetsInterface $assets) {
}
```

--vv--

# Exercise
Create a library for the theme.

- Add style sheets and JavaScripts to the theme using a library.
- See 'exercises/02 library/exercises.txt' for details.

--vv--

# Documentation
- Libraries:
  - https://www.drupal.org/theme-guide/8/assets \Drupal\Core\Asset
  - LibraryDiscoveryParser::parseLibraryInfo
- Asset conditions ("file { ... }"):
  - \Drupal\Core\Asset\LibraryDiscoveryParser::buildByExtension
  - See: LibraryDiscoveryParser, CssCollectionRenderer, JsCollectionRenderer.