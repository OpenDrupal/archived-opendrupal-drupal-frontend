# Debugging

--vv--

# Debugging Twig
- Twig configuration in (development.)services.yml:

```yaml
# File: (development.)services.yml
parameters:
  twig.config:
    debug: false
    auto_reload: null
    cache: true
```
    
```twig
{{ dump(...) }}
{{ kint(...) }}
```

- Documentation: http://drupal.org/node/1906780

--vv--

# Debugging Twig

```html
<!-- THEME DEBUG -->
<!-- THEME HOOK: 'region'-->
<!-- FILE NAME SUGGESTIONS:
   * region--content.html.twig
   x region.html.twig
 —>
<!-- BEGIN OUTPUT from 'core/modules/system/templates/region.html.twig' —>
<div class="region region-content”>…</div>
<!-- END OUTPUT from 'core/modules/system/templates/region.html.twig' -->
```

--vv--

# Dump, Kint

```twig
{{ dump(attibutes) }}
{{ dump(attibutes.class) }}
{{ dump(_context|keys) }}
```

Devel Kint module:

```twig
{{ kint() }}
{{ kint(_context|keys) }}
```

--vv--

# Template cache

![Compiled template files in sites/files](lesson-2/slides/images/files-php-twig.png)<!-- .element: style="width: 50%;" -->

--vv--

# Demo
- Debug breadcrumb template
  - breadcrumb
  - item
- Debug node template
  - node keys
  - node-id
  - url_from_path()
  - node-uuid value
- drush cc render

--vv--

# Exercise
- Modify the service.yml file to enable Twig debugging:
  - debug: true
- Search for debug text in de HTML of the page: `(<!-- THEME DEBUG —>)`
- Choose a template and debug its variables with: `{{ dump() }}` or `{{ kint() }}`

--vv--

# Exercise
- Read the text at the end of the settings.php file about 'Load local development'. Activate the code by removing the '#'.
- Create a settings.local.php file with:

```php
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$config['system.performance']['cache']['page']['max_age'] = 0;
$config['system.logging']['error_level'] = 'all';
```
