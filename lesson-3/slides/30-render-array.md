# Render Array

--vv--

# Render Array in Drupal
- Goal: All HTML output of modules is in the form of a Render Array.
- All output goes via a *.html.twig template.
- Use #markup for content that contains HTML.
- Use #plain_text for plain text.
- Use #inline_template for minimal markup.

--vv--

# Render elements
<!-- .slide: class="layout-three-col" style="font-size: 70%" -->

- @RenderElement
- container
- contextual_links *
- contextual_links_placeholder
- details
- dropbutton
- fieldgroup
- fieldset
- field_ui_table *
- form
- html
- html_tag *
- inline_template
- label
- link *
- more_link
- operations
- page
- processed_text
- system_compact_link
- text_format
- toolbar
- toolbar_item
- view
- @FormElement
  - color
  - datelist
  - datetime
  - email
  - language_configuration
  - language_select
  - number
  - path
  - range
  - search
  - table
  - tel
  - url

--vv--

# In-line template

```php
$build['string'] = array(
  '#type' => 'inline_template',
  '#template' => '<span class="x">{{ var }}</span>',
  '#context' => array(
    'var' => $possible_unsafe_var,
  ),
);
```

- Render element: '#type' => 'inline_template'
- String #template may not contain PHP variables (concatenated strings). 
- Always use Twig variables + #context

--vv--

# In-line template
- In-line templates don't have a preprocess hook.
- In-line templates can be modified by overriding the Render Array.

--vv--

# Exercise
- Search for inline-templates in the Drupal code.
- Examine the operation of some of these templates.

