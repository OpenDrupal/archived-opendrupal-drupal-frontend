# Twig syntax

--vv--

# Syntax
- `{{ ... }}` Does print
  - Prints a variable or the result of a function.
  - Prints plain text but also renders a Render Array.
- `{% ... %}` Does Controle
  - Controls the execution of a template. Example: conditions and loops.
- `{# ... #}` Does nothing
  - For description of your twig code.

--vv--

# Functions
<!-- .slide: class="layout-two-col"-->

- Popular Twig functions:
  - addClass()
  - removeClass()
  - parent()
  - cycle()
  - constant()
- Other Twig:
  - ~
  - block & extends
- Drupal functions:
  - url()
  - link()
  - path()
  - url_from_path()
  - public methods

--vv--

# Filters
<!-- .slide: class="layout-two-col"-->

- Popular Twig filters:
  - join()
  - e, escape
  - replace()
  - default
  - abs
  - length

- Drupal filters:
  - t, t()
  - passthrough
  - safe_join()
  - drupal_escape
  - without()
  - clean_class
  - clean_id
  - format_date

--vv--

# node.html.twig
```twig
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}
<article{{ attributes.addClass(classes) }}>

  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href="{{ url }}" rel="bookmark">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer class="node__meta">
      {{ author_picture }}
      <div{{ author_attributes.addClass('node__submitted') }}>
        {% trans %}Submitted by {{ author_name|passthrough }} on {{ date|passthrough }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}

  <div{{ content_attributes.addClass('node__content') }}>
    {{ content|without('links') }}
  </div>

  {% if content.links %}
    <div class="node__links">
      {{ content.links }}
    </div>
  {% endif %}
</article>
```

--vv--

# Filters

```twig
{{ 'Add new comment'|t }}

{{ 'Last checked: @time ago'|t({'@time': time}) }}

```

--vv--

# if-else condition
```twig
{% if new is defined %}
  <mark class="new">{{ new }}</mark>
{% endif %}
```

- `{% if ... %}`
- `{% else %}`
- `{% endif %}`

```twig
<li{{ attributes.addClass(is_active ? 'is-active') }}>{{ link }}</li>

{{ current == key ? 'Current page'|t : 'Page'|t }}
```

--vv--

# for loop
```twig
    {% for item in breadcrumb %}
      <li>
        {% if item.url %}
          <a href="{{ item.url }}">{{ item.text }}</a>
        {% else %}
          {{ item.text }}
        {% endif %}
      </li>
    {% endfor %}
```

`{% for ... in ... %}`
`{% endfor %}`
`{{ loop.first }}`, `{{ loop.last }}`, `{{ loop.length }}`, `{{ loop.index }}`

--vv--

# Variables
```twig
{# assign a string value #}
{% set foo = 'foo' %}

{# assign an array #}
{% set classes = ['icon', 'topic-status-' ~ icon_status ] %}

{# assign an associative array #} 
{% set args = {'@login': user_login_url} %}

{# set a variable conditionally #} 
{% set tag = header ? 'th' : 'td' %}
```

--vv--

# Whitespace control

```twig
<figure class="caption caption-{{ tag }}{%- if classes %} {{ classes }}{%- endif %}">
{{ node }}
<figcaption>{{ caption }}</figcaption>
</figure>
```

```twig
{% spaceless %}
  <dl>
    {% for type in types %}
      <dt>{{ type.link }}</dt>
      <dd>{{ type.description }}</dd>
    {% endfor %}
  </dl>
{% endspaceless %}
```

- `{{- item -}}`, `{{- item }}`, `{{ item -}}`
- `{%- ... -%}`, etc.
- `{% spaceless %} ... {% endspaceless %}`

--vv--

# Translation
```twig
<body{{ attributes }}>
  <a href="#main-content" class="visually-hidden focusable">
    {{ 'Skip to main content'|t }}
  </a>
```

```twig
<div{{ author_attributes }}>
  {% trans %}Submitted by {{ author_name|passthrough }} on {{ date|passthrough }}{% endtrans %}
  {{ metadata }}
</div>
```

- `{{ …|t }}`
- `'...'|t({'@var': var})`
- `{% trans %} ... {% endtrans %}`

--vv--

# Exercise
Add the menu to the page.

- Use a menu block to add the menu to the page. Modify the HTML where needed.
- See /exercises/05 menu/exercise.txt' for details.

--vv--

# Twig magic

```twig
{{ sandwich.cheese }}
```

```twig
$sandwich['cheese'];
$sandwich->cheese;
$sandwich->cheese();
$sandwich->getCheese();
$sandwich->isCheese();
$sandwich->__isset('cheese');
$sandwich->__get('cheese');
```

```twig
{% if node.isPublished() %}
id="node-{{ node.id }}"
'node--type-' ~ node.bundle|clean_class
```
