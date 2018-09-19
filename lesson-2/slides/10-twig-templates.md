# Twig templates

--vv--

# About Twig
- Template framework also used by Zend Framework, CodeIgniter, CakePHP, Symfony.
- Simple syntax. 
- Common helper functions available.
- Better security: sanitises output by default.
- Debugging options are build in.
- Documentation:
- http://twig.sensiolabs.org/doc/templates.html

--vv--

# block.html.twig

```twig
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    {{ content }}
  {% endblock %}
</div>
```

--vv--

# breadcrumb.html.twig

```twig
{% if breadcrumb %}
  <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
    <h2 id="system-breadcrumb" class="visually-hidden">{{ 'Breadcrumb'|t }}</h2>
    <ol>
    {% for item in breadcrumb %}
      <li>
        {% if item.url %}
          <a href="{{ item.url }}">{{ item.text }}</a>
        {% else %}
          {{ item.text }}
        {% endif %}
      </li>
    {% endfor %}
    </ol>
  </nav>
{% endif %}
```

--vv--

# Exercise
Apply the basic layout to the website.

- Create the html and page template. 
- See 'exercises/03 page/exercises.txt' for details.

--vv--

# Exercise
Add 'static' content in the page footer.

- Place a block with a custom template in de footer region of the template.
- See 'exercises/04 block/exercises.txt' for details.

--vv--

# Twig blocks

```twig
{# block.html.twig #}

<div{{ attributes }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    {{ content }}
  {% endblock %}
</div>
```

```twig
{# block—local-actions-block.html.twig #}
{% extends "block.html.twig" %}

{% block content %}
  {% if content %}
    <nav class="action-links">{{ content }}</nav>
  {% endif %}
{% endblock %}
```

--vv--

# Twig blocks & extends
- You can define custom blocks in a template (override).
- `{{ block('my_block_name') }}` prints a block
- Inside a block `{{ parent() }}` prints the original parent block.
- To extend a specific template: `{% extends "@classy/content/page-title.html.twig" %}`

- Docs: http://twig.sensiolabs.org/doc/tags/extends.html
